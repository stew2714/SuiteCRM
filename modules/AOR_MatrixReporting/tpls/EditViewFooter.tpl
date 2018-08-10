{literal}
<style type="text/css">
    #EditView_tabs {float: left;}
</style>
{/literal}

<div id="report-editview-footer" style="width:100%">


{literal}
    <script src="modules/AOR_Reports/js/jqtree/tree.jquery.js"></script>
    <script src="modules/AOMR_Conditions/conditionLines.js"></script>
    <script src="modules/AOR_Charts/chartLines.js"></script>

    <link rel="stylesheet" href="include/javascript/jquery/themes/base/jquery-ui.min.css">
    <script src="include/javascript/jquery/jquery-ui-min.js"></script>

<script>
    $(document).ready(function(){
        SUGAR.util.doWhen("typeof $('#fieldTree').tree != 'undefined'", function(){
            var $moduleTree = $('#fieldTree').tree({
                data: {},
                dragAndDrop: false,
                selectable: false,
                onDragStop: function(node, e,thing){
                },
                onCanMoveTo: function(){
                    return false;
                }
            });

        function loadTreeData(module, node){
            var _node = node;
            $.getJSON('index.php',
                    {
                        'module' : 'AOR_Reports',
                        'action' : 'getModuleTreeData',
                        'aor_module' : module,
                        'view' : 'JSON'
                    },
                    function(relData){
                        processTreeData(relData, _node);
                    }
            );
        }

            var treeDataLeafs = [];

            var dropFieldLine = function(node) {
                addNodeToFields(node);
                updateChartDimensionSelects();
            };

            var dropConditionLine = function(node) {
                var newConditionLine = addNodeToConditions(node);
                LogicalOperatorHandler.hideUnnecessaryLogicSelects();
                ConditionOrderHandler.setConditionOrders();
                ParenthesisHandler.addParenthesisLineIdent();
                return newConditionLine;
            };

            var showTreeDataLeafs = function(treeDataLeafs, module, module_name, module_path_display) {
                if (typeof module_name == 'undefined' || !module_name) {
                    module_name = module;
                }
                if (typeof module_path_display == 'undefined' || !module_path_display) {
                    module_path_display = module_name;
                }
                $('#module-name').html('(<span title="' + module_path_display + '">' + module_name + '</span>)');
                $('#fieldTreeLeafs').remove();
                $('#detailpanel_fields_select').append('<div id="fieldTreeLeafs" class="dragbox aor_dragbox" title="{/literal}{$MOD.LBL_TOOLTIP_DRAG_DROP_ELEMS}{literal}"></div>');
                $('#fieldTreeLeafs').tree({
                    data: treeDataLeafs,
                    dragAndDrop: true,
                    selectable: true,
                    onCanSelectNode: function(node) {
                        if($('#report-editview-footer .toggle-detailpanel_conditions')) {
                            dropConditionLine(node);
                        }
                    },
                    onDragMove: function() {
                        $('.drop-area').addClass('highlighted');
                    },
                    onDragStop: function(node, e,thing){
                        $('.drop-area').removeClass('highlighted');
                        var target = $(document.elementFromPoint(e.pageX - window.pageXOffset, e.pageY - window.pageYOffset));
                        if(node.type != 'field'){
                            return;
                        }
                        if(target.closest('#fieldLines').length > 0){
                            dropFieldLine(node);
                        }else if(target.closest('#conditionLines').length > 0){
                            var conditionLineTarget = ConditionOrderHandler.getConditionLineByPageEvent(e);
                            var conditionLineNew = dropConditionLine(node);
                            if(conditionLineTarget) {
                                ConditionOrderHandler.putPositionedConditionLines(conditionLineTarget, conditionLineNew);
                                ConditionOrderHandler.setConditionOrders();
                            }
                            ParenthesisHandler.addParenthesisLineIdent();
                        }
                        else if(target.closest('.tab-toggler').length > 0) {
                            target.closest('.tab-toggler').click();
                            if(target.closest('.tab-toggler').hasClass('toggle-detailpanel_fields')) {
                                dropFieldLine(node);
                            }
                            else if (target.closest('.tab-toggler').hasClass('toggle-detailpanel_conditions')) {
                                dropConditionLine(node);
                            }
                        }

                    },
                    onCanMoveTo: function(){
                        return false;
                    }
                });
            };

        function loadTreeLeafData(node){
            var module = node.module;
            var module_name = node.name;
            var module_path_display = node.module_path_display;

            if(!treeDataLeafs[module]) {
                $.getJSON('index.php',
                        {
                            'module': 'AOR_Reports',
                            'action': 'getModuleFields',
                            'aor_module': node.module,
                            'view': 'JSON'
                        },
                        function (fieldData) {
                            var treeData = [];

                            for (var field in fieldData) {
                                if (field) {
                                    treeData.push(
                                            {
                                                id: field,
                                                label: fieldData[field],
                                                'load_on_demand': false,
                                                type: 'field',
                                                module: node.module,
                                                module_path: node.module_path,
                                                module_path_display: node.module_path_display
                                            });
                                }
                            }
                            //$('#fieldTree').tree('loadData',treeData,node);
                            //node.loaded = true;
                            //$('#fieldTree').tree('openNode', node);
                            treeDataLeafs[module] = treeData;
                            showTreeDataLeafs(treeDataLeafs[module], module, module_name, module_path_display);
                        }
                );
            }
            else {
                showTreeDataLeafs(treeDataLeafs[module], module, module_name, module_path_display);
            }
        }

        function processTreeData(relData, node){
            var treeData = [];

            for(var field in relData){
                if(field) {
                    var modulePath = '';
                    var modulePathDisplay = '';
                    if(relData[field]['type'] == 'relationship') {
                        modulePath = field;
                        if (node) {
                            modulePath = node.module_path + ":" + field;
                            modulePathDisplay = node.module_path_display + " : "+relData[field]['module_label'];
                        }else{
                            modulePathDisplay = $('#report_module option:selected').text() + ' : ' + relData[field]['module_label'];
                        }
                    }else{
                        if (node) {
                            modulePath = node.module_path;
                            modulePathDisplay = node.module_path_display;
                        }else{
                            modulePathDisplay = relData[field]['module_label'];
                        }
                    }
                    var newNode = {
                        id: field,
                        label: relData[field]['label'],
                        load_on_demand : true,
                        type: relData[field]['type'],
                        module: relData[field]['module'],
                        module_path: modulePath,
                        module_path_display: modulePathDisplay};
                    treeData.push(newNode);
                }
            }
            $('#fieldTree').tree('loadData',treeData, node);
            if(node){
                node.loaded = true;
                $('#fieldTree').tree('openNode', node);
            }
            else
            {
                if($('#fieldTree a:first').length)
                    $('#fieldTree a:first').click();
            }

        }

        $('#fieldTree').on(
                'click',
                '.jqtree-toggler, .jqtree-title', //
                function(event) {
                    if($(this).hasClass('jqtree-title')) {
                        $(this).prev().click();
                        return;
                    }
                    //console.log(event);
                    var node = $(this).closest('li.jqtree_common').data('node');
                    if(node.loaded) {

                    }else if(node.type == 'relationship'){
                        loadTreeData(node.module, node);
                    }else{
                        loadTreeLeafData(node);
                        $('#fieldTree').tree('openNode', node);
                    }

                    $('.jqtree-selected').removeClass('jqtree-selected');
                    $(this).closest('li').addClass('jqtree-selected');

                    return true;
                }
        );


            var clearTreeDataFields = function() {
                $('#module-name').html('');
                $('#fieldTreeLeafs').html('');
            }


        $('#report_module').change(function(){
            report_module = $(this).val();
            loadTreeData($(this).val());
            clearTreeDataFields();
            //clearFieldLines();
            clearConditionLines();
            clearChartLines();
        });


        $('#addChartButton').click(function(){
            loadChartLine({});
            updateChartDimensionSelects();

        });

        report_module = $('#report_module').val();
        loadTreeData($('#report_module').val());

        $.each(conditionLines,function(key,val){
            loadConditionLine(val);
        });
        });
    });
</script>

{/literal}

<div class="clear"></div>

<div class="tab-panels" style="width:100%">
    <div class="edit view edit508" id="detailpanel_conditions">
        <div class="drop-area" id="conditionLines"  style="min-height: 450px;">
        </div>
        <hr>
        <table>
            <tbody id="aor_condition_parenthesis_btn" class="connectedSortableConditions">
                <tr class="parentheses-btn"><td class="condition-sortable-handle">{$MOD.LBL_ADD_PARENTHESIS}</td></tr>
            </tbody>
        </table>
    </div>
</div>
{literal}
<script type="text/javascript">

    setModuleFieldsPendingFinishedCallback(function(){
        var parenthesisBtnHtml;
        $( "#aor_conditions_body, #aor_condition_parenthesis_btn" ).sortable({
            handle: '.condition-sortable-handle',
            placeholder: "ui-state-highlight",
            cancel: ".parenthesis-line",
            connectWith: ".connectedSortableConditions",
            start: function(event, ui) {
                parenthesisBtnHtml = $('#aor_condition_parenthesis_btn').html();
            },
            stop: function(event, ui) {
                if(event.target.id == 'aor_condition_parenthesis_btn') {
                    $('#aor_condition_parenthesis_btn').html('<tr class="parentheses-btn">' + ui.item.html() + '</tr>');
                    ParenthesisHandler.replaceParenthesisBtns();
                }
                else {
                    if($(this).attr('id') == 'aor_conditions_body' && parenthesisBtnHtml != $('#aor_condition_parenthesis_btn').html()) {
                        $(this).sortable("cancel");
                    }
                }
                LogicalOperatorHandler.hideUnnecessaryLogicSelects();
                ConditionOrderHandler.setConditionOrders();
                ParenthesisHandler.addParenthesisLineIdent();
            }
        });//.disableSelection();
        LogicalOperatorHandler.hideUnnecessaryLogicSelects();
        ConditionOrderHandler.setConditionOrders();
        ParenthesisHandler.addParenthesisLineIdent();
        //FieldLineHandler.makeGroupDisplaySelectOptions();
    });

    $(function(){

        $('#EditView_tabs .clear').remove();
        $('#EditView_tabs').attr('style', 'width: 78%;');

        $( '#aor_condition_parenthesis_btn' ).bind( "sortstart", function (event, ui) {
            ui.helper.css('margin-top', $(window).scrollTop() );
        });
        $( '#aor_condition_parenthesis_btn' ).bind( "sortbeforestop", function (event, ui) {
            ui.helper.css('margin-top', 0 );
        });

        $(window).resize()
        {
            $('div.panel-heading a div').css({
                width: $('div.panel-heading a').width() - 14
            });
        }

        var reportToggler = function(elem) {
            var marker = 'toggle-';
            var classes = $(elem).attr('class').split(' ');
            $('.tab-togglers .tab-toggler').removeClass('active');
            $(elem).addClass('active');
            $('.tab-panels .edit.view').addClass('hidden');
            $.each(classes, function(i, cls){
                if(cls.substring(0, marker.length) == marker) {
                    var panelId = cls.substring(marker.length);
                    $('#'+panelId).removeClass('hidden');
                }
            });
        };

    });
</script>
{/literal}

</div>

<div style="clear: both;"></div>



<div id='detailpanel_report' class='detail view  detail508 expanded' style="overflow:auto">
    {counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
    <h4>
        <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel('report');">
            <img border="0" id="detailpanel_report_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
        <a href="javascript:void(0)" class="expandLink" onclick="expandPanel('report');">
            <img border="0" id="detailpanel_report_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
        {sugar_translate label='LBL_REPORT' module='AOR_MatrixReporting'}
        <script>
          document.getElementById('detailpanel_report').className += ' expanded';
        </script>
    </h4>

    <table id='FIELDS' class="panelContainer table table-bordered" border="1" cellspacing='{$gridline}'>
        <tbody>
        <tr>
            {foreach from=$header key=name item=title}
                {if $title|is_array}
                    <td colspan="{$level1Break}">
                        {$name}
                    </td>
                {else}
                    <td>
                        {$title}
                    </td>
                {/if}
            {/foreach}
        </tr>
        {if $level2 == "true"}
            <tr>
                {foreach from=$header key=name item=title}
                    {if $title|is_array}
                        {foreach from=$title key=subname item=subtitle}
                            {if $subtitle|is_array}
                                <td colspan="{$subtitle|@count}">{$subname}</td>
                            {else}
                                <td>{$subtitle}</td>
                            {/if}
                        {/foreach}
                    {else}
                        <td></td>
                    {/if}
                {/foreach}
            </tr>
        {/if}
        {if $level3 == "true"}
            <tr>
                {foreach from=$header key=name item=title}
                    {if $title|is_array}
                        {foreach from=$title key=name item=subtitle}
                            {if $subtitle|is_array}
                                {foreach from=$subtitle key=name item=subsubtitle}
                                    <td colspan="">{$subsubtitle}</td>
                                {/foreach}
                            {else}
                                <td></td>
                            {/if}
                        {/foreach}
                    {else}
                        <td></td>
                    {/if}
                {/foreach}
            </tr>
        {/if}
        </tbody>

        {foreach from=$data key=name item=group}
            <tbody>
            <tr>
                {foreach from=$group key=field item=value}
                    <td>
                        {$value}
                    </td>
                {/foreach}
            </tr>

            </tbody>
        {/foreach}
        <tbody>
        <tr>
            {foreach from=$counts key=totalkey item=totalvalue}
                <td><b>{$totalvalue}</b></td>
            {/foreach}
        </tr>
        </tbody>
    </table>
    <script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel('report', 'expanded'); {rdelim}); </script>
</div>




<div style="display: block; float: none;">
    {{include file="include/EditView/footer.tpl"}}
</div>
{literal}
<style>
    #conditionLines td{
        width:13%!important
    }
</style>
{/literal}
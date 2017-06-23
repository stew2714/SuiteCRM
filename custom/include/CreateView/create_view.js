// $(function() {
//     var createForm = function() {
//         var panels = $("div[id^='detailpanel_']").not(".persistent")
//         var activePanel = 1;
//         return {
//             prev: function() {
//                 //var values = createForm.get_valid();
//                 //var go = false;
//                 //while(go == false) {
//                     activePanel--;
//                 //    var panel_prefix = $("#detailpanel_" + activePanel).attr("title").split('_');
//                 //    if (-1 == $.inArray(panel_prefix[0],values)) {
//                 //        go = true;
//                 //    }
//                 //}
//                 createForm.update();
//
//             },
//             next: function() {
//
//                 if (createForm.validate()) {
//                     //var values = createForm.get_valid();
//                     //var go = false;
//
//                     // while(go == false) {
//                         activePanel++;
//                     //    var panel_prefix = $("#detailpanel_" + activePanel).attr("title").split('_');
//
//                     //     if (-1 == $.inArray(panel_prefix[0],values)) {
//                     //         go = true;
//                     //    }
//                     //}
//                     createForm.update();
//                 }
//
//             },
//             get_valid : function(){
//                 if($('#product_type')){
//                     var selected = $('#product_type').val();
//                     var values = [];
//                     $('#product_type option').each(function() {
//                         if($.inArray($(this).attr('value'),selected) == -1) {
//                             values.push($(this).attr('value').toUpperCase());
//                         }
//                     });
//                 }
//                 return values;
//             },
//             update: function() {
//                 panels.hide();
//
//
//                 if($('#product_type')){
//                     var selected = $('#product_type').val();
//                     var values = [];
//                     $('#product_type option').each(function() {
//                         if($.inArray($(this).attr('value'),selected) == -1) {
//                             values.push($(this).attr('value').toUpperCase());
//                         }
//                     });
//                 }
//
//                 $("#detailpanel_" + activePanel).show();
//                 var go = false;
//                 var temp = activePanel;
//                 //while(go == false) {
//                 //    temp++;
//                 //    if((typeof $("#detailpanel_" + temp).attr("title") != 'undefined')){
//                 //        var panel_prefix = $("#detailpanel_" + temp).attr("title").split('_');
//                 //
//                 //        if (-1 == $.inArray(panel_prefix[0],values)) {;
//                 //            go = true;
//                 //        }
//                 //    }else{
//                 //        go = "break";
//                 //    }
//                 //}
//
//                 activePanel <= 1 ? $(".prevButton").hide() : $(".prevButton").show();
//                 console.log(activePanel);
//                 console.log( $('div[id^="detailpanel"]').length );
//                 if(go == true || activePanel != $('div[id^="detailpanel"]').length) {
//                     $(".saveButton").hide();
//                     $(".nextButton").show();
//                 }else{
//                     $(".saveButton").show();
//                     $(".nextButton").hide();
//                 }
//             },
//             validate: function(panelId) {
//                 panelId = typeof panelId == 'undefined' ? activePanel : panelId;
//                 formname = "CreateView";
//                 startsWith = "";
//
//                 requiredTxt = SUGAR.language.get('app_strings', 'ERR_MISSING_REQUIRED_FIELDS');
//                 invalidTxt = SUGAR.language.get('app_strings', 'ERR_INVALID_VALUE');
//
//                 if ( typeof (formname) == 'undefined')
//                 {
//                     return false;
//                 }
//                 if ( typeof (validate[formname]) == 'undefined')
//                 {
//                     disableOnUnloadEditView(document.forms[formname]);
//                     return true;
//                 }
//
//                 var form = document.forms[formname];
//                 var isError = false;
//                 var errorMsg = "";
//                 inputsWithErrors = new Array();
//
//                 clear_all_errors(); // remove previous error messages
//
//                 for(var i = 0; i < validate[formname].length; i++){
//                     var elementId = validate[formname][i][nameIndex]
//                     var elementInPanel = Boolean($("#detailpanel_" + panelId).has("#" + elementId).length)
//                     if(validate[formname][i][nameIndex].indexOf(startsWith) == 0){
//                         if(typeof form[elementId]  != 'undefined' && typeof form[elementId].value != 'undefined' && elementInPanel){
//                             var bail = false;
//
//
//                             //If a field is not required and it is blank or is binarydependant, skip validation.
//                             //Example of binary dependant fields would be the hour/min/meridian dropdowns in a date time combo widget, which require further processing than a blank check
//                             if(!validate[formname][i][requiredIndex] && trim(form[validate[formname][i][nameIndex]].value) == '' && (typeof(validate[formname][i][jstypeIndex]) != 'undefined' && validate[formname][i][jstypeIndex]  != 'binarydep'))
//                             {
//                                 continue;
//                             }
//
//                             if(validate[formname][i][requiredIndex]
//                                 && !isFieldTypeExceptFromEmptyCheck(validate[formname][i][typeIndex])
//                             ){
//                                 if(typeof form[validate[formname][i][nameIndex]] == 'undefined' || trim(form[validate[formname][i][nameIndex]].value) == ""){
//                                     add_error_style(formname, validate[formname][i][nameIndex], requiredTxt +' ' + validate[formname][i][msgIndex]);
//                                     isError = true;
//                                 }
//                             }
//                             if(!bail){
//                                 switch(validate[formname][i][typeIndex]){
//                                     case 'varchar':
//                                         if(validate[formname][i][nameIndex] == 'primary_address_postalcode' || validate[formname][i][nameIndex] == 'alt_address_postalcode'){
//                                             if(!validate_postcode($("#"+validate[formname][i][nameIndex]), validate[formname][i][nameIndex])){
//                                                 isError = true;
//                                             }
//                                         }
//                                         break;
//                                     case 'email':
//                                         if(!isValidEmail(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'time':
//                                         if( !isTime(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         } break;
//                                     case 'date': if(!isDate(trim(form[validate[formname][i][nameIndex]].value))){
//                                         isError = true;
//                                         add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                     }  break;
//                                     case 'alpha':
//                                         break;
//                                     case 'DBName':
//                                         if(!isDBName(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     // Bug #49614 : Check value without trimming before
//                                     case 'DBNameRaw':
//                                         if(!isDBName(form[validate[formname][i][nameIndex]].value)){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'alphanumeric':
//                                         break;
//                                     case 'file':
//                                         var file_input = form[validate[formname][i][nameIndex] + '_file'];
//                                         if( file_input && validate[formname][i][requiredIndex] && trim(file_input.value) == "" && !file_input.disabled ) {
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], requiredTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'int':
//                                         if(!isInteger(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'decimal':
//                                         if(!isDecimal(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'currency':
//                                     case 'float':
//                                         if(!isFloat(trim(form[validate[formname][i][nameIndex]].value))){
//                                             isError = true;
//                                             add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                         }
//                                         break;
//                                     case 'teamset_mass':
//                                         var div_element_id = formname + '_' + form[validate[formname][i][nameIndex]].name + '_operation_div';
//                                         var input_elements = YAHOO.util.Selector.query('input', document.getElementById(div_element_id));
//                                         var primary_field_id = '';
//                                         var validation_passed = false;
//                                         var replace_selected = false;
//
//                                         //Loop through the option elements (replace or add currently)
//                                         for(t in input_elements) {
//                                             if(input_elements[t].type && input_elements[t].type == 'radio' && input_elements[t].checked == true && input_elements[t].value == 'replace') {
//
//                                                 //Now find where the primary radio button is and if a value has been set
//                                                 var radio_elements = YAHOO.util.Selector.query('input[type=radio]', document.getElementById(formname + '_team_name_table'));
//
//                                                 for(var x = 0; x < radio_elements.length; x++) {
//                                                     if(radio_elements[x].name != 'team_name_type') {
//                                                         primary_field_id = 'team_name_collection_' + radio_elements[x].value;
//                                                         if(radio_elements[x].checked) {
//                                                             replace_selected = true;
//                                                             if(trim(document.forms[formname].elements[primary_field_id].value) != '') {
//                                                                 validation_passed = true;
//                                                                 break;
//                                                             }
//                                                         } else if(trim(document.forms[formname].elements[primary_field_id].value) != '') {
//                                                             replace_selected = true;
//                                                         }
//                                                     }
//                                                 }
//                                             }
//                                         }
//
//                                         if(replace_selected && !validation_passed) {
//                                             add_error_style(formname, primary_field_id, SUGAR.language.get('app_strings', 'ERR_NO_PRIMARY_TEAM_SPECIFIED'));
//                                             isError = true;
//                                         }
//                                         break;
//                                     case 'teamset':
//                                         var table_element_id = formname + '_' + form[validate[formname][i][nameIndex]].name + '_table';
//                                         if(document.getElementById(table_element_id)) {
//                                             var input_elements = YAHOO.util.Selector.query('input[type=radio]', document.getElementById(table_element_id));
//                                             var has_primary = false;
//                                             var primary_field_id = form[validate[formname][i][nameIndex]].name + '_collection_0';
//
//                                             for(t in input_elements) {
//                                                 primary_field_id = form[validate[formname][i][nameIndex]].name + '_collection_' + input_elements[t].value;
//                                                 if(input_elements[t].type && input_elements[t].type == 'radio' && input_elements[t].checked == true) {
//                                                     if(document.forms[formname].elements[primary_field_id].value != '') {
//                                                         has_primary = true;
//                                                     }
//                                                     break;
//                                                 }
//                                             }
//
//                                             if(!has_primary) {
//                                                 isError = true;
//                                                 var field_id = form[validate[formname][i][nameIndex]].name + '_collection_' + input_elements[0].value;
//                                                 add_error_style(formname, field_id, SUGAR.language.get('app_strings', 'ERR_NO_PRIMARY_TEAM_SPECIFIED'));
//                                             }
//                                         }
//                                         break;
//                                     case 'error':
//                                         isError = true;
//                                         add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex]);
//                                         break;
//                                 }
//
//                                 if(typeof validate[formname][i][jstypeIndex]  != 'undefined'/* && !isError*/){
//                                     switch(validate[formname][i][jstypeIndex]){
//                                         // Bug #47961 May be validation through callback is best way.
//                                         case 'callback' :
//                                             if (typeof validate[formname][i][callbackIndex] == 'function')
//                                             {
//                                                 var result = validate[formname][i][callbackIndex](formname, validate[formname][i][nameIndex]);
//                                                 if (result == false)
//                                                 {
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], requiredTxt + " " +	validate[formname][i][msgIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'range':
//                                             if(!inRange(trim(form[validate[formname][i][nameIndex]].value), validate[formname][i][minIndex], validate[formname][i][maxIndex])){
//                                                 isError = true;
//                                                 var lbl_validate_range = SUGAR.language.get('app_strings', 'LBL_VALIDATE_RANGE');
//                                                 if (typeof validate[formname][i][minIndex] == 'number' && typeof validate[formname][i][maxIndex] == 'number')
//                                                 {
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] + " value " + form[validate[formname][i][nameIndex]].value + " " + lbl_validate_range + " (" +validate[formname][i][minIndex] + " - " + validate[formname][i][maxIndex] +  ")");
//                                                 }
//                                                 else if (typeof validate[formname][i][minIndex] == 'number')
//                                                 {
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] + " " + SUGAR.language.get('app_strings', 'MSG_SHOULD_BE') + ' ' + validate[formname][i][minIndex] + ' ' + SUGAR.language.get('app_strings', 'MSG_OR_GREATER'));
//                                                 }
//                                                 else if (typeof validate[formname][i][maxIndex] == 'number')
//                                                 {
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] + " " + SUGAR.language.get('app_strings', 'MSG_IS_MORE_THAN') + ' ' + validate[formname][i][maxIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'isbefore':
//                                             compareTo = form[validate[formname][i][compareToIndex]];
//                                             if(	typeof compareTo != 'undefined'){
//                                                 if(trim(compareTo.value) != '' || (validate[formname][i][allowblank] != 'true') ) {
//                                                     date2 = trim(compareTo.value);
//                                                     date1 = trim(form[validate[formname][i][nameIndex]].value);
//
//                                                     if(trim(date1).length != 0 && !isBefore(date1,date2)){
//
//                                                         isError = true;
//                                                         //jc:#12287 - adding translation for the is not before message
//                                                         add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] + "(" + date1 + ") " + SUGAR.language.get('app_strings', 'MSG_IS_NOT_BEFORE') + ' ' +date2);
//                                                     }
//                                                 }
//                                             }
//                                             break;
//                                         case 'less':
//                                             value=unformatNumber(trim(form[validate[formname][i][nameIndex]].value), num_grp_sep, dec_sep);
//                                             maximum = parseFloat(validate[formname][i][maxIndex]);
//                                             if(	typeof maximum != 'undefined'){
//                                                 if(value>maximum) {
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] +" " +SUGAR.language.get('app_strings', 'MSG_IS_MORE_THAN')+ ' ' + validate[formname][i][altMsgIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'more':
//                                             value=unformatNumber(trim(form[validate[formname][i][nameIndex]].value), num_grp_sep, dec_sep);
//                                             minimum = parseFloat(validate[formname][i][minIndex]);
//                                             if(	typeof minimum != 'undefined'){
//                                                 if(value<minimum) {
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex] +" " +SUGAR.language.get('app_strings', 'MSG_SHOULD_BE')+ ' ' + minimum + ' ' + SUGAR.language.get('app_strings', 'MSG_OR_GREATER'));
//                                                 }
//                                             }
//                                             break;
//                                         case 'binarydep':
//                                             compareTo = form[validate[formname][i][compareToIndex]];
//                                             if( typeof compareTo != 'undefined') {
//                                                 item1 = trim(form[validate[formname][i][nameIndex]].value);
//                                                 item2 = trim(compareTo.value);
//                                                 if(!bothExist(item1, item2)) {
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'comparison':
//                                             compareTo = form[validate[formname][i][compareToIndex]];
//                                             if( typeof compareTo != 'undefined') {
//                                                 item1 = trim(form[validate[formname][i][nameIndex]].value);
//                                                 item2 = trim(compareTo.value);
//                                                 if(!bothExist(item1, item2) || item1 != item2) {
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], validate[formname][i][msgIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'in_array':
//                                             arr = eval(validate[formname][i][arrIndex]);
//                                             operator = validate[formname][i][operatorIndex];
//                                             item1 = trim(form[validate[formname][i][nameIndex]].value);
//                                             if (operator.charAt(0) == 'u') {
//                                                 item1 = item1.toUpperCase();
//                                                 operator = operator.substring(1);
//                                             } else if (operator.charAt(0) == 'l') {
//                                                 item1 = item1.toLowerCase();
//                                                 operator = operator.substring(1);
//                                             }
//                                             for(j = 0; j < arr.length; j++){
//                                                 val = arr[j];
//                                                 if((operator == "==" && val == item1) || (operator == "!=" && val != item1)){
//                                                     isError = true;
//                                                     add_error_style(formname, validate[formname][i][nameIndex], invalidTxt + " " +	validate[formname][i][msgIndex]);
//                                                 }
//                                             }
//                                             break;
//                                         case 'verified':
//                                             if(trim(form[validate[formname][i][nameIndex]].value) == 'false'){
//                                                 //Fake an error so form does not submit
//                                                 isError = true;
//                                             }
//                                             break;
//                                     }
//                                 }
//                             }
//                         }
//                     }
//                 }
//                 /*	nsingh: BUG#15102
//                  Check min max default field logic.
//                  Can work with float values as well, but as of 10/8/07 decimal values in MB and studio don't have min and max value constraints.*/
//                 if(formsWithFieldLogic){
//                     var invalidLogic=false;
//                     if(formsWithFieldLogic.min && formsWithFieldLogic.max && formsWithFieldLogic._default) {
//                         var showErrorsOn={min:{value:'min', show:false, obj:formsWithFieldLogic.min.value},
//                             max:{value:'max',show:false, obj:formsWithFieldLogic.max.value},
//                             _default:{value:'default',show:false, obj:formsWithFieldLogic._default.value},
//                             len:{value:'len', show:false, obj:parseInt(formsWithFieldLogic.len.value,10)}};
//
//                         var min = (formsWithFieldLogic.min.value !='') ? parseFloat(formsWithFieldLogic.min.value) : 'undef';
//                         var max  = (formsWithFieldLogic.max.value !='') ? parseFloat(formsWithFieldLogic.max.value) : 'undef';
//                         var _default = (formsWithFieldLogic._default.value!='')? parseFloat(formsWithFieldLogic._default.value) : 'undef';
//
//                         /*Check all lengths are <= max size.*/
//                         for(var i in showErrorsOn){
//                             if(showErrorsOn[i].value!='len' && showErrorsOn[i].obj.length > showErrorsOn.len.obj){
//                                 invalidLogic=true;
//                                 showErrorsOn[i].show=true;
//                                 showErrorsOn.len.show=true;
//                             }
//                         }
//
//                         if(min!='undef' && max!='undef' && _default!='undef'){
//                             if(!inRange(_default,min,max)){
//                                 invalidLogic=true;
//                                 showErrorsOn.min.show=true;
//                                 showErrorsOn.max.show=true;
//                                 showErrorsOn._default.show=true;
//                             }
//                         }
//                         if(min!='undef' && max!= 'undef' && min > max){
//                             invalidLogic = true;
//                             showErrorsOn.min.show=true;
//                             showErrorsOn.max.show=true;
//                         }
//                         if(min!='undef' && _default!='undef' && _default < min){
//
//                             invalidLogic = true;
//                             showErrorsOn.min.show=true;
//                             showErrorsOn._default.show=true;
//                         }
//                         if(max!='undef' && _default !='undef' && _default>max){
//
//                             invalidLogic = true;
//                             showErrorsOn.max.show=true;
//                             showErrorsOn._default.show=true;
//                         }
//
//                         if(invalidLogic){
//                             isError=true;
//                             for(var error in showErrorsOn)
//                                 if(showErrorsOn[error].show)
//                                     add_error_style(formname,showErrorsOn[error].value, formsWithFieldLogic.msg);
//
//                         }
//
//                         else if (!isError)
//                             formsWithFieldLogic = null;
//                     }
//                 }
//
//                 if(formWithPrecision){
//                     if (!isValidPrecision(formWithPrecision.float.value, formWithPrecision.precision.value)){
//                         isError = true;
//                         add_error_style(formname, 'default', SUGAR.language.get('app_strings', 'ERR_COMPATIBLE_PRECISION_VALUE'));
//                     }else if(!isError){
//                         isError = false;
//                     }
//                 }
//
//
// //END BUG# 15102
//
//                 if (isError == true) {
//                     var nw, ne, sw, se;
//                     if (self.pageYOffset) // all except Explorer
//                     {
//                         nwX = self.pageXOffset;
//                         seX = self.innerWidth;
//                         nwY = self.pageYOffset;
//                         seY = self.innerHeight;
//                     }
//                     else if (document.documentElement && document.documentElement.scrollTop) // Explorer 6 Strict
//                     {
//                         nwX = document.documentElement.scrollLeft;
//                         seX = document.documentElement.clientWidth;
//                         nwY = document.documentElement.scrollTop;
//                         seY = document.documentElement.clientHeight;
//                     }
//                     else if (document.body) // all other Explorers
//                     {
//                         nwX = document.body.scrollLeft;
//                         seX = document.body.clientWidth;
//                         nwY = document.body.scrollTop;
//                         seY = document.body.clientHeight;
//                     }
//
//                     var inView = true; // is there an error within viewport of browser
//
//                     for(var wp = 0; wp < inputsWithErrors.length; wp++) {
//                         var elementCoor = findElementPos(inputsWithErrors[wp]);
//                         if(!(elementCoor.x >= nwX && elementCoor.y >= nwY &&
//                             elementCoor.x <= seX+nwX && elementCoor.y <= seY+nwY)) { // if input is not within viewport, modify for SI bug 52497
//                             inView = false;
//                             scrollToTop = elementCoor.y - 75;
//                             scrollToLeft = elementCoor.x - 75;
//                         }
//                         else { // on first input within viewport, don't scroll
//                             break;
//                         }
//                     }
//
//                     if(!inView) window.scrollTo(scrollToLeft,scrollToTop);
//
//                     return false;
//                 }
//
//                 disableOnUnloadEditView(form);
//                 return true;
//             }
//         }
//     }()
//
//     $("#create_link").hide()
//     var button = $('<input/>').attr("type", "submit").addClass("button primary").click(false)
//     $("input[id^='CANCEL_']")
//         .before(button.clone(true).val("Previous").addClass("prevButton").click(createForm.prev))
//     $("input[id^='SAVE_']").addClass("saveButton").wrap("<div style=\"float:right\"/>")
//         .before(button.clone(true).val("Next").addClass("nextButton").click(createForm.next))
//     createForm.update()
// })
//
// function getFormData() {
//     var p_data = $("form").serializeArray();
//     var dataArray = {};
//
//     for (var key in p_data) {
//         dataArray[p_data[key]['name']] = p_data[key]['value'];
//     }
//     dataArray['primary_address_street'] = dataArray['primary_address_number'] + ' ' + dataArray['primary_address_street'];
//
//     if(dataArray['birthdate']){
//         dataArray['birthdate'] = dataArray['birthdate'].split("-").reverse().join("-");
//     }
//
//     if(dataArray['salutation'] == 'M'){
//         dataArray['salutation'] = 'Mr.';
//     }
//
//     if(dataArray['salutation'] == 'F'){
//         dataArray['salutation'] = 'Ms.';
//     }
//
//     return dataArray;
// }

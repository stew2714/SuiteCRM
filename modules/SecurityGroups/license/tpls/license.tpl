
<!-- BEGIN: main -->
{literal}
<script type="text/javascript">

    // Only do anything if jQuery isn't defined
    if (typeof(jQuery) == 'undefined') {

        if (typeof($) == 'function') {
            // warning, global var
            thisPageUsingOtherJSLibrary = true;
        }

        function getScript(url, success) {
            var script     = document.createElement('script');
            script.src = url;

            var head = document.getElementsByTagName('head')[0],
            done = false;

            // Attach handlers for all browsers
            script.onload = script.onreadystatechange = function() {
                if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {

                    done = true;

                    // callback function provided as param
                    success();

                    script.onload = script.onreadystatechange = null;
                    head.removeChild(script);

                };
            };

            head.appendChild(script);
        };

        getScript('{/literal}{$file_path}{literal}', function() {

            if (typeof jQuery=='undefined') {
                // Super failsafe - still somehow failed...
            } else {
                if (thisPageUsingOtherJSLibrary) {
                    // Run your jQuery Code
                } else {
                    // Use .noConflict(), then run your jQuery Code
                }

            }

        });

    }

    function outfitters_validate_license()
    {
        var licKey = $('#outfitters_license_key').val();
        if(!licKey) {
            return false;
        }
        $('#outfitters_licensed_users').html('');
        $('#btn-outfitters-validate-license').hide();
        $('#outfitters_validation_success').hide();
        $('#outfitters_validation_fail').hide();
        $('#outfitters_license_passed').hide();
        $('#outfitters_license_increase').hide();
        $('#outfitters_validating_license').show();

        $.ajax('index.php?module={/literal}{$MODULE}{literal}&action=outfitterscontroller&to_pdf=1',{
            type: 'POST',
            dataType: 'json',
            data: {
                method: 'validate',
                key: licKey
            },
            success: function(response){
                //hide loading
                $('#outfitters_validating_license').hide();
                $('#btn-outfitters-validate-license').show();
                if (response){
                    if(response.validated == true) {
                        $('#outfitters_validation_success').show();
                    } else {
                        $('#outfitters_fail_message').html('Invalid key');
                        $('#outfitters_validation_fail').show();
                    }
                    if(response.licensed_user_count != undefined) {
                        $('#outfitters_licensed_users').html(response.licensed_user_count);

                        if(response.validated_users == true) {
                            $('#outfitters_license_passed').show();
                        } else {
                            $('#btn-outfitters-increase').html('Increase to {/literal}{$current_users}{literal} users');
                            $('#outfitters_license_increase').show();
                        }
                    } else {
                        //Assume unlimited license if nothing is returned as the add-on is configured to not verify user count
                        $('#outfitters_licensed_users').html('Unlimited');
                    }
                } else {
                    alert('Unexpected data returned from the server.');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#outfitters_validating_license').hide();
                $('#btn-outfitters-validate-license').show();
                $('#outfitters_fail_message').html($.parseJSON(jqXHR.responseText));
                $('#outfitters_validation_fail').show();

                alert('Error: '+$.parseJSON(jqXHR.responseText));
            }
        });

        return false;
    }

    function outfitters_increase_license()
    {
        var licKey = $('#outfitters_license_key').val();
        if(!licKey) {
            return false;
        }
        var increase_to = '{/literal}{$current_users}{literal}';

        $('#outfitters_increasing_license').show();

        //todo: use a drop down to select additional seats
        $.ajax('index.php?module={/literal}{$MODULE}{literal}&action=outfitterscontroller&to_pdf=1',{
            type: 'POST',
            dataType: 'json',
            data: {
                method: 'change',
                key: licKey,
                user_count: '{/literal}{$current_users}{literal}'
            },
            success: function(response){
                //hide loading
                $('#outfitters_increasing_license').hide();

                $('#btn-outfitters-validate-license').show();

                if (response.licensed_user_count){
                    $('#outfitters_license_increase').hide();
                    $('#outfitters_licensed_users').html(response.licensed_user_count);
                    $('#outfitters_license_passed').show();
                } else {
                    alert('Unexpected data returned from the server.');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#outfitters_increasing_license').hide();

                alert('Error: '+$.parseJSON(jqXHR.responseText));
            }
        });

        return false;
    }
</script>
<style type="text/css">
    .outfitters_license_key {
        background-color: #ffffff;
        border: 1px solid #4E8CCF;
        text-align: center;
        padding: 10px 30px;
        font-size: 1.2em;
        margin-right: 10px;
    }
    #outfitters_license_increase {
        color: red;
        font-weight: bold;
        font-size: 1.1em;
    }
    #outfitters_license_increase, #outfitters_license_passed, #outfitters_validation_fail, #outfitters_validation_success {
        padding-left: 10px;
    }
</style>
{/literal}

<form name="outfitters_license_form" id="outfitters_license_form" method="POST" >
    <input type="hidden" name="module" value="{$MODULE}">
    <input type="hidden" name="action">
    <input type="hidden" name="return_module" value="{$RETURN_MODULE}">
    <input type="hidden" name="return_action" value="{$RETURN_ACTION}">

<table width="100%" border="1" cellspacing="0" cellpadding="0" class="edit view">
    <tr><th align="left" scope="row" colspan="4"><h4>{$LICENSE.LBL_STEPS_TO_LOCATE_KEY_TITLE}</h4></th></tr>
    <tr>
        <td align="left" scope="row" colspan="4">
            {$LICENSE.LBL_STEPS_TO_LOCATE_KEY}
        </td>
   </tr>
    <tr>
        <td width="20%" scope="row">{$LICENSE.LBL_LICENSE_KEY}</td>
        <td width="30%" colspan="3">
            <input id='outfitters_license_key' name='outfitters_license_key' class='outfitters_license_key' tabindex='1' size='50' maxlength='100' type="text" value="{$license_key}">
            <input title="{$LICENSE.LBL_VALIDATE_LABEL}" class="button primary" onclick="return outfitters_validate_license();" type="button" name="button" id="btn-outfitters-validate-license" value=" {$LICENSE.LBL_VALIDATE_LABEL} ">
            <span id="outfitters_validating_license" style="display: none"><img src="themes/default/images/img_loading.gif" alt="Loading"></img> Validating...</span>
            <span id="outfitters_validation_fail" style="display: none"><img src="themes/default/images/no.gif" alt="Failed"></img> Failed: <span id="outfitters_fail_message"></span></span>
            <span id="outfitters_validation_success" style="display: none">
                <img src="themes/default/images/yes.gif" alt="Success"></img> Success!
                {if !empty($continue_url)}
                    <br/><br/>
                    <input title="Continue" class="button primary" onclick="window.location='{$continue_url}';" type="button" name="button" value=" Continue ">
                {/if}
            </span>
        </td>
    </tr>
{if $validate_users == true}
    <tr>
        <td width="20%" scope="row">{$LICENSE.LBL_CURRENT_USERS}</td>
        <td width="30%" id="outfitters_current_users">{$current_users}</td>
        <td width="20%" scope="row"></td>
        <td width="30%"></td>
    </tr>
    <tr>
        <td width="20%" scope="row">{$LICENSE.LBL_LICENSED_USERS}</td>
        <td width="30%" colspan="3">
            <span id="outfitters_licensed_users"></span>
            <span id="outfitters_increasing_license" style="display: none"><img src="themes/default/images/img_loading.gif" alt="Loading"></img> Boosting...</span>
            <span id="outfitters_license_increase" style="display: none">
                <img src="themes/default/images/no.gif" alt="Warning"></img> Warning: Boost license to continue using this add-on
                <br/>
                <button id="btn-outfitters-increase" onclick="javascript:outfitters_increase_license(); return false;">Boost to # users</button>
            </span>
            <span id="outfitters_license_passed" style="display: none">
                <img src="themes/default/images/yes.gif" alt="Passed"></img> Verified!

                {if !empty($continue_url)}
                    <br/><br/>
                    <input title="Continue" class="button primary" onclick="window.location='{$continue_url}';" type="button" name="button" value=" Continue ">
                {/if}
            </span>
        </td>
    </tr>
{/if}
    <tr>
        <td width="20%" scope="row"></td>
        <td width="30%"></td>
        <td width="20%" scope="row"></td>
        <td width="30%"></td>
    </tr>

</table>
</form>

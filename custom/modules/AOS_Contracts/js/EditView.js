$(document).ready(function() {
    $("#SAVE").removeAttr("onclick");
    console.log('hi');

    $("#SAVE").click(function(e){
        e.preventDefault();
        console.log('inside function');

        var onclickValue = "var _form = document.getElementById('EditView'); _form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;";
        $("#SAVE").attr("onclick", onclickValue);
    });
});




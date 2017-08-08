// $(document).ready(function() {
//     $("#SAVE").removeAttr("onclick");
//     $("#SAVE").click(function(e){
//         e.preventDefault();
//         var recordID = $("input[name=record]").val();
//         if (typeof recordID === "undefined" || recordID === null || recordID == ""){
//             promptWindow();
//         } else {
//             var _form = document.getElementById('CreateView');
//             _form.action.value='Save';
//
//             if(check_form('CreateView')){
//                 SUGAR.ajaxUI.submitForm(_form);
//                 return false;
//             }
//         }
//     });
// });
//
// function promptWindow(){
//     var mb = messageBox();
//     mb.setTitle('Your Agreement has been submitted to the Queue');
//     mb.setBody('The agreement has been saved and assigned to the Legal Queue to handle. Your request will be handled shortly');
//     mb.hideFooter();
//     mb.show();
//
//     mb.on('mouseup.dismiss.bs.modal', function() {
//         "use strict";
//         mb.remove();
//
//         var _form = document.getElementById('EditView');
//             _form.action.value='Save';
//
//         if(check_form('EditView')){
//             SUGAR.ajaxUI.submitForm(_form);
//             return false;
//         }
//     });
// }
//
//

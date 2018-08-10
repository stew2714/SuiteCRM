SUGAR.util.doWhen(
  "$('#create_invitee_as_lead').length ",
  function (){
    $("#create-invitees").css("display","none");
    $("#create-invitees").css("height","0px");
  }
);




var cancelMeeting = function() {
  var r = confirm('Are you sure you wish to cancel this meeting?');
  console.log(r);
  if (r == true)
  {
    SUGAR.meetings.fill_invitees();
    document.EditView.name.value = 'CANCELLED ' + $("#name").val();
    document.EditView.status.value = 'Not Held';
    document.EditView.action.value = 'Save';
    document.EditView.return_action.value = 'EditView';
    document.EditView.return_module.value = 'Meetings';
    formSubmitCheck();
    return true;
  }

  return false;
};


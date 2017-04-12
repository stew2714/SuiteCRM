function inviteParticipants() {
  $('#invite-dialog').modal('toggle');
}

function participantsChange(inviteSelect) {
  var currentValue = inviteSelect.value;

  if (currentValue === 'user-group') {
    $('#user').hide();
    $('#user-group').show();
  } else if (currentValue === 'user') {
    $('#user-group').hide();
    $('#user').show();
  } else if (currentValue === 'all' || currentValue === '' || currentValue === undefined) {
    $('#user').hide();
    $('#user-group').hide();
  }
}
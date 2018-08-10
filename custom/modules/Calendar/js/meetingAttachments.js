
CAL.dialog_save_with_attachments = function () {
  CAL.disable_buttons();
  ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING'));
  if (CAL.get("send_invites").value == "1") {
    CAL.get("title-cal-edit").innerHTML = CAL.lbl_sending;
  } else {
    CAL.get("title-cal-edit").innerHTML = CAL.lbl_saving;
  }
  CAL.fill_invitees();
  CAL.fill_repeat_data();
  function callback (res) {
    if (res.access == 'yes') {
      if (typeof res.limit_error != "undefined") {
        var alert_msg = CAL.lbl_repeat_limit_error;
        alert(alert_msg.replace("\$limit", res.limit));
        CAL.get("title-cal-edit").innerHTML = CAL.lbl_edit;
        ajaxStatus.hideStatus();
        CAL.enable_buttons();
        return;
      }
      $('.modal-cal-edit').modal('hide');
      CAL.update_vcal();
      var newEvent = new Object();
      $("#calendar" + res.user_id).fullCalendar("removeEvents", res['record']);
      newEvent.module = res['module_name'];
      newEvent.title = res['name'];
      newEvent.record = res['record'];
      newEvent.id = res['record'];
      if (undefined !== global_colorList[res.module_name]) {
        newEvent.backgroundColor = '#' + global_colorList[res.module_name].body;
        newEvent.borderColor = '#' + global_colorList[res.module_name].border;
        newEvent.textColor = '#' + global_colorList[res.module_name].text;
      }
      newEvent.start = new Date(moment.unix(res['ts_start']).format("MM/DD/YYYY") + " " + moment(res['time_start'], 'hh:mma').format("HH:mm"));
      newEvent.end = moment(new Date(moment.unix(res['ts_start']).format("MM/DD/YYYY") + " " + moment(res['time_start'], 'hh:mma').format("HH:mm"))).add(res['duration_hours'], 'hours').add(res['duration_minutes'], 'minutes');
      if ((res['duration_hours'] % 24 === 0) && (res['time_start'] == "12:00am")) {
        newEvent.allDay = "true";
      }
      $('#calendar' + res.user_id).fullCalendar('renderEvent', newEvent);
      if (res['repeat']) {
        $.each(res['repeat'], function (key, value) {
          var newEvent = new Object();
          newEvent.module = res['module_name'];
          newEvent.title = res['name'];
          newEvent.record = value['id'];
          newEvent.id = value['id'];
          newEvent.start = new Date(moment.unix(value['ts_start']).format("MM/DD/YYYY") + " " + moment(res['time_start'], 'hh:mma').format("HH:mm"));
          newEvent.end = moment(new Date(moment.unix(value['ts_start']).format("MM/DD/YYYY") + " " + moment(res['time_start'], 'hh:mma').format("HH:mm"))).add(res['duration_hours'], 'hours').add(res['duration_minutes'], 'minutes');
          if ((res['duration_hours'] % 24 === 0) && (res['time_start'] == "12:00am")) {
            newEvent.allDay = "true";
          }
          $('#calendar' + res.user_id).fullCalendar('renderEvent', newEvent);
        });
      }
      ajaxStatus.hideStatus();
    } else {
      alert(CAL.lbl_error_saving);
      ajaxStatus.hideStatus();
    }
  };
  var url = "index.php?module=Calendar&action=SaveActivity&sugar_body_only=true";

  var fileFormData = new FormData(CAL.get("CalendarEditView"));

  if (res.module_name == "Meetings") {
    // FILE ATTACHMENTS
    // Loop through each of the selected files.
    var files = $('#file_create_file').prop('files');
    for (var i = 0; i < files.length; i++) {
      var file = files[i];

      // Add the file to the request.
      fileFormData.append('files[]', file);
    }
  }

  $.ajax({
    url: url,
    type: 'POST',
    processData: false, // important
    contentType: false, // important
    dataType : 'json',
    data: fileFormData,
    success: callback
  });
  // YAHOO.util.Connect.setForm(CAL.get("CalendarEditView"));
  // YAHOO.util.Connect.asyncRequest('POST', url, callback, false);
}
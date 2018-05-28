
CAL.disable_buttons = function () {
  CAL.get("btn-cancel-notify").setAttribute("disabled", "disabled");
  CAL.get("btn-save").setAttribute("disabled", "disabled");
  CAL.get("btn-send-invites").setAttribute("disabled", "disabled");
  CAL.get("btn-delete").setAttribute("disabled", "disabled");
  CAL.get("btn-full-form").setAttribute("disabled", "disabled");
  if (CAL.enable_repeat) {
    CAL.get("btn-edit-all-recurrences").setAttribute("disabled", "disabled");
    CAL.get("btn-remove-all-recurrences").setAttribute("disabled", "disabled");
  }
}

CAL.enable_buttons = function () {
  CAL.get("btn-save").removeAttribute("disabled");
  CAL.get("btn-send-invites").removeAttribute("disabled");
  if (CAL.get("record").value != "") {
    CAL.get("btn-delete").removeAttribute("disabled");
    if (CAL.get("type").value == "Meeting") {
      CAL.get("btn-cancel-notify").removeAttribute("disabled");
    }
  }
  CAL.get("btn-full-form").removeAttribute("disabled");
  if (CAL.enable_repeat) {
    CAL.get("btn-edit-all-recurrences").removeAttribute("disabled");
    CAL.get("btn-remove-all-recurrences").removeAttribute("disabled");
  }
}
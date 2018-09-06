
CAL.disable_buttons = function () {
  CAL.get("btn-cancel-notify").setAttribute("disabled", "disabled");
  CAL.get("btn-save").setAttribute("disabled", "disabled");
  CAL.get("btn-send-invites").setAttribute("disabled", "disabled");
  CAL.get("btn-delete").setAttribute("disabled", "disabled");
  CAL.get("btn-full-form").setAttribute("disabled", "disabled");
  CAL.get("cal-repeat-block").style.display = "none";
}

CAL.enable_buttons = function () {
  CAL.get("btn-save").removeAttribute("disabled");
  CAL.get("btn-send-invites").removeAttribute("disabled");
  if (CAL.get("record").value !== "") {
    CAL.get("btn-delete").removeAttribute("disabled");
    if (CAL.get("current_module").value === "Meetings") {
      CAL.get("btn-cancel-notify").removeAttribute("disabled");
    }
  }
  CAL.get("btn-full-form").removeAttribute("disabled");
  CAL.get("cal-repeat-block").style.display = "none";
}
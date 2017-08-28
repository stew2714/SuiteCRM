function assignFields(recordtypeform) {
  $("#" + recordtypeform + " input, #" + recordtypeform + " select").change(function () {
    fetchLayout(recordtypeform)
  });
}

function fetchLayout(recordtypeform) {
  $.ajax({
    dataType: "json",
    url: "index.php?entryPoint=testLayout",
    data: {
      post_data: $('#' + recordtypeform).serialize(),
      this_view: recordtypeform
    },
  })
    .success(function (data) {
      if (data['found'] == true) {
        $("#" + data['div']).html(data['layout'])
      }
    });
}
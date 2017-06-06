$("#accept_button").click(function(){
  var url = "index.php?module=sa_Fluency_One&action=accept";
  var data = {record:$('[name=record]').val()};
  var query = $.ajax({
    dataType: "json",
    url: url,
    data: data,
    success: function(data){
      return data;
    }
  });
  var response = query.responseText;

  if (response === "success") {
    $("#modal-title").text("Accept Successful");
    $("#modal-content").text("The record has successfully been assigned.");
  } else {
    $("#modal-title").text("Accept Failed");
    $("#modal-content").text("There has been a problem assigning this record as there was no record ID passed to the operation. Please try again.");
  }

  $('#modal-dialog').modal("toggle");
});

$("#return_to_requester").click(function(){
    var url = "index.php?module=sa_Fluency_One&action=returnToRequester";
    var data = {record:$('[name=record]').val()};
    var query = $.ajax({
        dataType: "json",
        url: url,
        data: data,
        success: function(data){
            return data;
        }
    });
    var response = query.responseText;

    if (response === "success") {
        $("#modal-title").text("Return Successful");
        $("#modal-content").text("The record has successfully been returned to the Requester");
    } else {
        $("#modal-title").text("Return Failed");
        $("#modal-content").text("There has been a problem assigning this record back to the Requester as there was no record ID passed to the operation. Please try again.");
    }

    $('#modal-dialog').modal("toggle");
});

$("#modal-dialog").click(function(){
    modalVisible = $("#modal-dialog").hasClass("in");

    if (modalVisible === true) {
        location.reload();
    }
});
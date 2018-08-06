// $( document ).ready(function() {
//YUI.Env.DOMReady
// Handler for .ready() called.
SUGAR.util.doWhen("YUI.Env.DOMReady == true", function () {
  if ($("#EditView [name='record']").length > 0) {
    var record = $("#EditView [name='record']").val();
  } else {
    var record = $("[name='record']").val();
  }
  doCall(record);

  var $createFileArray = $('#file_create_file');
  var $createFileClone = $createFileArray.clone()
    .attr('id', 'file_create_file_origin');
  $createFileArray.after($createFileClone);
  $createFileArray.change(function (e) {
    addAttachmentGroup(this);
  });

  var $uploadList = $("<ul>", {id: "upload_file_list"});
  $createFileClone.before($uploadList);
  $uploadList.append($createFileClone);
  $uploadList.append($createFileArray);
  $createFileClone.hide(0);

  function doCall(record) {
    $.ajax({
      dataType: "json",
      url: "index.php?module=Meetings&action=fetchData",
      data: {
        id: record
      },
      success: callback
    });
  }

});

var attachmentGroupCounter = 0;

/**
 * @param obj
 */
function addAttachmentGroup(obj) {
  var $obj = $(obj);
  var $list = $("#upload_file_list");

  var maxSize = 0;
  if (typeof individualUploadMaxSize !== 'undefined') {
    maxSize = individualUploadMaxSize * 1024;
  }
  var exceedsMaxSize = false;

  var groupName = '';
  for (var i = 0; i < obj.files.length; i++) {
    console.log( obj.files[i]);
    if (i > 0) {
      groupName += ', ';
    }
    groupName += obj.files[i].name;
    if (maxSize && obj.files[i].size > maxSize) {
      exceedsMaxSize = true;
    }
  }
  if (exceedsMaxSize) {
    groupName = 'One or more files exceed the maximum permitted size of ' + maxSize + ' bytes';
  }
  var groupId = 'upload_file_list_' + attachmentGroupCounter;

  var button = "<a href='#' onclick='$(\"#" + groupId
    + "\")[0].remove(); return false;' class='button'>Remove</a> - ";
  $list.append("<li id='" + groupId + "'>" + button
    + "<span>" + groupName + "</span></li>");

  $obj.hide();
  $obj.attr('id', $obj.attr('id') + '_' + attachmentGroupCounter);
  $('#' + groupId).append($obj);

  if (exceedsMaxSize) {
    $obj.remove();
  }

  attachmentGroupCounter++;

  var $createFileOrigin = $('#file_create_file_origin');
  var $clone = $createFileOrigin.clone().attr('id', 'file_create_file').show();
  $clone.change(function (e) {
    addAttachmentGroup(this);
  });
  $list.append($clone);

}

function removeAttachment(record) {
  var deleteInput = "<input type='hidden' name='deleteMeetingAttachment[]' id='deleteMeetingAttachment-"
    + record + "' value='" + record + "'>";
  var $listRow = $('#file_list_' + record);
  $listRow.append(deleteInput);
  $listRow.hide(400);
}

var callback = function (data) {
  if (data.message == "success") {
    $(data.results).each(function (index, value) {
      var button = "";
      if ($("#EditView [name='record']").length > 0 || $("#CalendarEditView [name='record']").length > 0) {
        button = "<a href='#' onclick='removeAttachment( \"" + value.id + "\" );return false' class='button'>Remove</a> - ";
      }
      $("#file_create_file_list").append("<li id='file_list_" + value.id + "'>" + button + "<a href='" + value.url + "'>" + value.name + "</a></li>");
    });
  }
};

var removeView = function (data) {
    if (data.message == "success") {
      $('#file_list_' + data.id).hide();
    }
  }
;

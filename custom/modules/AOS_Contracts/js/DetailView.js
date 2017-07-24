$(document).ready(function() {
    // Accept Request as a Legal Team User
    $("#acceptRequestLegal").click(function(){
        var url = "index.php?module=AOS_Contracts&action=accept";
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
            $("#modal-title").text("Accepted Successfully");
            $("#modal-content").text("This record has been successfully assigned to your account.");
        } else {
            $("#modal-title").text("Accepting Failed");
            $("#modal-content").text("There was a problem assigning this record to yourself. Please try again. If the problem persists please contact your System Administrator.");
        }

        $('#modal-dialog').modal("toggle");
    });

    // Accept Request as a Comms Op User
    $("#acceptRequestCommsOps").click(function(){
        var url = "index.php?module=AOS_Contracts&action=acceptCommOps";
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
            $("#modal-title").text("Accepted Successfully");
            $("#modal-content").text("This record has been successfully assigned to your account.");
        } else {
            $("#modal-title").text("Accepting Failed");
            $("#modal-content").text("There was a problem assigning this record to yourself. Please try again. If the problem persists please contact your System Administrator.");
        }

        $('#modal-dialog').modal("toggle");
    });

    // Comms Op Return To Requester (Sales) Button Functionality
    $("#returnToRequester").click(function(){
        var url = "index.php?module=AOS_Contracts&action=returnToRequester";
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
            $("#modal-content").text("The record has successfully been returned to the original author.");
        } else {
            $("#modal-title").text("Return Failed");
            $("#modal-content").text("There has been a problem assigning this record back to the Requester. Please try again. If the problem persists please contact your System Administrator.");
        }

        $('#modal-dialog').modal("toggle");
    });

    // Send to Legal Queue
    $("#sendToLegal").click(function (){
        var url = "index.php?module=AOS_Contracts&action=assignToLegal";
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
            $("#modal-title").text("Sent Successfully");
            $("#modal-content").text("This record has been successfully sent over to the Legal Queue.");
        } else {
            $("#modal-title").text("Sending Failed");
            $("#modal-content").text("There was a problem sending this record to the Legal Queue as there was no record ID passed to the operation. If the problem persists please contact your System Administrator.");
        }

        $('#modal-dialog').modal("toggle");
    });

    // Close Modal and Refresh Page Functionality
    $("#modal-dialog").click(function(){
        modalVisible = $("#modal-dialog").hasClass("in");

        if (modalVisible === true) {
            location.reload();
        }
    });

    // Redline Review
    $("#redlineReview").click(function(){
        var url = "index.php?module=AOS_Contracts&action=redLineReview";
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
            $("#modal-title").text("Added for a M*Modal Redline Review");
            $("#modal-content").text("This record has been successfully added to a M*Modal Redline Review.");
        } else {
            $("#modal-title").text("Sending Failed");
            $("#modal-content").text("There was a problem adding this record to a M*Modal Redline Review. If the problem persists please contact your System Administrator.");
        }

        $('#modal-dialog').modal("toggle");
    });

    // Comm Ops Email Template
    $("#informCommOps").click(function(){
      $("#tab-actions").removeClass("open");

      var contactId = $("#hidden_contactId").val();
      var recordId = $("#formDetailView [name='record']").val();
      var name = $("#hidden_contactName").val();
      var email = $("#hidden_email").val();;

      SUGAR.quickCompose.init({
        "fullComposeUrl": "contact_id=" + contactId + "\u0026" +
                            "parent_type=Contacts\u0026" +
                            "parent_id=" + recordId + "\u0026" +
                            "parent_name=" + name + "\u0026" +
                            "to_addrs_ids=" + contactId + "\u0026" +
                            "to_addrs_names=" + name + "\u0026" +
                            "to_addrs_emails="+  email +"\u0026" +
                            "to_email_addrs=" + email +
                            "return_module=AOS_Contracts\u0026" +
                            "return_action=DetailView\u0026" +
                            "return_id=" + recordId,
        "composePackage": {
          "contact_id": contactId,
          "parent_type": "Contacts",
          "parent_id": contactId,
          "parent_name": name,
          "to_addrs_ids": contactId,
          "to_addrs_names": name,
          "to_addrs_emails": email,
          "to_email_addrs": name + " \u003C" +email + "\u003E",
          "return_module": "AOS_Contracts",
          "return_action": "DetailView",
          "return_id": recordId
        }
      });
            SUGAR.util.doWhen("SUGAR.quickCompose.frameLoaded == true && $('table#composeHeaderTable0 button:first-child').attr('onclick')", function(){
            $("table#composeHeaderTable0 button:first-child" ).unbind("click").removeAttr("onclick").click(function(e) {
                e.preventDefault();
                var url = "index.php?module=AOS_Contracts&action=informCommOps";
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
                    // $("#modal-title").text("Successfully sent for Signatures");
                    // $("#modal-content").text("This record has been successfully sent off for signatures.");
                    SUGAR.email2.composeLayout.sendEmail(0, false);
                } else {
                    $("#modal-title").text("Sending Failed");
                    $("#modal-content").text("There was a problem sending this record for Signatures. If the problem persists please contact your System Administrator.");
                }
            });
        })



    });

    // Send to Comm Ops
    $("#submitToCommOps").click(function(){
        var url = "index.php?module=AOS_Contracts&action=assignToCommOps";
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
            $("#modal-title").text("Sent Successfully");
            $("#modal-content").text("This record has been successfully sent over to the Comm Ops Queue.");
        } else {
            $("#modal-title").text("Sending Failed");
            $("#modal-content").text("There was a problem sending this record to the Comm Ops Queue as there was no record ID passed to the operation. If the problem persists please contact your System Administrator.");
        }
        $('#modal-dialog').modal("toggle");
    });

    // Activate Request
    $("#activateRequest").click(function(){
        var url = "index.php?module=AOS_Contracts&action=activateRequest";
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
            $("#modal-title").text("Sent Successfully");
            $("#modal-content").text("This record has been successfully sent over to the Comm Ops Queue.");
        } else {
            $("#modal-title").text("Sending Failed");
            $("#modal-content").text("There was a problem sending this record to the Comm Ops Queue as there was no record ID passed to the operation. If the problem persists please contact your System Administrator.");
        }
        $('#modal-dialog').modal("toggle");
    });
});
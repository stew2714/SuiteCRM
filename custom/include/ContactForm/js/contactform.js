// Hide Fields on load
$(document).ready(function() {
    $("#solutionInterested").hide();
});

function showHideInputOptions(value) {
    // Hide Solution Interested option on specific values.
    if (value === "Product Interest") {
        $("#solutionInterested").slideDown("300");
    } else {
        $("#solutionInterested").slideUp("300");
        $("#solution_interest").val('');
    }

    // Hide Facility Type option on specific values
    if (value === "Partner and Reseller Inquiries" || value === "Technical Support") {
        $("#facilityType").slideUp("300");
        $("#facility_type").val('');
    } else {
        $("#facilityType").slideDown("300");
    }
}

$("#WebToLeadForm").submit(function(e){
  e.preventDefault();
  var value = $("#interested_in").val();

  if (value === "Product Interest" || value === "Accessory and Equipment Requests (Sales Inquiries)") {
      // Add Lead to the CRM
      console.log('submitted');
      submit_form();
  } else {
      // Do Nothing, can be a different outcome if need be.
      console.log('not submitted');
  }
});


function submit_form() {
    if (typeof(validateCaptchaAndSubmit) != 'undefined') {
        console.log('inside submit form, validateCaptcha not undefined');
        validateCaptchaAndSubmit();
    } else {
        console.log('going to check web to lead fields');
        check_webtolead_fields();
        document.WebToLeadForm.submit();
    }
}

function check_webtolead_fields() {
    if (document.getElementById('bool_id') != null) {
        var reqs = document.getElementById('bool_id').value;
        bools = reqs.substring(0, reqs.lastIndexOf(';'));
        var bool_fields = new Array();
        var bool_fields = bools.split(';');
        nbr_fields = bool_fields.length;
        for (var i = 0; i < nbr_fields; i++) {
            if (document.getElementById(bool_fields[i]).value == 'on') {
                document.getElementById(bool_fields[i]).value = 1;
            } else {
                document.getElementById(bool_fields[i]).value = 0;
            }
        }
    }
}
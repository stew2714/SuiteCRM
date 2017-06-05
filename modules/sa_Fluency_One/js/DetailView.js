/**
 * Created by ian on 05/06/17.
 */


$("#accept_button").click(function(){
  var url = "index.php?module=sa_Fluency_One&action=accept";
  var data = $('[name=record]').val();

  $.ajax({
    dataType: "json",
    url: url,
    data: data,
    success: function(data){
      if(data.message == "success"){
        alert("Record Accepted");
      }else{
        alert("Please contact an administrator, An issue has occurred with this action");
        console.log("Please contact an administrator, An issue has occurred with this action");
      }
    }
  });

})
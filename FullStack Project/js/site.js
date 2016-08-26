// Load Js
$( document ).ready(function() {
  console.log("Js loaded...");

  //page info
  var inputFieldIds = [
    'input[name="radio-form"]:checked',
    "first-name","last-name","email","phone","comments-area",
    "subject", "heard"
  ];

  //send button action
  $( "#send-btn" ).click(function() {
    console.log( "Send button clicked." );
    //data object
    var obj = {}
    var formComplete = true;
    // collect user input from page
    for (var i = 0; i < inputFieldIds.length; i++) {
      var inputVal = $("#"+inputFieldIds[i]).val();
      //check radio missing field
      if (i == 0) {
        if ( $(inputFieldIds[i]).val() ) {
          obj["patient"] = $(inputFieldIds[i]).val();
        }else {
          formComplete = false;
          $("#paitent-form").css('border', '1px solid #f00');
          $("#form-yes").click(function() {$("#paitent-form").css('border','') });
          $("#form-no").click(function() {$("#paitent-form").css('border','') });
        }
      }else if (i < 6) {
        //check input missing field
        if (!inputVal) {
          $("#"+inputFieldIds[i]).css('border', '1px solid #f00');
          formComplete = false;
          $("#"+inputFieldIds[i]).focus(function() {$(this).css('border','');});
        }else{
          obj[inputFieldIds[i]] = inputVal;
        }
      }else {
        //check select missing field
        var formTarget;
        if (inputVal == "Subject *") {
          formComplete = false;
          formTarget = "#subject";
          $(formTarget).css('border', '1px solid #f00');
          $(formTarget).focus(function() {$(this).css('border','');});
        }else if (inputVal == "How did you heard about us? *") {
          formComplete = false;
          formTarget = "#heard";
          $(formTarget).css('border', '1px solid #f00');
          $(formTarget).focus(function() {$(this).css('border','');});
        }else{
          obj[inputFieldIds[i]] = inputVal;
        }
      }
    }
    // send data if form is complete
    if (formComplete) {
      console.log("All fields are filled...sending data...");
        obj = JSON.stringify(obj);
        var postObj = { "action": obj };

        // post to php
        $.ajax({ url: 'post.php',
        data: postObj,
        type: 'post',
        success: function (data) {
          //console.log(data);
          if (data) {
            console.log("Email is VALIDATED, ready for animation");
            // $( "#form" ).fadeOut( "slow", function() {});
            $( "#form" ).fadeOut( "slow", function() {
              // anime in
              $( "#navBar-end" ).animate({height: '250px',opacity: '0.7'}, "slow");
              $( "#navBar-end" ).append("<p id='success'>Successful Submission!</p>");
            });
          }else{
            alert("Email was not valiate, please enter your email again.");
            $("#"+inputFieldIds[3]).css('border', '1px solid #f00');
            $("#"+inputFieldIds[3]).focus(function() {$(this).css('border','');});
          }
        }
        });
    }else{
      alert("Please fill out all required fields before hitting send.");
    }

  });

});

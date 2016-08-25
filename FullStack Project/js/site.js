// Load Js
$( document ).ready(function() {
  console.log("Js loaded...");

  //page info
  var radioButton = 'input[name="radio-form"]:checked';
  var inputFieldIds = ["first-name","last-name","email","phone","comments-area","details"];

  //send button action
  $( "#send-btn" ).click(function() {
    console.log( "Send button clicked." );

    // collect user input from page
    // $( "select.foo option:selected").val();

    for (var i = 0; i < inputFieldIds.length; i++) {
      console.log( $("#"+inputFieldIds[i]).val());
    }
    console.log($(radioButton).val());
    var obj = {"foo": "bar", "cool": "attr"};
    obj = JSON.stringify(obj);
    var testObj = {
      "action": obj
    };

    // post to php
    $.ajax({ url: 'post.php',
       data: testObj,
       type: 'post',
       success: function (data) {
           console.log(data);
           alert(data);
       }
      });
  });

});

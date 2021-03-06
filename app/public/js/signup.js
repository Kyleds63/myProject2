// Code here handles what happens when a user submits a new character on the form.
// Effectively it takes the form inputs then sends it to the server to save in the DB.

// when user clicks add-btn
$("#signUp").on("click", function(event) {
  event.preventDefault();

  // make a newUser obj
  if(password==password2){
    var newUser = {
    
      username: $("#username").val().trim(),
    
      email: $("#email").val().trim(),
    
      password: $("#password").val().trim(),
    };
  }else{
   	  alert("Passwords do not match");
   	  document.getElementByID('password').innerHTML="";
   	  document.getElementByID('password2').innerHTML="";
  }

  // send an AJAX POST-request with jQuery
  $.post("/api/new", newUser)
    // on success, run this callback
    .done(function(data) {
      // log the data we found
      console.log(data);
      // tell the user we're adding a character with an alert window
      alert("Adding User...");
    });

  // empty each input box by replacing the value with an empty string
  $("#username").val("");
  $("#email").val("");
  $("#password").val("");
  $("#password2").val("");

});

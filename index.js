/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// PASSWORD VALIDATION
function validatePassword() {
  // Get the password input value
  var password = document.getElementById("psw").value;

  // Define the regular expressions for alphanumeric and special characters
  var alphanumericRegex = /^(?=.*[a-zA-Z])(?=.*\d).{10,}$/;
  var specialCharRegex = /^(?=.*[a-zA-Z0-9])(?=.*[!@#$%^&*]).{10,}$/;

  // Check if the password meets the requirements
  if (alphanumericRegex.test(password) && specialCharRegex.test(password)) {
    // Password is valid, proceed with form submission
    document.getElementById("password-validation-msg").textContent = "";
    document.forms[0].submit();
  } else {
    // Password is invalid, display an error message
    document.getElementById("password-validation-msg").textContent = "Password must be at least 10 characters long and contain both alphanumeric characters and special characters.";
    event.preventDefault(); // Prevent form submission
  }
}
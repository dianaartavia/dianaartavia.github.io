$('.toggle').click(function () {
  $('.formulario').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: 'toggle'
  }, "slow");
});

(function () {
  var updateButton = document.getElementById('recuperarContraseña');
  var cancelButton = document.getElementById('cancel');
  var favDialog = document.getElementById('favDialog');

  // Update button opens a modal dialog
  updateButton.addEventListener('click', function () {
    favDialog.showModal();
  });

  // Form cancel button closes the dialog box
  cancelButton.addEventListener('click', function () {
    favDialog.close();
  });

})();

function showPassword() {
  var password = document.getElementById("password");
  var confPassword = document.getElementById("confPassword");
  var logpass = document.getElementById("logpass");
  var signpass = document.getElementById("signpass");
  var confsignpass = document.getElementById("confsignpass");

  if (password.type === "password" && confPassword.type === "password" || logpass === "password" || signpass.type === "password" && confsignpass.type === "password") {
    password.type = "text";
    confPassword.type = "text";
    logpass.type = "text";
    confsignpass.type = "text";
    signpass.type = "text";
  } else {
    password.type = "password";
    confPassword.type = "password";
    logpass.type = "password";
    confsignpass.type = "password";
    signpass.type = "password";

  }
}
$('.toggle').click(function () {
    $('.formulario').animate({
      height: "toggle",
      'padding-top': 'toggle',
      'padding-bottom': 'toggle',
      opacity: 'toggle'
    }, "slow");
  });
  
  function showPassword() {
    var confPassword = document.getElementById("confipass");
    var logpass = document.getElementById("loginpass");
    var signpass = document.getElementById("signpassw");
  
    if (confPassword.type === "password" || logpass === "password" || signpass.type === "password") {
      confPassword.type = "text";
      logpass.type = "text";
      signpass.type = "text";
    } else {
      confPassword.type = "password";
      logpass.type = "password";
      signpass.type = "password";
  
    }
  }

  
function myFunction() {
  document.getElementById("catalog-menu").classList.toggle("show");
}
// Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
window.onclick = function(event) {
  if (!event.target.matches('.catalog')) {
    var dropdowns = document.getElementsByClassName("catalog-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      this.style.transition = '0.3s';
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        this.style.transition = '0.3s';
      }
    }
  }
}

// preloader
window.addEventListener('load', function () {
    const preloader = document.querySelector('.preloader');
 
    setTimeout(function() {
        preloader.style.opacity = '0';
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 1000);
        preloader.style.transition = '0.8s';
    }, 500);
});

//form_register_validation

$("#register").validate({
  rules: {
    email: {
      required: true,
      email: true
    },
    password: {
      required: true,
      minlength: 8
    }
  },
  messages: {
    email: {
      required: "Пожалуйста, введите email",
      email: "Введите корректный адрес электронной почты"
    },
    password: {
      required: "Пожалуйста, введите пароль",
      minlength: "Пароль должен быть не менее 8 символов"
    }
  }
});
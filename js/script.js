$(document).ready(function () {
    $('.feedbacks__carousel').slick({
  autoplay: true,
  autoplaySpeed: 10000,
  responsive: [
        {
      breakpoint: 767,
      settings: {
        arrows: false,
  dots: true,
      }
    }
  ]
});
$('.feedbacks__wrapper').slick({
    slidesToShow: 2,
  autoplay: true,
  autoplaySpeed: 17000,
  arrows: false,
  dots: true,
  responsive: [
        {
      breakpoint: 767,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
    
  $(".form__consult a, .modal a").on("click", function () {
    $(".privacy").fadeIn("slow");
  });
  $(".privacy__back").on("click", function () {
    $(".privacy").fadeOut("slow");
  });
  $(
    ".main__questbutton, .main__button, .instruction__button, .timer__button, .feedbacks__button"
  ).on("click", function () {
    $(".overlay, .modal").fadeIn("slow");
  });
  $(".modal__close, .button_close").on("click", function () {
    $(".overlay, .modal").fadeOut("slow");
  });
  $(".button_prev").each(function (i) {
    $(this).on("click", function () {
      $(".modal").eq(i).fadeOut();
      $(".modal")
        .eq(i - 1)
        .fadeIn();
    });
  });
  $(".button_next").each(function (i) {
    $(this).on("click", function () {
      $(".modal").eq(i).fadeOut();
      $(".modal")
        .eq(i + 1)
        .fadeIn();
    });
  });

  $(".form__consult").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true,
      },
      phone: "required",
    },
    messages: {
      name: "Пожалуйста, введите свое имя",
      email: {
        required: "Пожалуйста, введите свою почту",
        email: "Неправильно введен адрес почты",
      },
      phone: "Пожалуйста, введите свой телефон",
    },
  });

  $(".overlay").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true,
      },
      phone: "required",
    },
    messages: {
      name: "Пожалуйста, введите свое имя",
      email: {
        required: "Пожалуйста, введите свою почту",
        email: "Неправильно введен адрес почты",
      },
      phone: "Пожалуйста, введите свой телефон",
    },
  });

  $("input[name=phone]").mask("+7 (999) 999-99-99");

  $(".form__consult").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize(),
      success: function () {
        $("#thanks").fadeIn();
      },
    }).done(function () {
      $(this).find("input").val("");
      $("form").trigger("reset");
    });
    return false;
  });
  $(".overlay").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize(),
      success: function () {
        $(".modal").fadeOut();
        $("#thanks").fadeIn();
      },
    }).done(function () {
      $(this).find("input").val("");
      $("form").trigger("reset");
    });
    return false;
  });
});

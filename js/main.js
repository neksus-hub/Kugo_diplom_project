const swiper = new Swiper(".swiper", {
  loop: false,
  slidesPerView: 4,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,
    },
    756: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите номер телефона",
      },
    ])
    .onSuccess((event) => {
      console.log("Validation passes and form submited", event);
    });
});

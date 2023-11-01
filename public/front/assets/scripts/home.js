const doctors_splide = new Splide(".home__slider__doctors", {
  type: "loop",
  gap: "1.5rem",
  pagination: false,
  perMove: 1,
  perPage: 4,
  focus: "center",
  // direction: "rtl",
});
doctors_splide.mount();

doctors_splide.on("resize", () => {
  if (window.matchMedia("(max-width: 600px)").matches) {
    doctors_splide.options.perPage = 1;
  } else if (window.matchMedia("(max-width: 900px)").matches) {
    doctors_splide.options.perPage = 2;
  } else {
    doctors_splide.options.perPage = 4;
  }
  doctors_splide.refresh();
});

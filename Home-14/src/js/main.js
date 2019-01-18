$('.portfolio__slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<button class="portfolio__slider__btn portfolio__slider__prev-btn"><div class="left-arrow"></div></button>',
  nextArrow: '<button class="portfolio__slider__btn portfolio__slider__next-btn"><div class="right-arrow"></div></button>',
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        prevArrow: '<button class="portfolio__slider__btn portfolio__slider__prev-btn"><div class="left-arrow"></div></button>',
        nextArrow: '<button class="portfolio__slider__btn portfolio__slider__next-btn"><div class="right-arrow"></div></button>',
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="portfolio__slider__btn portfolio__slider__prev-btn"><div class="left-arrow"></div></button>',
        nextArrow: '<button class="portfolio__slider__btn portfolio__slider__next-btn"><div class="right-arrow"></div></button>'
      }
    }
  ]
})
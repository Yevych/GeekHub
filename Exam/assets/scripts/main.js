(function ($) {
  //Hamburger menu

  $(document).ready(function () {
    $('.js-burger-menu').on('click', function () {
      $(this).toggleClass('active')
      $('body').toggleClass('open-menu')
    })

    initMenu()

    function initMenu () {
      $('.js-burger-menu').removeClass('active')
      $('body').removeClass('open-menu')
    }

  })
})(jQuery)

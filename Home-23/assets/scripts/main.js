(function ($) {
  //Hamburger menu

  jQuery(document).ready(function () {
    jQuery('.js-burger-menu').on('click', function () {
      jQuery(this).toggleClass('active')
      jQuery('body').toggleClass('open-menu')
    })

    initMenu()

    function initMenu () {
      jQuery('.js-burger-menu').removeClass('active')
      jQuery('body').removeClass('open-menu')
    }

  })

  //Height blocks
  function setEqualHeight (columns) {
    var tallestcolumn = 0
    columns.each(function () {
      currentHeight = $(this).height()
      if (currentHeight > tallestcolumn) {
        tallestcolumn = currentHeight
      }
    })
    columns.height(tallestcolumn)
  }

  setEqualHeight($('.testimonials__wrapper'))
  /*делаем блоки одинаковой высоты*/
  setEqualHeight($('.candidate__content'))

  //Tabs

  jQuery('.tab_item').not(':first').hide()
  jQuery('.wrapper .tab').click(function () {
    jQuery('.wrapper .tab').removeClass('active').eq($(this).index()).addClass('active')
    jQuery('.tab_item').hide().eq($(this).index()).fadeIn()
  }).eq(0).addClass('active')

  //Count donate

  var sum = 0
  $('.donor-list li').each(function () {
    sum += parseInt($('.price', this).text())
  })
  $('#res').html(sum)

  //Progress bar

  function bar () {
    var goal = $('#goal').text()
    var rand = sum * 100 / goal
    rand = Math.round(rand)
    return rand
  }

  setTimeout(function () {
    document.querySelector('progress').value = bar()
  }, 0)

})(jQuery)

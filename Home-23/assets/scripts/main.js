(function($) {
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
  function setEqualHeight(columns){
    var tallestcolumn = 0;
    columns.each(function(){
      currentHeight = $(this).height();
      if(currentHeight > tallestcolumn){
        tallestcolumn = currentHeight;
      }
    });
    columns.height(tallestcolumn);
  }
  setEqualHeight($(".testimonials__wrapper"));  /*делаем блоки одинаковой высоты*/
  setEqualHeight($(".candidate__content"));
})(jQuery);

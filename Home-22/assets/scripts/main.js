(function($) {
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
  setEqualHeight($(".post__info"));  /*делаем блоки одинаковой высоты*/

  //Scroll top
  var scrollTopBtn = $('.js-scroll-top');
  scrollTopBtn.on('click', function () {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 500, 'swing');
  });

})(jQuery);

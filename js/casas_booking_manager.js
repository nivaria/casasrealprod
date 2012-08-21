(function ($) {
  /**
   * Mostrar / ocultar otras casas en detalle de casa.
   */
  $(document).ready(function() {
    $('.unit-search-result-alt-show').click(function() {
      $('.unit-search-result-alt-list').show();
      $('.unit-search-result-alt-show').hide();
    });
    $('.unit-search-result-alt-hide').click(function() {
      $('.unit-search-result-alt-list').hide();
      $('.unit-search-result-alt-show').show();
    });
  });
  
  /**
   * Mostrar / ocultar información extra de servicios en listado de servicios
   * en booking cart.
   */
  $(document).ready(function() {
    $('.show-more .link-more').click(function() {
      $(this).siblings('.content-more').toggle();
      if ($(this).siblings('.content-more').is(':visible')) {
        $(this).removeClass('show');
        $(this).addClass('hide');
        $(this).html('-');
      } else {
        $(this).removeClass('hide');
        $(this).addClass('show');
        $(this).html('+');
      }
    });
  });
})(jQuery);
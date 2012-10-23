<div class="unit-availability">
  <?php print render($calendar); ?>
</div>
<div class="unit-search">
  <div class="unit-search-info">
    <?php print t('Remember that there is minimum of two nights for reservation.'); ?>
  </div>
  <div class="unit-search-form">
    <?php print render($booking_search_form); ?>
  </div>
  <div class="unit-search-result">
    <?php if (!$booking_results): ?>  
      <?php print render($no_results); ?>
    <?php endif; ?>

    <?php if ($booking_results): ?>
      <?php foreach ($units_per_type as $unit_type => $units_per_price_level) {
        foreach ($units_per_price_level as $price => $units) {
          foreach ($units as $unit_id => $unit) {
            print render($unit['unit']);
            print render($unit['price']);
            print render($unit['book_unit_form']);
          }
        }
      }?>
    <?php endif; ?>
  </div>
  <div class="unit-search-result-alt">
    <?php if ($alt_booking_results): ?>
    <div class="unit-search-result-alt-show"><span><?php print t('Show other rooms'); ?></span></div>
    <div class="unit-search-result-alt-list">
      <?php print render($alt_booking_results_title); ?>
      <?php foreach ($alt_units_per_type as $unit_type => $units_per_price_level) {
        print render($$unit_type);
        foreach ($units_per_price_level as $price => $units) {
          foreach ($units as $unit_id => $unit) {
            print render($unit['unit']);
            print render($unit['price']);
            print render($unit['book_unit_form']);
          }
        }
      }?>
      <div class="unit-search-result-alt-hide"><span><?php print t('Hide other rooms'); ?></span></div>
    </div>
    <?php endif; ?>
  </div>
</div>
  
  

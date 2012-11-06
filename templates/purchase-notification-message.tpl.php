<?php

/**
 * @file
 * Customize confirmation screen after successful purchase.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<div class="purchase-notification">
  <?php print $info ?>  
  <?php print $summary ?>
  <?php print $block_remember ?>
  <?php print $block_share ?>
  <?php print $block_contact ?>
  <?php print $block_location ?>
  <?php print $block_extra ?>
</div>

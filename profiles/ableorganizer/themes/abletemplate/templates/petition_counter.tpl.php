<?php
/**
 * @file
 * Template to render petition counter.
 */
?>
<div class="petition-signatures">
  <span class="received"><?php print check_plain($received) ?></span>
  <?php if (!empty($goal)) :  print t('of') ?>
    <span class="goal"><?php print check_plain($goal) ?></span>
  <?php endif;
  print format_plural((int) $received, 'signature received. Add yours now!', 'signatures received. Add yours now!');?>
</div>

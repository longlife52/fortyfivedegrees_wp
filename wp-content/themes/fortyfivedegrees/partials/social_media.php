
<?php
  $facebook = get_field ('facebook', 'options');
  $youtube = get_field ('youtube', 'options');

  if ($facebook || $youtube) { ?>

  <?php //facebook
  if ($facebook) { ?>
  <a href="<?= $facebook; ?>" target="blank">
      <svg class="icon icon-facebook hvr-wobble-to-top-right"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-facebook"></use></svg>
  </a>
  <?php } ?>

  <?php //youtube
  if ($youtube) { ?>
  <a href="<?= $youtube; ?>" target="blank">
      <svg class="icon icon-facebook hvr-wobble-to-top-right"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-facebook"></use></svg>
  </a>
  <?php } ?>

<?php } ?>

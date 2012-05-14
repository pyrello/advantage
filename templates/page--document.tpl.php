<?php 
drupal_add_css(drupal_get_path('theme', 'advantage') . '/css/preservation-document.css');
?>
<div id="page-wrapper">
  <div<?php print $attributes; ?>>
    <?php if (isset($page['header'])) : ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
    <?php if (isset($page['content'])) : ?>
      <?php print render($page['content']); ?>
    <?php endif; ?>  
  </div>
</div>
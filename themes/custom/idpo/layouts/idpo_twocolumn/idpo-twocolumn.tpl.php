<div class="ngbc-twocolumn">
<?php if (!empty($content['left'])): ?>
  <div class="span8 pull-left">
    <?php print render($content['left']); ?>
  </div>
<?php endif; ?>

<?php if (!empty($content['right'])): ?>
  <div class="span4 clearfix pull-right">
    <?php print render($content['right']); ?>
  </div>
<?php endif; ?>
</div>

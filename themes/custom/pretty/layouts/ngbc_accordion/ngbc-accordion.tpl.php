<?php ?>

<?php if (!empty($css_id)): ?>
  <div id="<?php print $css_id; ?>" class="clearfix">
  <?php endif; ?>

  <?php if (!empty($content['heading'])): ?>
    <div class="accordion-heading">
      <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" data-target="#collapse<?php print $id; ?>">
        <?php print render($content['heading']); ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!empty($content['body']) || !empty($content['details'])): ?>
    <div id="collapse<?php print $id; ?>" class="accordion-body collapse in">
      <div class="accordion-inner">
        <?php print render($content['body']); ?>
        <?php if (!empty($content['details'])): ?>
        <div class="details row-fluid">
          <?php print render($content['details']); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($css_id)): ?>
  </div>
<?php endif; ?>

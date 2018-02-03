<!-- View All Patterns in a Pattern Sub-Type -->
<div class="sg-main" role="main">
  <!-- Patterns -->
  <div id="sg-patterns">
    <?php foreach ($partials as $partial) : ?>
      <?php if (isset($partial['patternSectionSubtype']) && $partial['patternSectionSubtype']): ?>
        <?php include 'patternSectionSubtype.tpl.php' ?>
      <? else: ?>
        <?php include 'patternSection.tpl.php' ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </div> <!--end #sg-patterns-->
</div><!--end .sg-main-->

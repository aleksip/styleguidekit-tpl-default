<div id="<?= $partial['patternPartial'] ?>" class="sg-pattern">
  <div class="sg-pattern-head">
    <h3 class="sg-pattern-title">
      <a href="../../patterns/<?= $partial['patternLink'] ?>" class="patternLink" data-patternpartial="<?= $partial['patternPartial'] ?>" title="Link to Pattern">
        <?= $partial['patternName'] ?>
        
        <?php if (isset($partial['patternState']) && !empty($partial['patternState'])): ?>
          <span class="sg-pattern-state <?= $partial['patternState'] ?>">
            <?= $partial['patternState'] ?>
          </span>
        <?php endif; ?>
      </a>
    </h3>
    
    <div class="sg-pattern-breadcrumb">
      <?php if (isset($partial['patternBreadcrumb'])) print $partial['patternBreadcrumb']; ?>
    </div>
    
    <a href="#" data-patternpartial="<?= $partial['patternPartial'] ?>" title="View Pattern Info" id="sg-pattern-extra-toggle-<?= $partial['patternPartial'] ?>" class="sg-pattern-extra-toggle">
      <span>&#9660;</span>
    </a>
  </div>
  
  <div class="sg-pattern-extra" id="sg-pattern-extra-<?= $partial['patternPartial'] ?>"></div>
    
  <div class="sg-pattern-example">
    <?php if (isset($partial['patternPartialCode'])) print $partial['patternPartialCode']; ?>
  </div>
  
  <script type="text/json" id="sg-pattern-data-<?= $partial['patternPartial'] ?>" class="sg-pattern-data">
    <?php if (isset($partial['patternData'])) print $partial['patternData']; ?>
  </script>
</div><!--end .sg-pattern-->

<script type="text/json" id="sg-pattern-data-footer" class="sg-pattern-data">
  <?= $patternData ?>
</script>

<script>
  /*!
  * scriptLoader - v0.1
  *
  * Copyright (c) 2014 Dave Olsen, http://dmolsen.com
  * Licensed under the MIT license
  *
  */
  
  var scriptLoader = {
    run: function(js,cb,target) {
      var s  = document.getElementById(target+'-'+cb);
      for (var i = 0; i < js.length; i++) {
        var src = (typeof js[i] != 'string') ? js[i].src : js[i];
        var c   = document.createElement('script');
        c.src   = '../../'+src+'?'+cb;
        if (typeof js[i] != 'string') {
          if (js[i].dep !== undefined) {
            c.onload = function(dep,cb,target) {
              return function() {
                scriptLoader.run(dep,cb,target);
              }
            }(js[i].dep,cb,target);
          }
        }
        s.parentNode.insertBefore(c,s);
      }
    }
  }
</script>

<script id="pl-js-polyfill-insert-<?= $cacheBuster ?>">
  (function() {
    if (self != top) {
      var cb = '<?= $cacheBuster ?>';
      var js = [];
      if (typeof document !== 'undefined' && !('classList' in document.documentElement)) {
        js.push('styleguide/bower_components/classList.min.js');
      }
      scriptLoader.run(js,cb,'pl-js-polyfill-insert');
    }
  })();
</script>

<script id="pl-js-insert-<?= $cacheBuster ?>">
  (function() {
    if (self != top) {
      var cb = '<?= $cacheBuster ?>';
      var js = [ { 'src': 'styleguide/bower_components/jwerty.min.js', 'dep': [ 'styleguide/js/patternlab-pattern.min.js' ] } ];
      scriptLoader.run(js,cb,'pl-js-insert');
    }
  })();
</script>

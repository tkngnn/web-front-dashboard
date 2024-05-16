<!-- JS Implementing Plugins -->
<script src="<?php echo($level);?>assets\js\vendor.min.js"></script>

<!-- JS Front -->
<script src="<?php echo($level);?>assets\js\theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function () {
      var mask = $.HSCore.components.HSMask.init($(this));
    });
  });
</script>

<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
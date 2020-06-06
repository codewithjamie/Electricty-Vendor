  <?php if(Auth::user()->userid == "1"): ?>
    <script type="text/javascript">
      window.location = "<?php echo e(url('/dashboard/admin')); ?>"; //here double curly bracket
    </script>
  <?php elseif(Auth::user()->userid == "2"): ?>
    <script type="text/javascript">
      window.location = "<?php echo e(url('/dashboard/user')); ?>"; //here double curly bracket
    </script>
  <?php elseif(Auth::user()->userid == "3"): ?>
    <script type="text/javascript">
      window.location = "<?php echo e(url('/dashboard/agent')); ?>"; //here double curly bracket
    </script>
  <?php endif; ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views//dashboard.blade.php ENDPATH**/ ?>
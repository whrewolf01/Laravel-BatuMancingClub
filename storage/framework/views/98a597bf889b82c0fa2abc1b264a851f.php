

<?php $__env->startSection('title'); ?>
Hapus Data Spot | Batu Mancing Club Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3>Hapus Data Spot</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href=<?php echo e(url('/spot/destroy/' . $spot->id_spot )); ?>>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/spot">
      No
    </a>
  </button>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\praktikum pemweb\BatuMancingClub\resources\views/spot/spot-hapus.blade.php ENDPATH**/ ?>
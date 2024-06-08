<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Ikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 100px;
        }

        input[type="text"] {
            width: 200px;
        }

        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
        <h2>Edit Data Lokasi dan Ikan</h2>
        <form action="<?php echo e(url('/spot/update/' . $spot->id_lokasi)); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field('put'); ?>
          <label for="lokasi">Lokasi</label>
          <input class="input" type="text" name="lokasi" id="lokasi" placeholder="Lokasi"
            value="<?php echo e(old('nama', $spot->lokasi)); ?>" />
          <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      
          <label for="ikan">Ikan</label>
          <input class="input" type="text" name="ikan" id="ikan" placeholder="Ikan"
            value="<?php echo e(old('ikan', $spot->ikan)); ?>" />
          <?php $__errorArgs = ['ikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      
          <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
            Edit
          </button>
        </form>
</body>
</html>
<?php /**PATH D:\praktikum pemweb\BatuMancingClub\resources\views/spot/spot-edit.blade.php ENDPATH**/ ?>
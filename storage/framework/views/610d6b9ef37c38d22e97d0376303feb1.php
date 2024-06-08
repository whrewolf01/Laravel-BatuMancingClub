<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Batu Mancing Club</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <header>
        <img src="<?php echo e(asset('assets/logoBMC.png')); ?>" alt="logo" width="200" />
        <h1 id="clubName">Batu Mancing Club</h1>
        <nav>
            <ul type="square" id="navigation">
                <li><a href="#" id="homeLink">Home</a></li>
                <li><a href="login.php" id="signUpLink">Sign Up</a></li>
                <li><a href="register.php" id="registerLink">Register</a></li>
                <li><a href="dashboard-info.php" id="infoLink">Info</a></li>
            </ul>
        </nav>
    </header>
<head>
<h2>Input Data Lokasi dan Ikan</h2>

<form action="<?php echo e(url('/spot/store')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <label for="lokasi">Lokasi</label>
  <input class="input" type="text" name="lokasi" id="lokasi" placeholder="Lokasi" value="<?php echo e(old('lokasi')); ?>" />
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
  <textarea class="input" name="ikan" id="ikan" placeholder="Ikan"><?php echo e(old('ikan')); ?></textarea>
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

  <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
    Simpan
  </button>
</form>
</body>
</html>
<?php /**PATH D:\praktikum pemweb\BatuMancingClub\resources\views/spot/spot-entry.blade.php ENDPATH**/ ?>
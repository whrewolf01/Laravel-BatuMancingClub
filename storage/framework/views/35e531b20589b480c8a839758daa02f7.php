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
                <li><a href="/dashboard" id="homeLink">Home</a></li>
                <li><a href="/home" id="signUpLink">Sign Up</a></li>
                <li><a href="/register" id="registerLink">Register</a></li>
                <li><a href="/info" id="infoLink">Info</a></li>
            </ul>
        </nav>
    </header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi dan Ikan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .logout-btn {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<h2>Data Spot dan Ikan</h2>
<div class="btn-container">
    <button onclick="window.location.href='/spot/tambah'">Input Data</button>
    <button onclick="window.location.href='/spot/cetak'">Cetak Data</button>
</div>
<table class="table-data">
    <thead>
      <tr>
          <th>No</th>
          <th scope="col" style="width: 15%">Lokasi</th>
          <th scope="col" style="width: 30%">Ikan</th>
          <th scope="col" style="width: 20%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $spot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no =>  $spot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($no +1); ?></td>
        <td><?php echo e($spot->lokasi); ?></td>
        <td><?php echo e($spot->ikan); ?></td>
        <td>
          <a class='btn-edit' href="/spot/edit/<?php echo e($spot->id_spot); ?>">Edit</a>
          |
          <a class='btn-delete' href="/spot/destroy/<?php echo e($spot->id_spot); ?>">Hapus</a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td colspan="5" align="center">Tidak ada data</td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
  
</body>
</html><?php /**PATH D:\praktikum pemweb\BatuMancingClub\resources\views/spot/spot.blade.php ENDPATH**/ ?>
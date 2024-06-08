<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Batu Mancing Club</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <img src="{{asset('assets/logoBMC.png')}}" alt="logo" width="200" />
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

<form action="{{ url('/spot/store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <label for="lokasi">Lokasi</label>
  <input class="input" type="text" name="lokasi" id="lokasi" placeholder="Lokasi" value="{{ old('lokasi') }}" />
  @error('lokasi')
  <p style="font-size: 10px; color: red">{{ $message }}</p>
  @enderror

  <label for="ikan">Ikan</label>
  <textarea class="input" name="ikan" id="ikan" placeholder="Ikan">{{ old('ikan') }}</textarea>
  @error('ikan')
  <p style="font-size: 10px; color: red">{{ $message }}</p>
  @enderror

  <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
    Simpan
  </button>
</form>
</body>
</html>

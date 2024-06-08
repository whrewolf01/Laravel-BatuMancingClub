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
        <form action="{{ url('/spot/update/' . $spot->id_lokasi) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <label for="lokasi">Lokasi</label>
          <input class="input" type="text" name="lokasi" id="lokasi" placeholder="Lokasi"
            value="{{ old('nama', $spot->lokasi) }}" />
          @error('lokasi')
          <p style="font-size: 10px; color: red">{{ $message }}</p>
          @enderror
      
          <label for="ikan">Ikan</label>
          <input class="input" type="text" name="ikan" id="ikan" placeholder="Ikan"
            value="{{ old('ikan', $spot->ikan) }}" />
          @error('ikan')
          <p style="font-size: 10px; color: red">{{ $message }}</p>
          @enderror
      
          <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
            Edit
          </button>
        </form>
</body>
</html>

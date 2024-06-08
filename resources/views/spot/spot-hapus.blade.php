@extends('layouts.app')

@section('title')
Hapus Data Spot | Batu Mancing Club Admin
@endsection

@section('content')
<h3>Hapus Data Spot</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/spot/destroy/' . $spot->id_spot ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/spot">
      No
    </a>
  </button>
</div>
@endsection

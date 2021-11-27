@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>{{ $title }}</h1>
    <form action="{{ route('inputan') }}" method="GET">
        <div class="form-group">
          <label for="namaproduk">Nama Produk</label>
          <input type="text" name="nama_produk" class="form-control" id="namaproduk">
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" name="harga" class="form-control" id="harga">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
      <hr>
      @if (isset($_GET['submit']))
          <p>Nama : {{ $nama_produk }}</p>
          <p>Harga : {{ $harga }}</p>
          Hasil : {{ $luas }}
      @endif
@endsection
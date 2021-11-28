@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>{{ $title }}</h1>
    <div class="row">
      <form action="{{ route('inputan') }}" method="GET">

        <div class="col">
          <div class="form-group">
            <label for="namaproduk">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="namaproduk">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="lebar">Lebar</label>
            <input type="number" name="lebar" class="form-control" id="lebar">
          </div>
          <div class="form-group">
            <label for="panjang">Panjang</label>
            <input type="number" name="panjang" class="form-control" id="panjang">
          </div>
        </div>
      
        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
      </form>
    </div>
    
      <hr>
      @if (isset($_GET['submit']))
          <p>Nama : {{ $nama_produk }}</p>
          <p>Harga : {{ $harga }}</p>
          <p>Luas Persegi Panjang : {{ $luas }}</p>
      @endif
@endsection
@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>{{ $title }}</h1>
    <form action="{{ route('luas-segitiga') }}" method="GET">
        <div class="form-group">
          <label for="namaproduk">Alas</label>
          <input type="text" name="alas" class="form-control" id="namaproduk">
        </div>
        <div class="form-group">
          <label for="tinggi">Tinggi</label>
          <input type="number" name="tinggi" class="form-control" id="tinggi">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
      <hr>
      @if (isset($_GET['submit']))
          <p>Alas : {{ $alas }}</p>
          <p>Tinggi : {{ $tinggi }}</p>
          <p>Hasil : {{ $luas }}</p>
      @endif
@endsection
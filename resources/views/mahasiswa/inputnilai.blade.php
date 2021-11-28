@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>{{ $title }}</h1>
    <form action="{{ route('mahasiswa.storenilai') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nilaiakhir">Nilai Akhir</label>
          <input type="number" name="nilai_akhir" class="form-control" id="nilaiakhir">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
      <hr>

@endsection
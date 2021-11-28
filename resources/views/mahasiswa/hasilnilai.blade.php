@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>Hasil Nilai Mahasiswa</h1>
    
    @if ($message = Session::get('hasilnya'))
        @php
            if($message == 'A') {
                $tipe = 'success';
            } else if($message == 'B'){
                $tipe = 'info';
            } else if($message == 'C') {
                $tipe = 'warning';
            } else if($message == 'D') {
                $tipe = 'danger';
            } else if($message == 'E') {
                $tipe = 'danger';
            }
        @endphp
        <div class="alert alert-{{ $tipe }} alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

@endsection

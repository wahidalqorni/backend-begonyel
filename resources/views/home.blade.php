@extends('layouts.master')

@section('content')
    {{-- body --}}
    <h1>{{ $title }}</h1>
    <img src="{{ URL::to('images/gambar1.jpg') }}" alt="" width="50%">
    <hr>
    <img src="{{ asset('images/gambar1.jpg') }}" alt="" width="50%">
    
@endsection


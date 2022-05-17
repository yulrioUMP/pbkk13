@extends('layouts.app')

@section('title')
    Ini halaman depan
@endsection

@section('content')
<div class="container">
    <h1>Hai, {{ $nama2 }}</h1>
    <h1>{{ $alamat }}</h1>
    <h1>{!! $alamat !!}</h1>

    @isset($nilai)
        @if($nilai>70)
            <h2>Lulus</h2>
        @elif ($nilai>50)
            <h2>Remedial</h2>
        @else
            <h2>Tidak Lulus</h2>
        @endif
    @endisset

    <ol>
    @foreach($produks as $produk)
        <li>{{$produk[0]}}-{{$produk[1]}}-{{$produk[2]}}</li> 
    @endforeach
    </ol>
</div>
@endsection
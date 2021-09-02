@extends('layouts/app')

@section('title', 'Rekomendasi Tanaman | CropSystem')

@section('container')


@foreach($data as $dt)

<a class="navbar-brand mx-5" href="">
    <i class="fas fa-fw fa-info-circle"> Tanaman yang direkomendasikan</i>
</a>
<div class="jumbotron text-black my-5 mx-5">
    <h1 class="display-4">{{$dt->name}}</h1>
    <p class="lead">Musim {{$dt->musim}}</p>
    <hr class="my-4">
    <p>{!! nl2br(e($dt->isi)) !!}</p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="{{ route('recommends.index') }}" role="button">Kembali</a>
    </p>
</div>
@endforeach





@endsection
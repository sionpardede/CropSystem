@extends('layouts/app')

@section('title', 'Hama Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Hama Tanaman
    </h2>
</x-slot>
<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('hamas.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Kembali ke list</a>
        </div>
        <div class="card-deck">
            <div class="card">

                <img class="card-img-top" src="/image/{{ $hama->image }}" alt="Card image cap">
            </div>
            <div class="card">

                <h3 class="card-title text-black mx-3 my-3">{{$hama->name}}</h3>
                <p class="card-text text-black mx-3 my-3">{!! nl2br(e($hama->detail)) !!}</p>
                <h5 class="card-text text-black mx-3 my-3">Pestisida</h5>
                <p class="card-text text-black mx-3 my-3">{!! nl2br(e($hama->pestisida)) !!}</p>
            </div>
        </div>
    </div>
</div>

@endsection
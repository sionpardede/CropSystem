@extends('layouts/app')

@section('title', 'Hama Tanaman | CropSystem')

@section('container')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Hamas Information') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block mb-8">
            @if(Auth::check() && Auth::user()->admin == 1)
            <a href="{{ route('hamas.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Hama Tanaman</a>
            @endif
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="row">

                            @foreach($hamas as $hama)
                            <div class="col-sm-3">
                                <div class="card my-3 mx-3">
                                    <img class="card-img-top" src="/image/{{ $hama->image }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-black text-center">{{$hama->name}}</h5>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('hamas.show', $hama->id) }}" class="card-link" type="button">Detail</a>

                                        @if(Auth::check() && Auth::user()->admin == 1)
                                        <a href="{{ route('hamas.edit', $hama->id) }}" class="card-link mr-4">Edit</a>

                                        <form class="inline-block" action="{{ route('hamas.destroy', $hama->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="card-link" value="Delete">
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
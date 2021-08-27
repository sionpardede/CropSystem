@extends('layouts/app')

@section('title', 'Rekomendasi Tanaman | CropSystem')

@section('container')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Hamas Information') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        @foreach($recommends as $recommend)

                        <section class="page-section my-3 mx-3" id="services">
                            <h2 class="text-center mt-3">Informasi Rekomendasi Sistem Rotasi Tanaman</h2>
                            <hr class="divider my-4" />

                            <div class="form-group ml-5 mr-5 mt-5">
                                <label for="musim">Musim</label>
                                <select class="form-control col-10" id="musim" name="musim">

                                    <option value="{{$recommend->musim}}">{{$recommend->musim}}</option>
                                </select>
                            </div>
                            <div class="form-group ml-5 mr-5 mt-1">
                                <label for="ph">PH Tanah</label>
                                <select class="form-control col-10" id="ph" name="ph">
                                    <option value="{{$recommend->ph}}">{{$recommend->ph}}</option>


                                </select>
                            </div>


                            <a href="{{ route('recommends.show', $recommend->id) }}" class="card-link" type="button">Rekomendasikan</a>

                        </section>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
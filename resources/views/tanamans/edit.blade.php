@extends('layouts/app')

@section('title', 'Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Tanaman
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('tanamans.update', $tanaman->id) }}">
                @csrf
                @method('put')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="jenisTanaman" class="block font-medium text-sm text-gray-700">Jenis Tanaman</label>
                        <input type="text" name="jenisTanaman" id="jenisTanaman" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jenisTanaman', $tanaman->jenisTanaman) }}" />
                        @error('jenisTanaman')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="caraTanam" class="block font-medium text-sm text-gray-700">Cara Menanam</label>
                        <textarea name="caraTanam" id="caraTanam" cols="30" rows="10" class="form-input rounded-md shadow-sm mt-1 block w-full" value=""><?= $tanaman['caraTanam'] ?>
                        </textarea>

                        @error('caraTanam')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="video" class="block font-medium text-sm text-gray-700">Video Cara Tanam</label>
                        <input type="text" name="video" id="video" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('video', $tanaman->video) }}" />
                        @error('video')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row px-4 py-3 bg-white">
                        <div class="col bg-white">
                            <label for="PH Tanah" class="block font-medium text-sm text-gray-700">PH tanah</label>
                            <input type="number" name="ph" id="ph" max="14" type="text" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('ph', $tanaman->ph) }}" />
                            <div class="small text">
                                Contoh : 5
                            </div>
                            @error('ph')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col bg-white">
                            <label for="Kelembaban Udara" class="block font-medium text-sm text-gray-700">Kelembaban Udara</label>
                            <input type="number" name="humidity" id="humidity" type="text" min="0" max="100" class="form-input rounded-md shadow-sm mt-1 " value="{{ old('humidity', $tanaman->humidity) }}" /> KH
                            <div class="small text">
                                Contoh : 50
                            </div>
                            @error('humidity')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="row px-4 py-3 bg-white">
                        <div class="col bg-white">
                            <label for="Suhu" class="block font-medium text-sm text-gray-700">Suhu</label>
                            <input type="number" name="temp" id="temp" type="text" min="0" max="200" class="form-input rounded-md shadow-sm mt-1 " value="{{ old('temp', $tanaman->temp) }}" /> &deg;C
                            <div class="small text">
                                Contoh : 28
                            </div>
                            @error('temp')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col bg-white">
                            <label for="Curah Hujan" class="block font-medium text-sm text-gray-700">Curah Hujan</label>
                            <input type="number" name="rainfall" id="rainfall" type="text" min="0" max="3000" class="form-input rounded-md shadow-sm mt-1 " value="{{ old('rainfall', $tanaman->rainfall) }}" /> mm
                            <div class="small text">
                                Contoh : 900
                            </div>
                            @error('rainfall')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="Kawasan Penanama" class="block font-medium text-sm text-gray-700">Kawasan Penanaman</label>
                        <select class="form-select rounded" id="land" name="land" value="{{ old('land', $tanaman->land) }}">
                            <option value="tinggi">Dataran Tinggi</option>
                            <option value="rendah">Dataran Rendah</option>
                        </select>
                        @error('rainfall')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
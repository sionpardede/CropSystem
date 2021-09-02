@extends('layouts/app')

@section('title', 'Jadwal Penanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tambah Jadwal Penanaman
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('jadwals.store') }}">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <input type="hidden" name="id_petani" id="id_petani" value="{{ Session::get('id') }}">
                        <label for="varietasTanaman" class="block font-medium text-sm text-gray-700">Varietas Tanaman</label>
                        <input type="text" name="jenis_tanaman" id="jenis_tanaman" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('jenis_tanaman', '') }}" />
                        @error('jenis_tanaman')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="px-4 py-1 bg-white sm:p-6">
                        <label for="pembibitan" class="block font-medium text-sm text-gray-700">Waktu Pembibitan</label>
                        <input type="date" name="pembibitan" id="pembibitan" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('pembibitan', '') }}" />
                        @error('pembibitan')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="penyemaian" class="block font-medium text-sm text-gray-700">Waktu Penyemaian</label>
                        <input type="date" name="penyemaian" id="penyemaian" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('penyemaian', '') }}" />
                        @error('penyemaian')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="panen" class="block font-medium text-sm text-gray-700">Waktu Panen</label>
                        <input type="date" name="panen" id="panen" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('panen', '') }}" />
                        @error('panen')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
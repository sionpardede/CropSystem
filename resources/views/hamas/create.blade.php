@extends('layouts/app')

@section('title', 'Hama Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tambah Informasi Hama Tanaman Baru
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada yang bermasalah dengan inputan anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('hamas.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="name" class="block font-medium text-sm text-gray-700">Nama Hama Tanaman</label>
                        <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name', '') }}" />
                        @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="detail" class="block font-medium text-sm text-gray-700">Detail</label>
                        <textarea name="detail" id="detail" cols="70" rows="10" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('detail', '') }}">
                        </textarea>
                    </div>

                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="pestisida" class="block font-medium text-sm text-gray-700">Pestisida</label>
                        <textarea name="pestisida" id="pestisida" cols="70" rows="10" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('pestisida', '') }}">
                        </textarea>
                    </div>

                    <div class="px-4 py-3 bg-white sm:p-6">
                        <label for="image" class="block font-medium text-sm text-gray-700">Gambar</label>
                        <input type="file" name="image" id="image" type="text" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('image', '') }}" />
                        @error('image')
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
@extends('layouts/app')

@section('title', 'Hama Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Hama Tanaman
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('hamas.update', $hama->id) }}">
                @csrf
                @method('put')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="name" class="block font-medium text-sm text-gray-700">Nama Hama Tanaman</label>
                        <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name', $hama->name) }}" />
                        @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="detail" class="block font-medium text-sm text-gray-700">Detail</label>
                        <textarea name="detail" id="detail" cols="30" rows="10" class="form-input rounded-md shadow-sm mt-1 block w-full" value=""> <?= $hama['detail'] ?>

                        </textarea>

                        @error('detail')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="pestisida" class="block font-medium text-sm text-gray-700">Pestisida</label>
                        <textarea name="pestisida" id="pestisida" cols="30" rows="10" class="form-input rounded-md shadow-sm mt-1 block w-full" value=""> <?= $hama['pestisida'] ?>

                        </textarea>

                        @error('pestisida')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="image" class="block font-medium text-sm text-gray-700">Gambar</label>
                        <input type="file" name="image" id="image" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        <img src="/image/{{ $hama->image}}" alt="">
                        @error('image')
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
@extends('layouts/app')

@section('title', 'Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tambah Tanaman Baru
    </h2>
</x-slot>

<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('tanamans.store') }}">
                @csrf

                <div class="sm:rounded-md">
                    <div class="px-4 py-3 sm:p-6">
                        <label for="id_kategori" class="block font-medium text-sm text-gray-700">Kategori
                            Tanaman</label>
                        <select class="form-select rounded" id="kategori" name="kategori">
                            <option value="Kacang-Kacangan">Kacang-Kacangan</option>
                            <option value="Daun-Daunan">Daun-Daunan</option>
                            <option value="Buah-Buahan">Buah-Buahan</option>
                            <option value="Umbi-Umbian">Umbi-Umbian</option>
                        </select>
                        @error('kategori')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-1 sm:p-6">
                        <label for="jenisTanaman" class="block font-medium text-sm text-gray-700">Nama
                            Tanaman</label>
                        <input type="text" name="jenisTanaman" id="jenisTanaman" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jenisTanaman', '') }}" />
                        @error('jenisTanaman')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="px-4 py-1 sm:p-6">
                        <label for="caraTanam" class="block font-medium text-sm text-gray-700 ">Cara Menanam</label>
                        <textarea name="caraTanam" id="caraTanam" cols="30" rows="10" class="form-input rounded-md-shadow-sm mt-1 block w-full" value="{{old('caraTanam', '') }}"></textarea>
                    </div>
                    <div class="px-4 py-1 sm:p-6">
                        <label for="video" class="block font-medium text-sm text-gray-700">Video Cara Tanam</label>
                        <input type="text" name="video" id="video" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('video', '') }}" />
                        @error('video')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <fieldset class="form-group border shadow overflow-hidden bg-white sm:rounded-md p-3">
                        <legend class="w-auto px-2 text-bold text-black">Kondisi Agroklimatis
                        </legend>
                        <div class="row px-4 py-3">
                            <div class="col ">
                                <label for="PH Tanah" class="block font-medium text-sm text-gray-700">PH
                                    tanah</label>
                                <input type="number" name="ph" id="ph" max="14" min="0" type="text" class="form-input rounded-md shadow-sm mt-1 block" value="{{ old('ph', '') }}" />
                                <div class="small text">
                                    Contoh : 5
                                </div>
                                @error('ph')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col ">
                                <label for="Kelembaban Udara" class="block font-medium text-sm text-gray-700">Kelembaban
                                    Udara</label>
                                <input type="number" name="humidity" id="humidity" type="text" min="0" max="100" class="form-input rounded-md shadow-sm mt-1" value="{{ old('humidity', '') }}" /> RH
                                <div class="small text">
                                    Contoh : 50
                                </div>
                                @error('humidity')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row px-4 py-1">
                            <div class="col ">
                                <label for="Suhu" class="block font-medium text-sm text-gray-700">Suhu</label>
                                <input type="number" name="temp" id="temp" type="text" min="0" max="200" class="form-input rounded-md shadow-sm mt-1" value="{{ old('temp', '') }}" />
                                &deg;C
                                <div class="small text">
                                    Contoh : 28
                                </div>
                                @error('temp')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="Curah Hujan" class="block font-medium text-sm text-gray-700">Curah
                                    Hujan</label>
                                <input type="number" name="rainfall" id="rainfall" type="text" min="0" max="3000" class="form-input rounded-md shadow-sm mt-1" value="{{ old('rainfall', '') }}" /> mm
                                <div class="small text">
                                    Contoh : 900

                                </div>
                                @error('rainfall')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:p-6">
                            <label for="Kawasan Penanama" class="block font-medium text-sm text-gray-700">Kawasan
                                Penanaman</label>
                            <select class="form-select rounded" id="land" name="land">
                                <option value="tinggi">Dataran Tinggi</option>
                                <option value="rendah">Dataran Rendah</option>
                            </select>
                            @error('rainfall')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </fieldset>
                    <!-- PUPUK -->
                    @csrf
                    <fieldset class="form-group border shadow overflow-hidden bg-white sm:rounded-md p-3">
                        <legend class="w-auto px-2 text-bold text-black">Pupuk
                        </legend>
                        <div class="sm:rounded-md">
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="area" class="block font-medium text-sm text-gray-700">Area</label>
                                <input type="text" id="jenis_tanaman" name="jenis_tanaman" value="">
                                @error('area')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Urea</label>
                                <input type="number" min="0" id="urea" name="urea"> Kg
                                @error('urea')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Zwavelzure
                                    Amonium (ZA)</label>
                                <input type="number" min="0" id="za" name="za"> Kg
                                @error('za')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Super
                                    Phosphate (SP-36)</label>
                                <input type="number" min="0" id="sp36" name="sp36"> Kg
                                @error('sp36')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Kalium
                                    Klorida (KCl)</label>
                                <input type="number" min="0" id="kcl" name="kcl"> Kg
                                @error('kcl')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Nitrogen
                                    Phospate Kalium (NPK Phonska)</label>
                                <input type="number" min="0" id="npk" name="npk"> Kg
                                @error('npk')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Kapur
                                    Karbonat (Dolomite)</label>
                                <input type="number" min="0" id="dolomite" name="dolomite"> Kg
                                @error('dolomite')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk Zwavelzure
                                    Kali (ZK)</label>
                                <input type="number" min="0" id="zk" name="zk"> Kg
                                @error('zk')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Organik</label>
                                <input type="number" min="0" id="organik" name="organik"> Kg
                                @error('organik')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Kandang</label>
                                <input type="number" min="0" id="kandang" name="kandang"> Kg
                                @error('kandang')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Hijau</label>
                                <input type="number" min="0" id="hijau" name="hijau"> Kg
                                @error('hijau')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Kompos</label>
                                <input type="number" min="0" id="kompos" name="kompos"> Kg
                                @error('kompos')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Hayati</label>
                                <input type="number" min="0" id="hayati" name="hayati"> Kg
                                @error('hayati')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-4 py-1 bg-white sm:p-6">
                                <label for="tipe" class="block font-medium text-sm text-gray-700">Pupuk
                                    Humus</label>
                                <input type="number" min="0" id="humus" name="humus"> Kg
                                @error('humus')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Create
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts/app')

@section('title', 'Tanaman | CropSystem')

@section('container')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detail Tanaman
    </h2>
</x-slot>
<div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <a href="{{ route('tanamans.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Kembali ke list</a>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    {{ $tanaman->id }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Jenis Tanaman
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    {{ $tanaman->jenisTanaman }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kondisi Agroclimatic
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    @if($tanaman->kategori == 'Kacang-Kacangan')
                                    <?php $i = 0 ?>
                                    @if($tanaman->ph < 5 || $tanaman->ph > 6.3)
                                        PH Tanah kurang sesuai (PH Tanah seharusnya lebih besar dari 5 dan lebih kecil dari 6.3)<br>
                                        <?php $i++ ?>
                                        @endif
                                        @if($tanaman->humidity < 65 || $tanaman->humidity > 75)
                                            Kelembaban udara kurang sesuai (Kelembaban seharusnya lebih besar dari 65 dan lebih kecil dari 75)<br>
                                            <?php $i++ ?>
                                            @endif
                                            @if($tanaman->temp < 28 || $tanaman->temp > 32)
                                                Suhu udara kurang sesuai (Suhu seharusnya lebih besar dari 28 dan lebih kecil dari 32)<br>
                                                <?php $i++ ?>
                                                @endif
                                                @if($tanaman->rainfall < 800 || $tanaman->rainfall > 1300)
                                                    Curah hujan udara kurang sesuai (Curah hujan seharusnya lebih besar dari 800 dan lebih kecil dari 1300)<br>
                                                    <?php $i++ ?>
                                                    @endif
                                                    @if($tanaman->land != 'tinggi')
                                                    Lahan penanaman udara kurang sesuai (Lahan yang cocok adalah lahan pada dataran tinggi)<br>
                                                    <?php $i++ ?>
                                                    @endif
                                                    <?php if ($i == 0) {
                                                        echo ('Bagus');
                                                    } ?>
                                                    @elseif($tanaman->kategori == 'Daun-Daunan')
                                                    <?php $i = 0 ?>
                                                    @if($tanaman->ph < 6 || $tanaman->ph > 7)
                                                        PH Tanah kurang sesuai (PH Tanah seharusnya lebih besar dari 6 dan lebih kecil dari 7)<br>
                                                        <?php $i++ ?>
                                                        @endif
                                                        @if($tanaman->humidity < 80 || $tanaman->humidity > 90)
                                                            Kelembaban udara kurang sesuai (Kelembaban seharusnya lebih besar dari 80 dan lebih kecil dari 90)<br>
                                                            <?php $i++ ?>
                                                            @endif
                                                            @if($tanaman->temp < 15 || $tanaman->temp > 21)
                                                                Suhu udara kurang sesuai (Kelembaban seharusnya lebih besar dari 15 dan lebih kecil dari 21)<br>
                                                                <?php $i++ ?>
                                                                @endif
                                                                @if($tanaman->rainfall < 1000 || $tanaman->rainfall > 1500)
                                                                    Curah hujan udara kurang sesuai (Kelembaban seharusnya lebih besar dari 1000 dan lebih kecil dari 1500)<br>
                                                                    <?php $i++ ?>
                                                                    @endif
                                                                    @if($tanaman->land != 'tinggi')
                                                                    Lahan penanaman udara kurang sesuai (Lahan yang cocok adalah lahan pada dataran tinggi)<br>
                                                                    <?php $i++ ?>
                                                                    @endif
                                                                    <?php if ($i == 0) {
                                                                        echo ('Bagus');
                                                                    } ?>
                                                                    @elseif($tanaman->kategori == 'Buah-Buahan')
                                                                    <?php $i = 0 ?>
                                                                    @if($tanaman->ph < 6 || $tanaman->ph > 7)
                                                                        PH Tanah kurang sesuai (PH Tanah seharusnya lebih besar dari 6 dan lebih kecil dari 7)<br>
                                                                        <?php $i++ ?>
                                                                        @endif
                                                                        @if($tanaman->humidity < 50 || $tanaman->humidity > 70)
                                                                            Kelembaban udara kurang sesuai (Kelembaban seharusnya lebih besar dari 50 dan lebih kecil dari 70)<br>
                                                                            <?php $i++ ?>
                                                                            @endif
                                                                            @if($tanaman->temp < 28 || $tanaman->temp > 30)
                                                                                Suhu udara kurang sesuai (Suhu seharusnya lebih besar dari 28 dan lebih kecil dari 30)<br>
                                                                                <?php $i++ ?>
                                                                                @endif
                                                                                @if($tanaman->rainfall < 1000 || $tanaman->rainfall > 1400)
                                                                                    Curah hujan udara kurang sesuai (Kelembaban seharusnya lebih besar dari 1000 dan lebih kecil dari 1400)<br>
                                                                                    <?php $i++ ?>
                                                                                    @endif
                                                                                    <?php if ($i == 0) {
                                                                                        echo ('Bagus');
                                                                                    } ?>
                                                                                    @elseif($tanaman->kategori == 'Umbi-Umbian')
                                                                                    <?php $i = 0 ?>
                                                                                    @if($tanaman->ph < 5 || $tanaman->ph > 7)
                                                                                        PH Tanah kurang sesuai (Kelembaban seharusnya lebih besar dari 5 dan lebih kecil dari 7)<br>
                                                                                        <?php $i++ ?>
                                                                                        @endif
                                                                                        @if($tanaman->humidity < 80 || $tanaman->humidity > 90)
                                                                                            Kelembaban udara kurang sesuai (Kelembaban seharusnya lebih besar dari 80 dan lebih kecil dari 90)<br>
                                                                                            <?php $i++ ?>
                                                                                            @endif
                                                                                            @if($tanaman->temp < 15 || $tanaman->temp > 20)
                                                                                                Suhu udara kurang sesuai (Kelembaban seharusnya lebih besar dari 15 dan lebih kecil dari 20)<br>
                                                                                                <?php $i++ ?>
                                                                                                @endif
                                                                                                @if($tanaman->rainfall < 1200 || $tanaman->rainfall > 1500)
                                                                                                    Curah hujan udara kurang sesuai (Kelembaban seharusnya lebih besar dari 1200 dan lebih kecil dari 1500)<br>
                                                                                                    <?php $i++ ?>
                                                                                                    @endif
                                                                                                    @if($tanaman->land != 'tinggi')
                                                                                                    Lahan penanaman udara kurang sesuai (Lahan yang cocok adalah lahan pada dataran tinggi)<br>
                                                                                                    <?php $i++ ?>
                                                                                                    @endif
                                                                                                    <?php if ($i == 0) {
                                                                                                        echo ('Bagus');
                                                                                                    } ?>
                                                                                                    @endif
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pupuk yang Dipakai
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    @if($tanaman->urea)
                                    - Pupuk urea {{$tanaman->urea}}kg<br>
                                    @endif
                                    @if($tanaman->za)
                                    - Pupuk za {{$tanaman->za}}kg<br>
                                    @endif
                                    @if($tanaman->sp36)
                                    - Pupuk sp36 {{$tanaman->sp36}}kg<br>
                                    @endif
                                    @if($tanaman->kcl)
                                    - Pupuk kcl {{$tanaman->kcl}}kg<br>
                                    @endif
                                    @if($tanaman->npk)
                                    - Pupuk npk {{$tanaman->npk}}kg<br>
                                    @endif
                                    @if($tanaman->dolomite)
                                    - Pupuk dolomite {{$tanaman->dolomite}}kg<br>
                                    @endif
                                    @if($tanaman->zk)
                                    - Pupuk zk {{$tanaman->zk}}kg<br>
                                    @endif
                                    @if($tanaman->organik)
                                    - Pupuk organik {{$tanaman->organik}}kg<br>
                                    @endif
                                    @if($tanaman->kandang)
                                    - Pupuk kandang {{$tanaman->kandang}}kg<br>
                                    @endif
                                    @if($tanaman->hijau)
                                    - Pupuk hijau {{$tanaman->hijau}}kg<br>
                                    @endif
                                    @if($tanaman->kompos)
                                    - Pupuk kompos {{$tanaman->kompos}}kg<br>
                                    @endif
                                    @if($tanaman->hayati)
                                    - Pupuk hayati {{$tanaman->hayati}}kg<br>
                                    @endif
                                    @if($tanaman->humus)
                                    - Pupuk humus {{$tanaman->humus}}kg<br>
                                    @endif
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cara Menanam
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    {!! nl2br(e($tanaman->caraTanam)) !!}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Video cara menanam
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    <a href="{{ $tanaman->video }}">
                                        {{ $tanaman->video }}
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
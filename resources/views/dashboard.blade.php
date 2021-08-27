@extends('layouts/app')

@section('title', 'Dashboard | CropSystem')

@section('container')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <!-- cabai -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="background-image: url(../../img/cabe.jpg); background-size: cover;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Perkebunan</div>
                            <div class="h5 mb-0 font-weight-bold text-yellow-100">Cabe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Padi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="background-image: url(../../img/padi.jpg); background-size: cover;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Pertanian</div>
                            <div class="h5 mb-0 font-weight-bold text-yellow-300">Padi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Semangka -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2" style="background-image: url(../../img/semangka.jpg); background-size: cover;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Perkebunan</div>
                            <div class="h5 mb-0 font-weight-bold text-yellow-100">Semangka</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kentang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2" style="background-image: url(../../img/kentang.jpg); background-size: cover;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Perkebunan</div>
                            <div class="h5 mb-0 font-weight-bold text-yellow-200">Kentang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::check() && Auth::user()->admin == 1)
    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Log Activity Farmer
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Farmer</th>
                                <th scope="col">Jenis Tanaman yang dikerjakan</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Tanggal pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 0;
                            ?>
                            <tr>
                                <th scope="row"><?php
                                                $number++;
                                                echo ($number);
                                                ?>
                                </th>
                                <td>
                                    @foreach($farmer as $farmers)
                                    @if($farmers->farmer == 1)
                                        {{$farmers->name}}
                                    @endif

                                    @endforeach
                                </td>
                                @foreach($date as $dates)
                                @if($dates->pembibitan <= $today && $today < $dates->panen )
                                    <td>
                                        {{$dates->jenis_tanaman}}
                                    </td>
                                    <?php $a = 1 ?>
                                    @if($dates->status == "belum dibibit")
                                    <td>
                                        Pembibitan
                                    </td>
                                    <td>
                                        {{$dates->pembibitan}} sampai {{$dates->penyemaian}} <small>({{(strtotime($dates->penyemaian)-strtotime($today))/ 86400}} Hari
                                            lagi)</small>
                                    </td>

                                    @elseif ($dates->status == "sudah dibibit" && ($dates->pembibitan <= $today && $today < $dates->panen))
                                        <td>
                                            Penyemaian
                                        </td>
                                        <td>
                                            {{$dates->penyemaian}} sampai {{$dates->panen}} <small>({{(strtotime($dates->panen)-strtotime($yesterday))/ 86400}} Hari lagi)</small>
                                        </td>

                                        @elseif ($dates->status == "sudah disemai" && ($dates->pembibitan <= $today && $today < $dates->panen))
                                            <td>
                                                Panen
                                            </td>
                                            <td>
                                                {{$dates->panen}} <small>({{(strtotime($dates->panen)-strtotime($today))/ 86400}} Hari
                                                    lagi)</small>
                                            </td>

                                            @endif
                                            @endif
                                            @endforeach
                            </tr>
                        </tbody>
                    </table>

                    @endif

                    @if(Auth::check() && Auth::user()->farmer == 1)

                    <div class="row">

                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Task @foreach($date as $dates)
                                        <td class="px-2 py-4 whitespace-nowrap">
                                            @if($dates->pembibitan <= $today && $today < $dates->panen )
                                                <a class="text-sm text-gray-900" href="{{url('/detail', $dates->jenis_tanaman)}}">({{$dates->jenis_tanaman}}
                                                    )</a>
                                                @endif
                                        </td>
                                        @endforeach
                                    </h6>
                                    <div class="text-xs font-weight-bold">
                                        <a href="{{ route('tanamans.index') }}">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    @foreach($date as $dates)
                                    <?php $a = 0 ?>
                                    @if($dates->pembibitan <= $today && $today < $dates->panen)
                                        <?php $a = 1 ?>
                                        @if($dates->status == "belum dibibit")
                                        <h3>Pembibitan</h3>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a class="text-sm text-gray-900">Pembibitan {{$dates->jenis_tanaman}}
                                                dimulai
                                                dari tanggal
                                                <strong> {{$dates->pembibitan}} </strong> sampai pada tanggal
                                                <strong> {{$dates->penyemaian}}
                                                    ({{(strtotime($dates->penyemaian)-strtotime($today))/ 86400}} Hari
                                                    lagi) </strong></a>
                                            <div class="m-0 alert alert-warning" role="alert">
                                                <strong>Warning! </strong>Pastikan anda sudah melakukan pembibitan
                                                terhadap
                                                tanaman <a href="{{url('/detail', $dates->jenis_tanaman)}}" class="alert-link">{{$dates->jenis_tanaman}}</a>.
                                                <br> Jika pembibitan sudah selesai, klik "Pembibitan telah dilakukan"
                                                <a class="float-right bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded" href="{{url('/changeStatus', $dates->id) }}">
                                                    Pembibitan telah dilakukan
                                                </a>
                                            </div>
                                            <a class="text-sm text-gray-900">Penyemaian akan dilakukan pada tanggal
                                                <strong>{{$dates->penyemaian}}
                                                    ({{(strtotime($dates->penyemaian)-strtotime($today))/ 86400}} Hari
                                                    lagi) </strong></a>
                                            @elseif ($dates->status == "sudah dibibit" && ($dates->pembibitan <= $today && $today < $dates->panen))
                                                <h3> Penyemaian </h3>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a class="text-sm text-gray-900">Penyemaian {{$dates->jenis_tanaman}}
                                                dimulai
                                                dari tanggal
                                                <strong> {{$dates->penyemaian}} </strong> sampai pada tanggal
                                                <strong> {{$dates->panen}}
                                                    ({{(strtotime($dates->panen)-strtotime($yesterday))/ 86400}} Hari
                                                    lagi) </strong></a>
                                            <div class="m-0 alert alert-warning" role="alert">

                                                <strong>Warning! </strong>Pastikan anda sudah melakukan penyemaian
                                                terhadap
                                                tanaman <a href="{{url('/detail', $dates->jenis_tanaman)}}" class="alert-link">{{$dates->jenis_tanaman}}</a>.
                                                <a class="float-right bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded" href="{{url('/changeStatus', $dates->id) }}">
                                                    Penyemaian sudah dilakukan
                                                </a>
                                            </div>
                                            @elseif ($dates->status == "sudah disemai" && ($dates->pembibitan <= $today && $today < $dates->panen))
                                                <h3> Panen </h3>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a class="text-sm text-gray-900">Panen {{$dates->jenis_tanaman}} akan
                                                dilakukan
                                                mulai tanggal
                                                <strong> {{$dates->panen}} </strong>
                                                ({{(strtotime($dates->panen)-strtotime($today))/ 86400}} Hari
                                                lagi)</a>
                                            <div class="m-0 alert alert-info" role="alert">

                                                <strong>Info! </strong>Klik "Lapor hasil panen" jika panen sudah selesai
                                                dilakukan.
                                                <a class="float-right bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded" href="{{ route('hasilpanens.create') }}">
                                                    Lapor hasil panen
                                                </a>
                                            </div>
                                        </td>
                                        @endif
                                        @endif
                                        @endforeach
                                        @if($a == 0)
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanaman yang
                                                    Selanjutnya Akan Ditanam
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{$dater->jenis_tanaman}}
                                                </div>
                                            </div>
                                        </div>
                                        @endif


                                </div>
                            </div>
                            @if($a != 0)
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanaman yang
                                                    Selanjutnya Akan Ditanam
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{$dater->jenis_tanaman}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    @endif

                    @endsection
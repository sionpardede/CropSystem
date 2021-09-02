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
                        <section class="page-section my-3 mx-3" id="services">
                            <h2 class="text-center my-5">Informasi Rekomendasi Sistem Rotasi Tanaman</h2>
                            <hr class="divider my-4" />

                            <div class="form-group ml-5 mr-5 mt-5">
                                <label for="musim">Musim</label>
                                <select class="form-control col-10" name="musim" id="musim">
                                    <option selected="false">Pilih Musim</option>
                                    @foreach($musim as $msm)
                                    <option value="{{ $msm->id}}">{{ $msm->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ml-5 mr-5 mt-1">
                                <label for="ph">PH Tanah</label>
                                <select class="form-control col-10" name="ph" id="ph">
                                    <option selected="false">Pilih ph tanah</option>

                                </select>
                            </div>

                            <button class="btn btn-primary mb-5 ml-5" type="submit" id="search" name="search">Rekomendasikan</button>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('select[name="musim"]').on('change', function() {
            var musimID = jQuery(this).val();
            if (musimID) {
                jQuery.ajax({
                    url: '/getPhs/' + musimID,
                    type: "get",
                    dataType: "json",
                    success: function(data) {
                        jQuery('select[name="ph"]').empty();
                        jQuery.each(data, function(key, value) {
                            $('select[name="ph"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="ph"]').empty();
            }
        });
    });
</script>

<script type="text/javascript">
    $("#search").on("click", function() {
        var link = document.getElementById("ph").value;

        $.ajax({
            url: window.location.href = "getData/" + link
        });
    });
</script>
@endsection

@section('scripts')


@endsection
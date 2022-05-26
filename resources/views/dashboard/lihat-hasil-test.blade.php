@extends('layouts.dashboard-layouts')

@section('title', 'Dashboard - Aplikasi Tes Buta Warna')

@push('css')

@endpush


@section('main-content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    {{-- <div class="row mb-2">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <img class="img" src="{{ asset('img') }}/eye1.jpg" alt="" width="65%">
                        </div>
                    </div> --}}

                    <h5 class="text-center">HASIL TEST</h5>
                    <p>
                        Informasi Hasil Test Buta Warna. <br />
                    </p>
                    <table class="table table-borderless">
                        <tbody>
                            <tr style="">
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Nama</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->login->login_nama }}</td>
                            </tr>
                            <tr>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Status</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->hasil_status }}</td>
                            </tr>
                            <tr>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Nilai</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->hasil_salah }} Error</td>
                            </tr>
                            <tr>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Waktu Test</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ date("d/m/Y", strtotime($data->hasil_waktu)) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <h5 class="">Keterangan : </h5>
                    <p>
                        {{ $data->hasil_keterangan }}<br />
                    </p>
                    {{-- <hr /> --}}

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    {{-- <img src="{{ asset('img') }}/{{ $data->hasil_gambar }}" alt="" class="img img-thumbnail" width="500px"> --}}
                    <img src="{{ asset('img') }}/gambar-keterangan.jpg" alt="" class="img img-thumbnail" width="500px">
                    {{-- <img src="{{ asset('public/img') }}/error{{ $data->hasil_salah }}.PNG" alt="" class="img img-fluid" width=""> --}}
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    Nama Lengkap <br />
                    Status Hasil <br />
                    Total Nilai
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    : {{ $data->login->login_nama }} <br />
                    : {{ $data->hasil_status }} <br />
                    : {{ $data->hasil_salah }} Error <br />
                </div>
            </div> --}}
        </div>
    </div>
@endsection


@push('css')

@endpush

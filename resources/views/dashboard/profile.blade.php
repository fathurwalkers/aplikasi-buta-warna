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

                    <h5 class="text-center">PROFILE PENGGUNA</h5>
                    <p>
                        Informasi Data Pengguna. <br />
                    </p>
                    <table class="table table-borderless">
                        <tbody>

                            <tr style="">
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Nama</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->login_nama }}</td>
                            </tr>

                            <tr style="">
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Email</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->login_email }}</td>
                            </tr>

                            <tr style="">
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">Username</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->login_username }}</td>
                            </tr>

                            <tr style="">
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">No. HP / Telepon</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;">:</td>
                                <td class="" style="padding-top:auto;padding-bottom:auto;padding-top:1px;padding-bottom:1px;"> {{ $data->login_telepon }}</td>
                            </tr>

                        </tbody>
                    </table>

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

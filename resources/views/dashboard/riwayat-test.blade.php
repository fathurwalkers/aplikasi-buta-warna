@extends('layouts.dashboard-layouts')

@section('title', 'Dashboard - Aplikasi Tes Buta Warna')

@push('css')

@endpush


@section('main-content')

@foreach ($data as $item)
    <div class="row mb-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">KODE TEST : {{ $item->hasil_kode }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Test : {{ date("d, M Y", strtotime($item->hasil_waktu)) }}</h6>
                    <p class="card-text">Status : {{ $item->hasil_status }}</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
                            <button onclick="location.href = '{{ route('lihat-hasil-test', $item->id) }}';" class="btn btn-md btn-info d-flex justify-content-end">Lihat</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection


@push('css')

@endpush

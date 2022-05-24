@extends('layouts.dashboard-layouts')

@section('title', 'Dashboard - Aplikasi Tes Buta Warna')

@push('css')

@endpush


@section('main-content')
    <div class="row row-cols-1  justify-content-center">

        <div class="col-10 mb-4 btn shadow ">
            <a href="{{ route('informasi') }}">
                <div class="card border-primary">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-primary btn-sm" >
                            <i class="bi bi-box-arrow-in-right" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold" style="font-size: 1rem; display: inline-block; margin-left: 40px;">INFORMASI</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="{{ route('test-buta-warna') }}">
                <div class="card border-warning  ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-warning btn-sm">
                            <i class="bi bi-list-stars text-light" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-warning" style=" font-size: 1rem; display: inline-block; margin-left: 40px;">MULAI TES</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="{{ route('tentang-aplikasi') }}">
                <div class="card border-success ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="bi bi-award" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-success" style="font-size: 1rem; display: inline-block; margin-left: 40px;">TENTANG APLIKASI</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            <a href="#">
                <div class="card border-info ">
                    <div class="card-body text-left">
                        <button type="button" class="btn btn-info btn-sm">
                            <i class="bi bi-star-fill" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-info" style="font-size: 1rem; display: inline-block; margin-left: 40px;">RIWAYAT TES</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-10 mb-4 btn shadow">
            {{-- <a href="#"> --}}
                <form action="{{ route('logout') }}" method="GET">
                    @csrf
                <div class="card border-danger ">
                    <div class="card-body text-left">
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="bi bi-activity" style="font-size: 1rem; display:inline-block;"></i>
                        </button>
                        <h6 class="card-title font-weight-bold text-danger" style="font-size: 1rem; display: inline-block; margin-left: 40px;">KELUAR</h6>
                    </div>
                </div>
                </form>
            {{-- </a> --}}
        </div>

    </div>
@endsection


@push('css')

@endpush

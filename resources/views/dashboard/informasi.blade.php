@extends('layouts.dashboard-layouts')

@section('title', 'Dashboard - Aplikasi Tes Buta Warna')

@push('css')

@endpush


@section('main-content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <img class="img" src="{{ asset('img') }}/eye1.jpg" alt="" width="65%">
                        </div>
                    </div>

                    <h5>Buta Warna</h5>
                    <p>
                        Buta warna adalah penglihatan warna-warna yang tidak sempurna. Buta warna juga dapat diartikan sebagai suatu kelainan penglihatan yang disebabkan ketidakmampuan sel-sel kerucut (cone cell) pada retina mata untuk menangkap suatu spektrum warna tertentu sehingga objek yang terlihat bukan warna yang sesungguhnya (Nina Karina, 2007).
                    </p>

                    <hr />

                    <h5>Penyebab Buta Warna</h5>
                    <p>
                        Pada umumnya, terjadinya buta warna disebabkan oleh adanya reseptor warna dalam retina mata yang kurang berfungsi secara normal (mal function). Pada dasarnya, di dalam retina mata kita terdapat tiga tipe atau jenis reseptor warna, yaitu merah, biru, dan hijau. Anomali warna terjadi sebagai hasil akibat kekurangan satu atau lebih dari reseptor warna tersebut (Andra, 2010).
                    </p>
                    <p>
                        Buta warna adalah kondisi yang diturunkan secara genetik. Dibawa oleh kromosom X pada perempuan, buta warna diturunkan kepada anak-anaknya. Ketika seseorang mengalami buta warna, mata mereka tidak mampu menghasilkan keseluruhan pigmen yang dibutuhkan untuk mata berfungsi dengan normal (Anonymous, 2011).
                    </p>
                    <p>
                        Penyebab lain buta warna adalah karena didapat. Hal ini biasanya terjadi ketika anak mengalami kerusakan retina atau cedera (trauma) pada otak yang menyebabkan pembengkakan di lobus occipital. Kerusakan akibat paparan sinar ultraviolet karena tidak menggunakan pelindung mata secara benar juga bisa menyebabkan buta warna (Anonymous, 2009).
                    </p>

                    <hr />

                    <h5>Pengetesan Buta Warna</h5>
                    <div class="row mb-2 mt-2">
                        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <img class="img" src="{{ asset('img') }}/munsell.jpg" alt="" width="80%">
                        </div>
                    </div>
                    <p>
                        Pengujian tes Farnsworth Munsell ini pun tidaklah sulit. Pasien diminta untuk menghafal urutan-urutan warna pada koin-koin yang sudah disiapkan. Lalu melakukan acak warna pada koin-koin warna tersebut. Setelah koin-koin warna tersebut diacak, maka pasien diminta untuk mengurutkan kembali warna-warna yang ada. Setelah selesai, maka kita bisa mencocokkan urutan warna yang telah disusun kembali oleh pasien.
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection


@push('css')

@endpush

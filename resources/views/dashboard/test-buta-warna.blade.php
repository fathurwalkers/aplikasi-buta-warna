@extends('layouts.dashboard-layouts')

@section('title', 'Dashboard - Aplikasi Tes Buta Warna')

@push('css')
<style>
    .red{
        background-color:red;
    }
    .blue{
        background-color:blue;
    }
    .gray{
        background:lightgray;
    }
    .box{
        float:left;
        border-radius: 8px;
        border: 2px solid lightgray;
        margin: 1px;
        width:30px;
        height:30px;
        border-radius:2px;
        background:white;
    }
</style>
@endpush

@section('header-content')
    <p class="text-center" id="p">Test buta Warna</p>
@endsection

@section('main-content')
    <div class="row row-cols-1 justify-content-center mx-auto mb-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            {{-- <div class="box red" data-warna="red"></div>
            <div class="box blue" data-warna="blue"></div>
            <div class="box gray" data-warna="lightgray"></div> --}}
            {{-- @dd($acak_warna) --}}

            <div id="elemendefault1" class="box" data-id="1" data-warna="1" style="background:lightgray;"></div>
            @foreach($acak_warna as $item)
                <div id="elemendefault2" class="box" data-id="{{ $item[1] }}" data-warna="{{ $item[1] }}" style="background:{{ $item[0] }};"></div>
            @endforeach

            {{-- <div id="elemendefault1" class="box" data-warna="1" style="background:lightgray;"></div>
            <div id="elemendefault2" class="box" data-warna="2" style="background:rgb(108,129,100);"></div>
            <div id="elemendefault3" class="box" data-warna="3" style="background:rgb(59,134,144);"></div>
            <div id="elemendefault4" class="box" data-warna="4" style="background:rgb(143,111,164);"></div>
            <div id="elemendefault5" class="box" data-warna="5" style="background:rgb(144,118,96);"></div>
            <div id="elemendefault6" class="box" data-warna="6" style="background:rgb(88,132,115);"></div>
            <div id="elemendefault7" class="box" data-warna="7" style="background:rgb(156,109,137);"></div>
            <div id="elemendefault8" class="box" data-warna="8" style="background:rgb(57,133,156);"></div>
            <div id="elemendefault9" class="box" data-warna="9" style="background:rgb(159,109,124);"></div>
            <div id="elemendefault10" class="box" data-warna="10" style="background:rgb(128,115,178);"></div>
            <div id="elemendefault11" class="box" data-warna="11" style="background:rgb(59,132,167);"></div>
            <div id="elemendefault12" class="box" data-warna="12" style="background:rgb(146,112,153);"></div>
            <div id="elemendefault13" class="box" data-warna="13" style="background:rgb(131,123,93);"></div>
            <div id="elemendefault14" class="box" data-warna="14" style="background:rgb(53,131,180);"></div>
            <div id="elemendefault15" class="box" data-warna="15" style="background:rgb(63,135,130);"></div>
            <div id="elemendefault16" class="box" data-warna="16" style="background:rgb(158,110,111);"></div> --}}
        </div>
    </div>
    <div class="row row-cols-1 justify-content-center mx-auto mb-4">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="elemendefault17" class="box" data-id="0" data-warna="1" style="background:rgb(55,129,193);"></div>
            <div id="elemendefault18" class="box" data-id="0" data-warna="0" onclick="" style="background:white"></div>
            <div id="elemendefault19" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault20" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault21" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault22" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault23" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault24" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault25" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault26" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault27" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault28" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault29" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault30" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault31" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
            <div id="elemendefault32" class="box" data-id="0" data-warna="0" onclick="" style="background:white;"></div>
        </div>
    </div>
    <form action="" method="POST">
        @csrf
        <div class="row row-cols-1 d-flex justify-content-center mx-auto my-2">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center mx-auto">
                <button id="buttonhasil" class="btn btn-success d-flex justify-content-center mx-auto">READY!</button>
            </div>
        </div>
    </form>

@endsection


@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            let arrayHasil = new Array();
            let pallete=document.querySelectorAll('.box');
            var arrayResult = ['1'];
            let arrayBoxKosong = [17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32];
            let arrayJawaban = [1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
            let ambilid = 0;
            let ambilwarna = 0;
            let ambilbg = 0;
            pallete.forEach(e => {
                e.addEventListener("click",function(e){
                    let idbox=e.target.dataset.id;
                    let warna=e.target.dataset.warna;
                    let bgstyle=e.target.style.background;
                    if(warna > 0) {
                        ambilid = idbox;
                        ambilwarna = warna;
                        ambilbg = bgstyle;
                    }
                    else {
                        arrayResult.push(ambilid);
                        console.log(arrayResult);

                        e.target.dataset.id = ambilid;
                        e.target.dataset.warna = ambilwarna;
                        e.target.style.background = ambilbg;
                        ambilwarna = 0;
                        ambilbg = 0;
                        ambilid = 0;
                    }
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name=_token]').val()
                }
            });
            $("#buttonhasil").click(function(a) {
                a.preventDefault();
                let _token   = $('[name=_token]').val()
                let jsonparsearray = JSON.stringify(arrayResult);
                for (let i = 0; i < arrayBoxKosong.length; i++) {
                    let idtiapbox = "#elemendefault"+arrayBoxKosong[i];
                    let getbox = $(idtiapbox).data("warna");
                    console.log(idtiapbox);
                    console.log(getbox);
                    arrayHasil.push(getbox);
                }
                var benar = 0;
                var salah = 0;
                for (let j = 0; j < 16; j++) {
                    if (arrayHasil[j] == arrayJawaban[j]) {
                        benar++;
                    } else {
                        salah++;
                    }
                }
                var totalnilai=(benar/16)*100;
                console.log("TOTAL BENAR");
                console.log(totalnilai);
                console.log("Benar");
                console.log(benar);
                console.log("Salah");
                console.log(salah);
                $.ajax({
                    type: "POST",
                    url: "{{route('proses-hasil')}}",
                    dataType: 'JSON',
                    data: {
                        data: totalnilai,
                        _token: _token
                    },
                    success: function(data) {
                        console.log(data);
                        alert("success");
                    }
                });
                console.log(totalnilai);
                console.log(totalnilai);
                console.log(totalnilai);
            });
        });
    </script>
@endpush

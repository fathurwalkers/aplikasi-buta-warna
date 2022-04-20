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
            <div id="elemendefault17" class="box" data-id="0" data-warna="0" style="background:rgb(55,129,193);"></div>
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
    <div class="row row-cols-1 d-flex justify-content-center mx-auto my-2">
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center mx-auto">
            <button id="Next" class="btn btn-success d-flex justify-content-center mx-auto">READY!</button>
        </div>
    </div>

@endsection


@push('js')
    <script type="text/javascript" charset="utf-8">
        let pallete=document.querySelectorAll('.box');
        let ambilid = 0;
        let ambilwarna = 0;
        let ambilbg = 0;
        pallete.forEach(e => {
            e.addEventListener("click",function(e){
                let idbox=e.target.dataset.id;
                let warna=e.target.dataset.warna;
                let bgstyle=e.target.style.background;
                if(warna > 0) {
                    ambilid = e.target.dataset.id;
                    ambilwarna = warna;
                    ambilbg = bgstyle;
                    console.log("ambil ada isi nya!");
                } else {
                    // boxterpilih.style.color = "white";
                    // boxterpilih.dataset.warna = 0;
                    // boxterpilih.dataset.id = 0;

                    e.target.dataset.id = ambilid;
                    e.target.dataset.warna = ambilwarna;
                    e.target.style.background = ambilbg;
                    ambilwarna = 0;
                    ambilbg = 0;
                }
                console.log(warna);
                console.log(bgstyle);
                console.log(ambilwarna);
                console.log(ambilbg);
            });
        });
    </script>
@endpush

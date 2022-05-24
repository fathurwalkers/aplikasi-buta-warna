<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;


class ClientController extends Controller
{
    public function informasi()
    {
        return view('dashboard.informasi');
    }

    public function tentang_aplikasi()
    {
        return view('dashboard.tentang-aplikasi');
    }

    public function test_buta_warna()
    {
        $array_warna = [
            ["rgb(53, 131, 180)", 2],
            ["rgb(59, 132, 167)", 3],
            ["rgb(57, 133, 156)", 4],
            ["rgb(59, 134, 144)", 5],
            ["rgb(63, 135, 130)", 6],
            ["rgb(88, 132, 115)", 7],
            ["rgb(108, 129, 100)", 8],
            ["rgb(131, 123, 93)", 9],
            ["rgb(144, 118, 96)", 10],
            ["rgb(158, 110, 111)", 11],
            ["rgb(159, 109, 124)", 12],
            ["rgb(156, 109, 137)", 13],
            ["rgb(146, 112, 153)", 14],
            ["rgb(143, 111, 164)", 15],
            ["rgb(128, 115, 178)", 16],
        ];
        $acak_warna = Arr::shuffle($array_warna);
        return view('dashboard.test-buta-warna', [
            'acak_warna' => $acak_warna
        ]);
    }

    public function proses_hasil(Request $request)
    {
        $data = $request->data;
        echo "SUCCESS!";
        dump(intval($data));
    }

    public function get_proses_hasil($hasil, $benar, $salah)
    {
        $session_users = session('data_login');
        $users = Login::find($session_users->id);
        $id_user = $users->id;
        $result_hasil = $hasil;
        $result_benar = intval($benar);
        $result_salah = intval($salah);

        if ($result_salah == 0) {
            $hasil_gambar = "error" . $result_salah . ".png";
            $hasil_status = "Normal";
            $hasil_keterangan = "Hasil Normal.";
        }
        if ($result_salah == 1) {
            $hasil_gambar = "error" . $result_salah . ".png";
            $hasil_status = "Normal";
            $hasil_keterangan = "Hasil Normal.";
        }
        if ($result_salah == 2) {
            $hasil_gambar = "error" . $result_salah . ".png";
            $hasil_status = "Normal denga Kesalahan Minor";
            $hasil_keterangan = "Hasil Normal dengan kesalahan Minor";
        }
        if ($result_salah >= 3) {
            $hasil_gambar = "error" . $result_salah . ".png";
            $hasil_status = "Defiensi Penglihatan Warna";
            $hasil_keterangan = "Defiensi Penglihatan Warna";
        }

        $random_str = Str::random(5);
        $hasil_kode = "HSL" . strtoupper($random_str);
        $hasil = new Hasil;
        $save_hasil = $hasil->create([
            "hasil_gambar" => $hasil_gambar,
            "hasil_kode" => $hasil_kode,
            "hasil_status" => $hasil_status,
            "hasil_nama_pengguna" => $users->login_nama,
            "hasil_total_nilai" => $result_hasil,
            "hasil_benar" => $result_benar,
            "hasil_salah" => $result_salah,
            "hasil_waktu" => now(),
            "hasil_keterangan" => $hasil_keterangan,
            "login_id" => intval($id_user),
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $save_hasil->save();
        $data = Hasil::find($save_hasil->id);
        return view('dashboard.hasil-test', [
            'data' => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;


class ClientController extends Controller
{
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
        $data = $request->all();
        $data2 = $request->data;
        echo "SUCCESS!";
        dump($data2);
        dump($data);
        // die;
        return redirect()->route('login');
    }
}

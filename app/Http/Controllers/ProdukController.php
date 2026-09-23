<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private function dataProduk()
    {
        return [
            [ 'nama_produk' => 'ASUS ROG Strix G15','harga'=> '12000000'
            ],
            [ 'nama_produk' => 'Corsair K70 RGB','harga'=> '2500000'
            ],
            [ 'nama_produk' => 'Fantech Maxfit61','harga'=> '350000'
            ],

        ];

        }
        public function index()
        {
            $produks= $this->dataProduk();
            return view('produk.index', compact('produks'));
    }
}

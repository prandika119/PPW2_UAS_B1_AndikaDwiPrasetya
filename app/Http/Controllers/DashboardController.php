<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi_count = Transaksi::count();
        $omzet = Transaksi::sum('total_harga');
        $jml_item = Transaksi::sum('bayar');
        return view('dashboard', compact('transaksi_count', 'omzet', 'jml_item'));
    }
}

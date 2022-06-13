<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $products = Transaction::with('details.product')->find($id);

        if($products)
            return ResponseFormatter::success($products, "Data Transaksi berhasil di ambil");
        else    
            return ResponseFormatter::error(null,"Data Transaksi tidak ditemukan", 404);
    }
}

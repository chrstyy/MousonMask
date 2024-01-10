<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DetailPesanan;
use App\Models\Menu;

class CartController extends Controller
{
    public function index()
    {
        // Mendapatkan semua item dalam keranjang pengguna saat ini
        $user = Auth::user();
        $customer = $user->customer;
        $order = $customer->orders()->where('status', 'cart')->first();

        if (!$order) {
            // Jika tidak ada pesanan dalam keranjang, redirect ke halaman menu
            return redirect()->route('menu.index')->with('error', 'Keranjang belanja kosong.');
        }

        $detailPesanan = $order->detailPesanan;

        return view('cart.index', compact('order', 'detailPesanan'));
    }

    public function addToCart(Request $request, $idMenu)
    {
        // Mendapatkan atau membuat pesanan dalam keranjang pengguna saat ini
        $user = Auth::user();
        $customer = $user->customer;
        $order = $customer->orders()->where('status', 'cart')->first();

        if (!$order) {
            $order = $customer->orders()->create(['status' => 'cart']);
        }

        // Menambahkan item ke pesanan dalam keranjang
        $menu = Menu::findOrFail($idMenu);
        $jumlah = $request->input('jumlah', 1);

        $detailPesanan = DetailPesanan::where('id_order', $order->id_order)
            ->where('id_menu', $menu->id_menu)
            ->first();

        if ($detailPesanan) {
            // Jika item sudah ada dalam pesanan, tambahkan jumlah
            $detailPesanan->jumlah += $jumlah;
            $detailPesanan->total_harga += $menu->harga * $jumlah;
            $detailPesanan->save();
        } else {
            // Jika item belum ada dalam pesanan, buat detail pesanan baru
            $order->detailPesanan()->create([
                'id_menu' => $menu->id_menu,
                'jumlah' => $jumlah,
                'total_harga' => $menu->harga * $jumlah,
            ]);
        }

        // Dapatkan ulang view untuk dirender kembali dengan data yang diperbarui
        return $this->index();
    }

    public function checkout()
    {
        // Mendapatkan pesanan dalam keranjang pengguna saat ini
        $user = Auth::user();
        $customer = $user->customer;
        $order = $customer->orders()->where('status', 'cart')->first();

        if (!$order || $order->detailPesanan->isEmpty()) {
            // Jika tidak ada pesanan dalam keranjang atau keranjang kosong, redirect ke halaman menu
            return redirect()->route('menu.index')->with('error', 'Keranjang belanja kosong.');
        }

        // Menghitung total harga pesanan
        $totalHarga = $order->detailPesanan->sum('total_harga');

        return view('cart.checkout', compact('order', 'totalHarga'));
    }
}

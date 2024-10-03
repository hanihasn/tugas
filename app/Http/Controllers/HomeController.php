<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        // Buat array berisi data buku
        $buku = [
            ['judul' => 'London Love Strory', 'pengarang' => ' Tisa TS', 'penerbit' => ' Loveable', 'tahun' => 2015],
            ['judul' => 'Dilan 1990', 'pengarang' => 'Pidi Baiq', 'penerbit' => 'Pastel Books', 'tahun' => 2014],
            ['judul' => 'Dear Nathan', 'pengarang' => 'Erisca Febriani ', 'penerbit' => 'Best Media', 'tahun' => 2016],
            ['judul' => 'Bukan Cinta Monyet', 'pengarang' => 'Purnama Teduh', 'penerbit' => ' Laksana', 'tahun' => 2018],
            ['judul' => 'Kamis yang Manis', 'pengarang' => 'John Steinbeck', 'penerbit' => 'Basabasi', 'tahun' => 2019],
            ['judul' => 'Angin Pertama', 'pengarang' => 'Kim Al Ghozali AM', 'penerbit' => 'Basabasi', 'tahun' => 2020],
            ['judul' => 'Asteroid dan Namamu', 'pengarang' => 'Galeh Pramudianto', 'penerbit' => 'Basabasi', 'tahun' => 2019],
            ['judul' => 'Romeo Juliet', 'pengarang' => 'William Shakespeare', 'penerbit' => ' Buku Bijak', 'tahun' => 2020],
        ];

        // Mengirimkan data ke view dengan compact
        return view('home', compact('buku'));

    }
    public function form(Request $request) {
        // Ambil data message dari request
        $dataMessage = $request->message;

        // Simpan data ke session
        $request->session()->put('message', $dataMessage);

        // Redirect ke halaman home
        return redirect('/buku');
    }

    public function store()
    {
        $Product = new Product();
        $Product->nama = "Laptop";
        $Product->harga = 10000;
        $Product->stok = 10;
        $Product->deskripsi = "Laptop murah";
        $Product->save();
        return ("data sukses dikirim");
    }

    public function store2()
    {
        $Product = new Product();
        $Product->nama = "Laptop Asus";
        $Product->harga = 100000;
        $Product->stok = 10;
        $Product->deskripsi = "Laptop murah";
        $Product->save();
        return ("data sukses dikirim");
    }

    public function store33()
    {
        $Product = new Product();
        $Product->nama = "Laptop Lenovo";
        $Product->harga = 1000011;
        $Product->stok = 155;
        $Product->deskripsi = "Laptop murah lagi lagi";
        $Product->save();
        return ("data sukses dikirim");
    }

    public function show()
    {
        $Products = Product::Paginate(4);
        return view("tableProduct", compact("Products"));
    }

    public function edit($id) {
        $Product = Product::findOrFail($id);

        return view("editProduct",compact("Product"));
    }

    public function update(Request $request, $id) {
        $Product = Product::findOrFail($id);

        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');
    }

    public function destroy($id) {
        $Product = Product::findOrFail($id);
        $Product->delete();

        return redirect('/show');
    }


}
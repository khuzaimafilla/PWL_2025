<?php

namespace App\Http\Controllers; //namespace untuk mengindikasi controller

use App\Models\Item;//import model item
use Illuminate\Http\Request;//import request untuk form

class ItemController extends Controller//deklarasi class ItemController yg mewarisi Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//menampilkan semua data item dari database
    {
        $items = Item::all(); //mengambil semua data item dari tabel items menggunakan metode all()
        return view('index', compact('items')); //mengembalikan tampilan (view) items.index, dan mengirimkan data $items ke view tersebut menggunakan fungsi compact('items').
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //membuat / menambahkan item baru
    {
        return view('create'); //mengembalikan tampilan (view) untuk membuat item baru, yaitu items.create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //untuk menyimpan data
    {
        $request->validate([ //memvalidasi input dari pengguna. Di sini, kolom name dan description wajib diisi (required).
            'name' => 'required', 
            'description' => 'required', 
        ]);

        //Item::create($request->all());
        //return redirect()->route('items.index');

        //Hanya masukkan atribut yang diizinkan
        Item::create($request->only(['name', 'description'])); // item baru dibuat menggunakan metode create() dengan hanya atribut name dan description yang diperbolehkan untuk diisi. Fungsi only() memastikan hanya data yang valid yang dikirimkan.
        return redirect()->route('items.index')->with('success', 'Item added successfully.'); //kembali ke index page dengan output text success dan item added successfully
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)//menampilkan detail salah satu item yang sudah ada
    {
        return view('show', compact('item')); //mengembalikan tampilan (view) items.show, dan mengirimkan data item yang diminta melalui parameter $item. Ini akan menampilkan informasi detail dari item yang dipilih.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)//mengubah detail dari item yang sudah ada
    {
        return view('edit', compact('item')); //mengembalikan tampilan (view) items.edit, dan mengirimkan data item yang akan diedit melalui parameter $item.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)//mengupload perubahan yang sudah dilakukan pada data
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]); //memastikan name dan description wajib diisi.

        //Item::create($request->all());
        //return redirect()->route('items.index');
        //Hanya masukkan atribut yang diizinkan
         $item->update($request->only(['name', 'description'])); //memperbarui data item yang sudah ada dengan atribut name dan description yang diterima dari form
        return redirect()->route('items.index')->with('success', 'Item updated successfully.'); //kembali ke index page dengan output text success dan item updated successfully
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)//menghapus item yang sudah ada dari database
    {
        //return redirect()->route('items.index');
        $item->delete(); //menghapus item yang dipilih dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); //kembali ke index page dengan output text success dan item deleted successfully
    }
}

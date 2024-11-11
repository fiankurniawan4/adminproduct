<?php

namespace App\Livewire\Forms\product;

use App\Models\Product;
use Livewire\Form;

class EditProduct extends Form
{
    public $id;
    public $nama = '';
    public $harga = 0;
    public $stok = 0;
    public $kategori_id = 0;

    protected $rules = [
        'nama' => 'required|string|unique:products,nama',
        'harga' => 'required|numeric|regex:/^[0-9]+$/',
        'stok' => 'required|integer|min:0',
        'kategori_id' => 'required|exists:kategoris,id',
    ];

    public function store() {
        $this->validate();
        $harga = (int) $this->harga;
        if($this->kategori_id === 0) {
            return false;
        }

        $product = Product::find($this->id);
        $product->nama = $this->nama;
        $product->harga = $harga;
        $product->stok = $this->stok;
        $product->kategori_id = $this->kategori_id;
        $product->save();

        return $product;
    }
}

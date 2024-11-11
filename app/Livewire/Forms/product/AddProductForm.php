<?php

namespace App\Livewire\Forms\product;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddProductForm extends Form
{
    public string $nama = '';
    public int $harga = 1000;
    public int $stok = 0;
    public $kategori_id = 0;

    protected $rules = [
        'nama' => 'required|string|unique:products,nama',
        'harga' => 'required|numeric|regex:/^[0-9]+$/',
        'stok' => 'required|integer|min:1',
        'kategori_id' => 'required|exists:kategoris,id',
    ];

    public function store() {
        $this->validate();
        $harga = (int) $this->harga;
        if($this->kategori_id === 0) {
            return false;
        }
        $product = Product::create([
            'nama' => $this->nama,
            'harga' => $harga,
            'stok' => $this->stok,
            'kategori_id' => $this->kategori_id,
        ]);

        return $product;
    }
}

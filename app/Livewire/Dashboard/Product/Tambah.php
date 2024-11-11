<?php

namespace App\Livewire\Dashboard\Product;

use Livewire\Component;
use App\Livewire\Forms\product\AddProductForm;
use App\Models\Kategori;

class Tambah extends Component
{
    public AddProductForm $addProduct;

    public function save() {
        $product = $this->addProduct->store();
        $this->dispatch('addProduct', $product);
        return redirect()->route('dashboard.product.index');
    }
    
    public function render()
    {
        $kategori = Kategori::all();
        return view('livewire.dashboard.product.tambah', ['kategoris' => $kategori]);
    }
}

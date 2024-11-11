<?php

namespace App\Livewire\Dashboard\Product;

use App\Livewire\Forms\product\EditProduct;
use App\Models\Kategori;
use App\Models\Product;
use Livewire\Component;

class Edit extends Component
{  
    public EditProduct $editProduct;
    public $id;

    public function mount($id) {
        $this->id = $id;
        $product = Product::find($this->id);
        if($product) {
            $this->editProduct->id = $product->id;
            $this->editProduct->nama = $product->nama;
            $this->editProduct->harga = $product->harga;
            $this->editProduct->stok = $product->stok;
            $this->editProduct->kategori_id = $product->kategori_id;
        }
    }

    public function edit() {
        if(!$this->id) {
            return false;
        }

        $products = $this->editProduct->store();
        $this->dispatch('addProduct', $products);
        return redirect()->route('dashboard.product.index');
    }

    public function render()
    {
        $kategori = Kategori::all();
        return view('livewire.dashboard.product.edit', ['kategoris' => $kategori]);
    }
}

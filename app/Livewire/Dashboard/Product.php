<?php

namespace App\Livewire\Dashboard;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    protected $listeners = ['addProduct'];

    #[\Livewire\Attributes\On('addProduct')]
    public function updateList($product)
    {
    }

    public function delete($id) {
        $deleted = ModelsProduct::destroy($id);
        $this->dispatch('addProduct', $deleted);
    }

    public function render()
    {
        $product = ModelsProduct::paginate(5);
        return view('livewire.dashboard.product', ['products' => $product]);
    }
}

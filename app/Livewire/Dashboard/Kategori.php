<?php

namespace App\Livewire\Dashboard;

use App\Models\Kategori as ModelsKategori;
use Livewire\Component;
use Livewire\WithPagination;

class Kategori extends Component
{
    use WithPagination;
    protected $listeners = ['addKategori'];

    #[\Livewire\Attributes\On('addKategori')]
    public function updateList($kategori)
    {
    }

    public function delete($id) {
        $deleted = ModelsKategori::destroy($id);
        $this->dispatch('addKategori', $deleted);
    }

    public function render()
    {
        $kategori = ModelsKategori::paginate(5);
        return view('livewire.dashboard.kategori', ['kategoris' => $kategori]);
    }
}

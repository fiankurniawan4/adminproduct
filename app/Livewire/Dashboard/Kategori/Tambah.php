<?php

namespace App\Livewire\Dashboard\Kategori;

use App\Livewire\Forms\AddKategoriForm;
use Livewire\Component;

class Tambah extends Component
{
    public AddKategoriForm $addKategori;

    public function save() {
        $kategori = $this->addKategori->store();
        $this->dispatch('addKategori', $kategori);
        return redirect()->route('dashboard.kategori.index');
    }
    
    public function render()
    {
        return view('livewire.dashboard.kategori.tambah');
    }
}

<?php

namespace App\Livewire\Dashboard\Kategori;

use App\Livewire\Forms\kategori\EditKategori;
use App\Models\Kategori;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public EditKategori $editKategori;

    public function mount($id) {
        $this->id = $id;
        $kategori = Kategori::find($id);
        if($kategori) {
            $this->editKategori->id = $kategori->id;
            $this->editKategori->nama = $kategori->nama;
        }
    }

    public function edit() {
        $edit = $this->editKategori->store();
        $this->dispatch('addKategori', $edit);
        return redirect()->route('dashboard.kategori.index');
    }

    public function render()
    {
        return view('livewire.dashboard.kategori.edit');
    }
}

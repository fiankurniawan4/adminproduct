<?php

namespace App\Livewire\Forms\kategori;

use App\Models\Kategori;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EditKategori extends Form
{
    public $id;
    public string $nama = '';

    protected $rules = [
        'nama' => 'required|string|unique:kategoris,nama'
    ];

    public function store() {
        $this->validate();
        $kategori = Kategori::find($this->id);
        $kategori->nama = $this->nama;
        $kategori->save();

        return $kategori;
    }
}

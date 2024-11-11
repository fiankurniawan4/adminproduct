<?php

namespace App\Livewire\Forms\kategori;

use App\Models\Kategori;
use Livewire\Form;

class AddKategoriForm extends Form
{
    public string $nama = '';
    protected $rules = [
        'nama' => 'required|string|unique:kategoris,nama'
    ];

    public function store() {
        $this->validate();
        $kategori = Kategori::create([
            'nama' => $this->nama
        ]);

        return $kategori;
    }
}

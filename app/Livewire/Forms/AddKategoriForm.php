<?php

namespace App\Livewire\Forms;

use App\Models\Kategori;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddKategoriForm extends Form
{
    public string $nama = '';
    protected $rules = [
        'nama' => 'required|string'
    ];

    public function store() {
        $this->validate();
        $kategori = Kategori::create([
            'nama' => $this->nama
        ]);

        return $kategori;
    }
}

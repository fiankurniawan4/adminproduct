<div>
    <form wire:submit='edit'>
        <div class="flex flex-col gap-2 mb-2">
            <span for="nama">Masukkan Nama Kategori</span>
            <input wire:model='editKategori.nama' type="text" id="nama" placeholder="Nama Kategori..." class="form-input" required />
            @error('editKategori.nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <button type="submit" class="btn btn-primary mt-6">Submit</button>
        </div>
    </form>
</div>

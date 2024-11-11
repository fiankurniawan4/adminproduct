<div>
    <form wire:submit='edit'>
        <div class="flex flex-col gap-2 mb-2">
            <span for="nama">Masukkan Nama Product</span>
            <input type="text" wire:model='editProduct.nama' id="nama" placeholder="Nama Product..." class="form-input" required />
            @error('editProduct.nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="harga">Masukkan Harga Product</span>
            <input type="number" wire:model='editProduct.harga' min="1000" id="harga" placeholder="Harga Product..." class="form-input"
                required />
            @error('editProduct.harga')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="stok">Masukkan Stok Product</span>
            <input type="number" wire:model='editProduct.stok' min="0" id="stok" placeholder="Stok Product..." class="form-input"
                required />
            @error('editProduct.stok')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="stok">Pilih Kategori Product</span>
            <select wire:model='editProduct.kategori_id' class="form-select form-select-lg text-white-dark">
                <option selected disabled value="0">Pilih Kategori</option>
                @foreach ($kategoris as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <button type="submit" class="mt-6 btn btn-primary">Submit</button>
        </div>
    </form>
</div>

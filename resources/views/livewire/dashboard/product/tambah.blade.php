<div>
    <form wire:submit='save'>
        <div class="flex flex-col gap-2 mb-2">
            <span for="nama">Masukkan Nama Product</span>
            <input wire:model='addProduct.nama' type="text" id="nama" placeholder="Nama Product..." class="form-input" required />
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="harga">Masukkan Harga Product</span>
            <input wire:model='addProduct.harga' type="number" min="1000" id="harga" placeholder="Harga Product..." class="form-input"
                required />
            @error('harga')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="stok">Masukkan Stok Product</span>
            <input wire:model='addProduct.stok' type="number" min="0" id="stok" placeholder="Stok Product..." class="form-input"
                required />
            @error('stok')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <span for="stok">Pilih Kategori Product</span>
            <select wire:model='addProduct.kategori_id' class="form-select form-select-lg text-white-dark">
                <option selected disabled value="0">Pilih Kategori</option>
                @foreach ($kategoris as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <button type="submit" class="btn btn-primary mt-6">Submit</button>
        </div>
    </form>
</div>

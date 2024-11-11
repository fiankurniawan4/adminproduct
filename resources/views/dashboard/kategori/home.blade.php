<x-app-layout>
    <div class="fixed z-50 bottom-6 ltr:right-6 rtl:left-6">
        <a href="{{route('dashboard.kategori.add')}}"
            class="btn rounded-full p-2 bg-[#fafafa] dark:bg-success dark:text-white">
            <span>Tambah Kategori</span>
        </a>
    </div>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <span>Kategori</span>
    </ul>
    <div class="pt-5">
        @livewire('dashboard.kategori')
        <div class="mt-4">
            {{-- {{ $products->links() }} --}}
        </div>
    </div>
</x-app-layout>

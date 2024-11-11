<x-app-layout>
    <div class="fixed z-50 bottom-6 ltr:right-6 rtl:left-6">
        <a href="{{route('dashboard.product.add')}}"
            class="btn rounded-full p-2 bg-[#fafafa] dark:bg-success dark:text-white">
            <span>Tambah Product</span>
        </a>
    </div>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <span>Product</span>
    </ul>
    <div class="pt-5">
        @livewire('dashboard.product')
        
    </div>
</x-app-layout>

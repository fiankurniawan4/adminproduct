<x-app-layout>
    <div class="pt-5">
        <div class="flex flex-col gap-2">
            <span class="text-2xl dark:text-white-light">Edit Product</span>
            @livewire('dashboard.product.edit', ['id' => request()->route('id')])
        </div>
    </div>
</x-app-layout>
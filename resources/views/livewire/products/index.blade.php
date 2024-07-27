<div>
    <x-slot name="header">
       Product
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'products.create' })"
    class="flex mb-10 justify-right">
       Create Product
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:products.table />
        </div>
    </div>
</div>

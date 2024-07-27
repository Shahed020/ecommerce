<div>
    <x-slot name="header">
       Category
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'categories.create' })"
    class="flex mb-10 justify-right">
       Create Category
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:categories.table />
        </div>
    </div>
</div>

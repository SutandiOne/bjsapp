<x-slot name="header">
    <div class="flex">

        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peramalan Klaim BPJS') }}
        </h2>
    </div>

</x-slot>

<div class="py-12">
    <div class="flex flex max-w-7xl mx-auto sm:px-6 lg:px-8 space-x-6">
        <div class="flex-1 flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <h1 class="text-2xl mb-4">Ramalan Yang Disimpan</h1>
            <livewire:forecast-table />

        </div>
        <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 w-1/4">
            <h1 class="text-2xl mb-4">Form Peramalan</h1>
            <div>
                @if (session()->has('message'))
                    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-2 shadow-md mb-4"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div>
                    <x-jet-label for="tahun" value="Tahun" />
                    <select name="tahun" wire:model="tahun"
                        class="block mt-1 w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value=''>Pilih Tahun Klaim</option>
                        @foreach ($klaim as $item)
                            <option value={{ $item->tahun }}>{{ $item->tahun }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <x-jet-label for="tahun" value="Kategori Rawat" />
                    <select name="kategori" wire:model="kategori"
                        class="block mt-1 w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value=''>Pilih Kategori Klaim</option>

                        <option value='rrj'>Klaim Rawat Jalan</option>
                        <option value='rij'>Klaim Inap Jalan</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-6">

                    <x-jet-button wire:click="forecasting()" wire:loading.attr="disabled" class="ml-4 bg-blue-800">
                        {{ __('Tampilkan') }}
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>

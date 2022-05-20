<x-slot name="header">
    <div class="flex">
        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klaim Data') }}
        </h2>
        <a href="{{ route('klaim.chart') }}">Lihat Chart</a>
    </div>

</x-slot>

<div class="py-12">
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex space-x-2 mb-4 print:hidden">
            <div class="flex-1">
                @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-2 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <a href="{{ route('klaim.form') }}"
                class="bg-blue-800 text-white inline-flex items-center px-4 py-2 rounded-md text-sm tracking-widest hover:bg-blue-700 active:bg-blue-900">Tambah</a>
            <button wire:click='exports' wire:loading.attr="disabled"
                class="bg-green-800 text-white inline-flex items-center px-4 py-2 rounded-md text-sm tracking-widest hover:bg-green-700 active:bg-green-900">Export
                Excel</button>
            <button onclick="window.print()"
                class="bg-gray-800 text-white inline-flex items-center px-4 py-2 rounded-md text-sm tracking-widest hover:bg-gray-700 active:bg-gray-900">Print</button>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <h1 class="hidden print:block text-2xl tracking-widest font-bold font-mono mb-6">Data Klaim BPJS Samarinda
            </h1>
            <livewire:klaim-table />
            <span class="hidden print:block float-right"><?= date('l, d-m-Y  h:i:s a') ?></span>
        </div>
    </div>
</div>

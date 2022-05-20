<x-slot name="header">
    <div class="flex">

        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peramalan Klaim') }}
        </h2>
        <a href="{{ route('forcast.chart') }}">Lihat Grafik Ramalan</a>

    </div>

</x-slot>

<div class="py-12">

    <div class="flex-row flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 md:space-x-4 md:flex-row">
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
            <button onclick="window.print()"
                class="bg-gray-800 text-white inline-flex items-center px-4 py-2 rounded-md text-sm tracking-widest hover:bg-gray-700 active:bg-gray-900">Print</button>
        </div>
        <div class="flex-1 flex flex-col bg-white shadow-lg overflow-hidden sm:rounded-lg p-5 mb-6">
            {{-- <livewire:forcast-chart /> --}}
            <h1 class="hidden print:block text-2xl tracking-widest font-bold font-mono mb-6">Data Ramalan Klaim BPJS
                Samarinda
            </h1>
            <livewire:forecast-table />
            <span class="hidden print:block float-right"><?= date('l, d-m-Y  h:i:s a') ?></span>


        </div>
        {{-- <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 md:w-1/4">
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
                    <x-jet-label for="tahun" value="Tahun yang bisa diramal" />
                    <select name="tahun" wire:model="tahun"
                        class="block mt-1 w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value=''>Pilih Tahun Klaim</option>
                        @foreach ($klaim as $item)
                            @if ($loop->first)
                                <option value={{ $item->tahun + 1 }}>{{ $item->tahun + 1 }}</option>
                            @endif
                            <option value={{ $item->tahun }}>{{ $item->tahun }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <x-jet-label for="kategori" value="Kategori Rawat" />
                    <select name="kategori" wire:model="kategori"
                        class="block mt-1 w-full border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value=''>Pilih Kategori Klaim</option>

                        <option value='rawat_jalan_jiwa'>Klaim Rawat Jalan</option>
                        <option value='rawat_inap_jiwa'>Klaim Inap Jalan</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-6">

                    <x-jet-button wire:click="forecasting()" wire:loading.attr="disabled" class="ml-4 bg-blue-800">
                        {{ __('Tampilkan') }}
                    </x-jet-button>
                </div>
            </div>
        </div> --}}
    </div>
</div>

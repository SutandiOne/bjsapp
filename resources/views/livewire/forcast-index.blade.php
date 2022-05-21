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
        <div class=" bg-white shadow-lg overflow-hidden sm:rounded-lg p-5 mb-6">
            <h1 class="hidden print:block text-2xl tracking-widest font-bold font-mono mb-6">Data Ramalan Klaim BPJS
                Samarinda
            </h1>
            <livewire:forecast-table />
            <span class="hidden print:block float-right"><?= date('l, d-m-Y  h:i:s a') ?></span>
        </div>
    </div>
</div>

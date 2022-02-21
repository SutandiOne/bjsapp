<x-slot name="header">
    <div class="flex">

        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Peramalan') }}
        </h2>
        <a href="{{ route('forcast.index') }}">Kembali</a>
    </div>

</x-slot>

<div class="py-12">
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            {{ $tahun }} {{ $rawat }} {{ $jiwa }}
        </div>
    </div>
</div>

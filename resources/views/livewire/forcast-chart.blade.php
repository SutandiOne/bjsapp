<x-slot name="header">
    <div class="flex">

        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Peramalan') }}
        </h2>
        <a href="{{ route('forcast.index') }}">Kembali</a>
    </div>

</x-slot>


<div class="py-6">
    <div class="flex-row flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 md:space-x-4 md:flex-row">
        <div class="flex-1 flex flex-col overflow-hidden sm:rounded-lg p-5 mb-6">
            @if ($klaim_count != 0)
                {{-- <div class="shadow rounded p-4 border bg-white" style="height: 32rem;">
                    <livewire:livewire-line-chart key="{{ $lineChartModel->reactiveKey() }}" :line-chart-model="$lineChartModel" />
                </div> --}}
                <div class="shadow rounded p-4 border bg-white mt-8" style="height: 32rem;">
                    <livewire:livewire-line-chart key="{{ $lineChartModel1->reactiveKey() }}" :line-chart-model="$lineChartModel1" />
                </div>
            @else
                <h1 class="bg-white text-center text-4xl p-6 font-mono"><b class="text-red-600">!</b>
                    Belum ada data
                    yang diramalan
                </h1>
            @endif

        </div>
    </div>
</div>

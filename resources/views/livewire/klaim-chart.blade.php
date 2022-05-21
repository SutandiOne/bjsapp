<x-slot name="header">
    <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Klaim Chart') }}
    </h2>

</x-slot>
<div class="py-12">
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        <div class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-4">
            <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}" :column-chart-model="$columnChartModel" />
            </div>
            <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}" :pie-chart-model="$pieChartModel" />
            </div>
        </div>

    </div>
</div>

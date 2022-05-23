@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('tahun')))
    <x-livewire-tables::table.cell>
        {{ $row->tahun }}
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_jiwa')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_jiwa ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif
{{-- @if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_s')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_s ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_s2')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_s2 ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif --}}
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_forecast')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_forecast ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_inap_jiwa')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_inap_jiwa ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif
{{-- @if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_inap_s')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_s ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_inap_s2')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_s2 ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif --}}
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_inap_forecast')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_inap_forecast ?: '-' }} Jiwa
    </x-livewire-tables::table.cell>
@endif

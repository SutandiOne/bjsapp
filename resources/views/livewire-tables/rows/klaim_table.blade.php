@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('tahun')))
    <x-livewire-tables::table.cell>
        {{ $row->tahun }}
    </x-livewire-tables::table.cell>
@endif
{{-- @if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_jiwa')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_jiwa }} Jiwa
    </x-livewire-tables::table.cell>
@endif --}}
{{-- @if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_s')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_s }} Jiwa
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_jalan_forecast')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_jalan_forecast }} Jiwa
    </x-livewire-tables::table.cell>
@endif --}}
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('rawat_inap_jiwa')))
    <x-livewire-tables::table.cell>
        {{ $row->rawat_inap_jiwa }} Jiwa
    </x-livewire-tables::table.cell>
@endif
@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('aksi')))
    <x-livewire-tables::table.cell>
        @if ($last == $row->tahun)
            <div class="space-x-2 text-center">

                <a href="{{ route('klaim.form', $row->tahun) }}"
                    class="text-yellow-800 font-bold tracking-wide hover:text-yellow-900 border p-2 border-yellow-800 rounded-sm">Ubah</a>
                <a wire:click="delete({{ $row->tahun }})"
                    onclick="confirm('Apakah anda yakin ingin menghapus data ini?') || event.stopImmediatePropagation()"
                    class="text-red-800 font-bold tracking-wide hover:text-red-900 border p-2 border-red-800 rounded-sm cursor-pointer">Hapus</a>
            </div>
        @endif
    </x-livewire-tables::table.cell>
@endif

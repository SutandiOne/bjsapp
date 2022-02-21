<x-livewire-tables::table.cell>
    {{ $row->created_at }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ $row->start_year }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ $row->forecast_year }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <a href="{{ route('klaim.form', $row->start_year) }}"
        class="text-teal-800 font-bold tracking-wide hover:text-teal-900 border p-2 border-teal-800 rounded-sm">Ubah</a>

</x-livewire-tables::table.cell>

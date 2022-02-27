<x-livewire-tables::table.cell>
    {{ $row->created_at }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ $row->tahun_mulai }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ $row->tahun_ramalan }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <a href="{{ route('test') }}"
        class="text-teal-800 font-bold tracking-wide hover:text-teal-900 border p-2 border-teal-800 rounded-sm mr-2">Lihat</a>
    <a href=""
        class="text-teal-800 font-bold tracking-wide hover:text-blue-900 border p-2 border-blue-800 rounded-sm">Laporan</a>

</x-livewire-tables::table.cell>

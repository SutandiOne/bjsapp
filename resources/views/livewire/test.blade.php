<x-slot name="header">
    <div class="flex">
        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permalan Klaim BPJS') }}
        </h2>
        <a href="{{ route('forcast.index') }}">Kembali</a>
    </div>
</x-slot>

{{-- <div class="py-12">
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <h1 class="text-2xl mb-4">Kategori Jalan</h1>

            <span>Total Jiwa : {{ $total_jiwa }}, Total Data : {{ $total_data }}</span>

            <table>
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Jumlah Jiwa (Y)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($klaims as $item)
                        <tr>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->rawat_jalan_jiwa }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
<div class="py-12">
    <div class="flex flex-col max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <h1 class="text-2xl text-center font-bold">Hasil Peramalan</h1>
            <h1 class="text-xl mb-4 text-center">Kategori Klaim Rawat Jalan</h1>

            <div class=" flex flex-col shadow-md rounded-lg">
                <ul class="flex border border-gray-300">
                    <li class="p-2 text-md bg-gray-200 w-48 font-bold"> Tahun</li>
                    <li class="p-2 text-md  flex-1 tracking-wide">2020</li>
                </ul>
                <ul class="flex border border-gray-300">
                    <li class="p-2 text-md bg-gray-200 w-48 font-bold">Jumlah Jiwa</li>
                    <li class="p-2 text-md  flex-1 tracking-wide">232,854</li>
                </ul>
                <ul class="flex border border-gray-300">
                    <li class="p-2 text-md bg-gray-200 w-48 font-bold"> Tahun Ramalan</li>
                    <li class="p-2 text-md  flex-1 tracking-wide">2021</li>
                </ul>
                <ul class="flex border border-gray-300">
                    <li class="p-2 text-md bg-gray-200 w-48 font-bold">Ramalan Jiwa</li>
                    <li class="p-2 text-md  flex-1 tracking-wide">522,421</li>
                </ul>


            </div>
            <div class="flex items-center justify-end mt-6">

                <x-jet-button class="ml-4 bg-blue-800">
                    {{ __('Simpan') }}
                </x-jet-button>
            </div>

        </div>
    </div>
</div>

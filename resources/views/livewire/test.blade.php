<x-slot name="header">
    <div class="flex">
        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Aplikasi') }}
        </h2>
        <a href="{{ route('dashboard') }}">Kembali</a>
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
            <h1 class="text-2xl text-center font-bold">Aplikasi Peramalan Klaim BPJS</h1>
            <div class="flex space-x-4 mt-6">
                <img src="{{ asset('assets/img/unmul-logo.png') }}" alt="" class="flex w-24">
                <div class="flex flex-col">
                    <p>
                        Aplikasi ini dibuat dengan tujuan untuk mengetahui dan menganalisa metode exponential
                        smoothing pada peramalan klaim BPJS kota Samarinda. </p>
                </div>
            </div>
        </div>
    </div>
</div>

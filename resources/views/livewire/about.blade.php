<x-slot name="header">
    <div class="flex">
        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Aplikasi') }}
        </h2>
        <a href="{{ route('dashboard') }}">Kembali</a>
    </div>
</x-slot>


<div class="py-12">
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div>
                <h1 class="text-2xl text-center font-bold">Aplikasi Peramalan Klaim BPJS Samarinda</h1>
                <div class="flex space-x-4 mt-2 mb-2">
                    {{-- <img src="{{ asset('assets/img/unmul-logo.png') }}" alt="" class="flex w-24"> --}}
                    <div class="flex flex-col text-md">
                        <p>
                            Sistem Aplikasi peramalan klaim BPJS ini di bangun untuk memudahkan pihak BPJS dalam
                            meramalkan atau memprediksi jumlah klaim pada periode berikutnya. Berfungsi untuk mengelola
                            data nyata (real) sekaligus meramalkannya seperti rawat Jalan dan inap. fitur lainya
                            terdapat fitur Print dan Grafik agar memudahkan melihat dan membacanya. Metode yang di
                            gunakan adalah Metode Exponential Smoothing (Double Exponential Smoothing) dengan alpha 0,4.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card flex flex-row space-x-2">
                <div class="flex flex-1/2 w-full">
                    <div class="w-full flex flex-col">

                        <div
                            class=" bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-4">
                                <div class="text-gray-900 font-bold text-xl mb-2 text-mono">Dosen Pembimbing I</div>
                                <table class="w-full text-left">
                                    <tbody>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                Nama
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                Zainal Arifin, S.Kom, M.Kom
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                NIP
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                197701032005011003
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                Email
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                zainal.arifin@unmul.ac.id
                                            </td>
                                        </tr>
                                        <tr class="bg-white text-xs">
                                            <th class="px-2 py-4" colspan="3">
                                                <span class="p-1 px-2 bg-blue-100 text-blue-800 rounded-full">Sistem
                                                    Informasi</span>
                                                <span class="p-1 px-2 bg-blue-100 text-blue-800 rounded-full">Data
                                                    Science</span>
                                                <span
                                                    class="p-1 px-2 bg-blue-100 text-blue-800 rounded-full">Intelligent
                                                    System</span>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-1">
                                <div class="text-gray-900 font-bold text-xl mb-2 text-mono">Dosen Pembimbing II</div>
                                <table class="w-full  text-left">
                                    <tbody>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                Nama
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                Dr. Ir. Hamdani, ST, M.Cs &nbsp;&nbsp;
                                            </td>
                                        </tr>

                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                NIP
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                197906062005011006
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">
                                                Email
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                hamdani@unmul.ac.id
                                            </td>
                                        </tr>
                                        <tr class="bg-white text-xs">
                                            <th class="px-2 py-4" colspan="3">
                                                <span class="p-1 px-2 bg-blue-100 text-blue-800 rounded-full">Sistem
                                                    Cerdas</span>
                                                <span class="p-1 px-2 bg-blue-100 text-blue-800 rounded-full">DSS/GDSS
                                                </span>

                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="flex flex-1/2 w-full">
                    <div class=" w-full">
                        <div
                            class=" bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-2">
                                <div class="text-gray-900 font-bold text-xl mb-2 text-mono">Profil Pengembang Aplikasi
                                </div>
                                <table class="w-full  text-left">
                                    <tbody>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row"
                                                class="px-2 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                Nama
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                Salehudin
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row"
                                                class="px-2 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                NIM
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                1507055040
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row"
                                                class="px-2 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                Prodi
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                Informatika
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b text-md">
                                            <th scope="row"
                                                class="px-2 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                Email
                                            </th>
                                            <td class="px-2 py-2">
                                                :
                                            </td>
                                            <td class="py-2">
                                                Coc199602@gmail.com
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

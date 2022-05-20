<x-slot name="header">
    <div class="flex">

        <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klaim Form') }}
        </h2>
        <a href="{{ route('klaim.index') }}">Kembali</a>
    </div>

</x-slot>

<div class="py-12">
    <div class="flex flex-col max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <h1 class="text-2xl mb-4">Data Klaim BPJS</h1>
            <form>
                <div>
                    <x-jet-label for="tahun" value="Tahun" />
                    <x-jet-input wire:model.defer="tahun" id="tahun" class="block mt-1 w-full" type="number" name="tahun"
                        required autofocus />
                    @error('tahun')
                        <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4 hidden">
                    <x-jet-label for="rjj" value="{{ __('Rawat Jalan Jiwa') }}" />
                    <x-jet-input wire:model.defer="rawat_jalan_jiwa" id="rjj" class="block mt-1 w-full" type="number"
                        name="rjj" required />
                    @error('rawat_jalan_jiwa')
                        <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="rij" value="{{ __('Rawat Inap Jiwa') }}" />
                    <x-jet-input wire:model="rawat_inap_jiwa" id="rij" class="block mt-1 w-full" type="number"
                        name="rij" required />
                    @error('rawat_inap_jiwa')
                        <span class="text-red-600 error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-6">
                    <x-jet-button wire:click.prevent="store()" wire:loading.attr="disabled" class="ml-4 bg-blue-800">
                        {{ __('Simpan') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</div>

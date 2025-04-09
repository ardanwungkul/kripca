<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Periode') }}
        </h2>
    </x-slot>
    <div class="bg-gray-800 text-white p-5 rounded-lg shadow-lg">
        <form action="{{ route('periode.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="text-sm max-w-xl mx-auto space-y-3">
                <div>
                    <label for="tanggal" class="block mb-1">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="text-sm rounded-lg w-full bg-gray-700 shadow-lg">
                </div>
                <div class="flex items-center justify-between">
                    <a href="{{ route('periode.index') }}"
                        class="bg-gray-700 rounded-lg px-5 py-2 text-sm shadow-lg border border-gray-600">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-gray-700 rounded-lg px-5 py-2 text-sm shadow-lg border border-gray-600">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

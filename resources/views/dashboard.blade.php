<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Periode') }}
        </h2>
    </x-slot>

    <div class="bg-gray-800 text-white p-5 rounded-lg shadow-lg">
        <div>
            <a href="{{ route('periode.create') }}"
                class="bg-gray-700 rounded-lg px-5 py-2 text-sm shadow-lg border border-gray-600">Tambah
                Periode</a>
            <table id="datatable" class="relative overflow-hidden rounded-lg text-sm shadow-lg">
                <thead class="bg-gray-700">
                    <tr>
                        <td>Tanggal</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class="bg-gray-600"></tbody>
            </table>
        </div>
    </div>
</x-app-layout>
<script type="module">
    $(document).ready(function() {
        $('#datatable').DataTable({
            searching: false,
            info: false,
            lengthChange: false,
            paging: false
        });
    });
</script>

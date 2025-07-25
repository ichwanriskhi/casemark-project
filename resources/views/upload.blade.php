@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-6">
    <h1 class="text-3xl font-bold mb-4">EXCEL UPLOAD</h1>
    <button class="bg-blue-900 text-white px-6 py-2 rounded mb-4 w-40 flex items-center gap-2"><span>Upload</span><svg
            xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                d='M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5m0 0l5 5m-5-5v12' />
        </svg></button>
    <h2 class="text-xl font-semibold mb-2">Preview Data</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
        <div class="bg-white rounded-xl p-6 shadow flex flex-col gap-2">
            <div class="flex justify-between"><span class="font-semibold">Destination</span><span>:</span></div>
            <div class="flex justify-between"><span class="font-semibold">Order No.</span><span>:</span></div>
            <div class="flex justify-between"><span class="font-semibold">Prod Month</span><span>:</span></div>
        </div>
        <div class="bg-white rounded-xl p-6 shadow flex flex-col gap-2">
            <div class="flex justify-between"><span class="font-semibold">Case No.</span><span>:</span></div>
            <div class="flex justify-between"><span class="font-semibold">C/SIZE (CM)</span><span>:</span></div>
            <div class="flex justify-between"><span class="font-semibold">G/W</span><span>:</span><span
                    class="font-bold">KGS</span></div>
            <div class="flex justify-between"><span class="font-semibold">N/W</span><span>:</span><span
                    class="font-bold">KGS</span></div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Box No.</th>
                    <th class="py-2 px-4">Part No</th>
                    <th class="py-2 px-4">Part Name</th>
                    <th class="py-2 px-4">Qty/box</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center py-6">No items found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
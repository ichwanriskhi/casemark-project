@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-6">
    <h1 class="text-3xl font-bold mb-4">CONTENT LIST</h1>
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
                    <th class="py-2 px-4">Part No</th>
                    <th class="py-2 px-4">Part Name</th>
                    <th class="py-2 px-4">Qty/box</th>
                    <th class="py-2 px-4">Progress</th>
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
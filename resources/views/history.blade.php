@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-6">
    <h1 class="text-3xl font-bold mb-4">CONTENT-LIST HISTORY</h1>
    <div class="flex gap-4 mb-4">
        <select class="border rounded px-3 py-2">
            <option>Case No</option>
        </select>
        <select class="border rounded px-3 py-2">
            <option>Status</option>
        </select>
        <select class="border rounded px-3 py-2">
            <option>Prod. Month</option>
        </select>
    </div>
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="py-2 px-4">No.</th>
                    <th class="py-2 px-4">Case No</th>
                    <th class="py-2 px-4">Part No</th>
                    <th class="py-2 px-4">Prod. Month</th>
                    <th class="py-2 px-4">Qty</th>
                    <th class="py-2 px-4">Total</th>
                    <th class="py-2 px-4">Packing Date</th>
                    <th class="py-2 px-4">Status</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++) <tr class="border-b">
                    <td class="py-2 px-4">{{ $i }}</td>
                    <td class="py-2 px-4">I2E-SAN-00{{ 40+$i }}</td>
                    <td class="py-2 px-4">16206-BZ070-00-87</td>
                    <td class="py-2 px-4">202506</td>
                    <td class="py-2 px-4">15</td>
                    <td class="py-2 px-4">90/90</td>
                    <td class="py-2 px-4">21/07/2025 15:38</td>
                    <td class="py-2 px-4">Packed</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
        <div class="flex justify-between items-center p-4 text-sm">
            <span>1 to 10 of 575 result</span>
            <div class="flex gap-2">
                <button class="px-2 py-1 rounded bg-gray-200">&lt;</button>
                <button class="px-2 py-1 rounded bg-blue-900 text-white">1</button>
                <button class="px-2 py-1 rounded bg-gray-200">2</button>
                <button class="px-2 py-1 rounded bg-gray-200">3</button>
                <button class="px-2 py-1 rounded bg-gray-200">4</button>
                <span>...</span>
                <button class="px-2 py-1 rounded bg-gray-200">&gt;</button>
            </div>
        </div>
    </div>
</div>
@endsection
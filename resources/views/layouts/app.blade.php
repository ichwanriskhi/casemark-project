<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r flex flex-col py-8 px-4">
            <div class="mb-10 flex items-center justify-center">
                <img src="{{ asset('images/Logo-sanoh-2.png') }}" alt="Sanoh Logo" class="h-12">
            </div>
            @php
            $menus = [
            ['label' => 'CASE MARK', 'route' => 'case-mark'],
            ['label' => 'HISTORY', 'route' => 'history'],
            ['label' => 'UPLOAD', 'route' => 'upload'],
            ['label' => 'LIST CASE MARK', 'route' => 'list-cs']
            ];
            $current = request()->route() ? request()->route()->getName() : '';
            @endphp
            <nav class="flex flex-col gap-2">
                @foreach ($menus as $menu)
                <a href="{{ route($menu['route']) }}"
                    class="py-2 px-4 rounded font-bold text-left transition-all {{ $current === $menu['route'] ? 'bg-blue-900 text-white' : 'text-blue-900 hover:bg-blue-100' }}">
                    {{ $menu['label'] }}
                </a>
                @endforeach
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8">
            @yield( 'content')
        </main>
    </div>
</body>

</html>
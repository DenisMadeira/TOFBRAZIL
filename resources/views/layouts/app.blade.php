<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="flex h-screen">
        <div class="bg-white w-64 flex-none p-4">
            <nav>
                <a href="{{ route('app.index') }}" class="block text-lg font-medium">Index</a>
                <ul class="list-none">
                    <li class="py-2 px-4 hover:bg-gray-200">
                        <a href="{{ route('app.simulacra') }}" class="block">Simulacra</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-200">
                        <a href="{{ route('app.inventory') }}" class="block">Inventory</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-200">
                        <a href="{{ route('app.planner') }}" class="block">Planner</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-200">
                        <a href="{{ route('app.settings') }}" class="block">Settings</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="flex-1 p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>

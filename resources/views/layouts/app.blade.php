<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: #f8fafc;
            margin: 0;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 span {
            background: #4f46e5;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        /* Bouton */
        a {
            text-decoration: none;
        }

        a[href*="create"] {
            background: #4f46e5;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        a[href*="create"]:hover {
            background: #4338ca;
        }

        /* Card */
        .card {
            background: white;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #e5e7eb;
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .border-success {
            border-left: 5px solid #22c55e;
        }

        .text-decoration-line-through {
            text-decoration: line-through;
            color: #9ca3af;
        }

        .card h5 {
            margin: 0;
            font-weight: 600;
        }

        .card p {
            color: #6b7280;
        }

        /* Actions */
        .actions {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        a[href*="edit"] {
            background: #f59e0b;
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
        }

        a[href*="edit"]:hover {
            background: #d97706;
        }

        button {
            background: #ef4444;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #dc2626;
        }

        /* Message */
        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        {{-- Navigation (optionnel, tu peux garder ou supprimer) --}}
        @include('layouts.navigation')

        {{-- Message succès --}}
        <div class="max-w-7xl mx-auto py-4 px-4">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        {{-- CONTENU PRINCIPAL --}}
        <main class="max-w-7xl mx-auto px-4 py-6">
            @yield('content') {{-- ✅ CORRECTION ICI --}}
        </main>

    </div>

</body>
</html>
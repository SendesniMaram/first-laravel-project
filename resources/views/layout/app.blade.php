<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title', 'Mon Site Laravel')</title> 
 
    <style> 
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        } 
 
        body { 
            font-family: Arial, sans-serif; 
        } 
 
        /* Navigation */ 
        nav { 
            background: #FF2D20; 
            padding: 20px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
        } 
 
        nav ul { 
            list-style: none; 
            display: flex; 
            gap: 20px; 
            max-width: 1200px; 
            margin: 0 auto; 
        } 
 
        nav a { 
            color: white; 
            text-decoration: none; 
            font-weight: bold; 
            padding: 10px 15px; 
            border-radius: 5px; 
            transition: background 0.3s; 
        } 
 
        nav a:hover { 
            background: rgba(255,255,255,0.2); 
        } 
 
        /* Contenu */ 
        .container { 
            max-width: 1200px; 
            margin: 40px auto; 
            padding: 20px; 
        } 
 
        /* Footer */ 
        footer { 
            background: #333; 
            color: white; 
            text-align: center; 
            padding: 30px; 
            margin-top: 50px; 
        } 
    </style> 
 
    @yield('styles') 
</head> 
<body> 
 <!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>@yield('title', 'Todo App')</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/..."> 
</head> 
<body class="bg-light"> 
<div class="container py-4"> 
    @if(session('success')) 
        <div class="alert alert-success">{{ session('success') }}</div> 
    @endif 
    @yield('content') 
</div> 
</body></html> 
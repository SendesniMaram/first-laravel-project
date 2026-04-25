@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div style="margin-bottom: 25px;">
        <h1>👋 Bonjour {{ auth()->user()->name }}</h1>
        <p style="color: gray;">Bienvenue dans votre application Laravel</p>
    </div>

    <!-- Section bienvenue -->
    <div style="background:white; padding:25px; border-radius:12px; box-shadow:0 5px 15px rgba(0,0,0,0.05); margin-bottom:25px;">
        <div style="display:flex; align-items:center; gap:25px; flex-wrap:wrap;">
            
            <div style="flex:1;">
                <h2>Bienvenue dans mon application Laravel</h2>
                <p style="color:#6b7280; line-height:1.6;">
                    Cette application vous permet de gérer vos tâches personnelles,
                    d’ajouter des priorités, de suivre les tâches terminées et de garder
                    chaque utilisateur avec ses propres tâches.
                </p>
            </div>

            <div style="flex:1; text-align:center;">
                <img src="https://cdn-icons-png.flaticon.com/512/4697/4697260.png"
                     alt="Todo image"
                     style="max-width:220px; width:100%;">
            </div>

        </div>
    </div>

    <!-- Statistiques -->
    <div style="display:flex; gap:20px; flex-wrap:wrap;">

        <div style="flex:1; background:white; padding:20px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
            <h3>Total des tâches</h3>
            <p style="font-size:24px; font-weight:bold;">
                {{ $tasks->count() }}
            </p>
        </div>

        <div style="flex:1; background:#dcfce7; padding:20px; border-radius:10px;">
            <h3>Complétées</h3>
            <p style="font-size:24px; font-weight:bold;">
                {{ $completed }}
            </p>
        </div>

        <div style="flex:1; background:#fee2e2; padding:20px; border-radius:10px;">
            <h3>Restantes</h3>
            <p style="font-size:24px; font-weight:bold;">
                {{ $tasks->count() - $completed }}
            </p>
        </div>

    </div>

    <!-- Actions rapides -->
    <div style="margin-top:30px;">
        <h3>⚡ Actions rapides</h3>

        <a href="{{ route('tasks.create') }}" style="background:#4f46e5; color:white; padding:10px 15px; border-radius:8px; text-decoration:none;">
            + Nouvelle tâche
        </a>

        <a href="{{ route('tasks.index') }}" style="margin-left:10px; background:#10b981; color:white; padding:10px 15px; border-radius:8px; text-decoration:none;">
            Voir mes tâches
        </a>
    </div>

</div>

@endsection
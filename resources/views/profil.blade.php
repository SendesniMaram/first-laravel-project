<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            👤 Mon Profil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- INFO USER -->
            <div class="p-6 bg-white shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Informations du compte</h3>

                <p><strong>Nom :</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email :</strong> {{ auth()->user()->email }}</p>
            </div>

            <!-- UPDATE PROFILE -->
            <div class="p-6 bg-white shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Modifier les informations</h3>

                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- UPDATE PASSWORD -->
            <div class="p-6 bg-white shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Changer le mot de passe</h3>

                @include('profile.partials.update-password-form')
            </div>

            <!-- DELETE ACCOUNT -->
            <div class="p-6 bg-red-50 border border-red-200 rounded-lg">
                <h3 class="text-lg font-semibold mb-4 text-red-600">Supprimer le compte</h3>

                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>

</x-app-layout>
<x-layouts.layout title="Club Deportivo Campeones de Cuarte">

<!-- Hero Section con imagen de fondo y capa azul -->
<div class="relative min-h-[calc(100vh-8rem)] flex flex-col">
    <!-- Imagen de fondo principal -->
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('img/hero-soccer.jpg') }}" alt="Campo de fútbol" class="w-full h-full object-cover">
        <!-- Capa azul semitransparente que no llega hasta abajo -->
        <div class="absolute inset-0 bg-gradient-to-b from-blue-600/70 via-blue-600/40 to-transparent">
        </div>
    </div>
    <!-- Contenido sobre la imagen -->
    <div class="relative z-10 h-full flex flex-col justify-start items-center text-white px-4 pt-24">
        <div class="max-w-xl mx-auto">
            <h1 class="mb-6 text-5xl font-bold text-white animate-pulse">⚽ Club Deportivo Campeones de Cuarte ⚽</h1>
            <p class="mb-8 text-xl text-white">
                "Formando estrellas del fútbol desde pequeños. Únete a nuestra academia donde los sueños se convierten en goles y las pasiones en victorias."
            </p>

            <div class="mt-6 grid grid-cols-3 gap-4">
                <div class="stat bg-white bg-opacity-20 rounded-lg p-3">
                    <div class="stat-title text-white">Jugadores</div>
                    <div class="stat-value text-primary">200+</div>
                </div>
                <div class="stat bg-white bg-opacity-20 rounded-lg p-3">
                    <div class="stat-title text-white">Trofeos</div>
                    <div class="stat-value text-primary">50+</div>
                </div>
                <div class="stat bg-white bg-opacity-20 rounded-lg p-3">
                    <div class="stat-title text-white">Entrenadores</div>
                    <div class="stat-value text-primary">15</div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .shadow-text {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>

</x-layouts.layout>

<header class="bg-blue-900 text-white">
    <!-- Dashboard Navigation -->
    @auth
    <div class="bg-blue-800 p-2">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="text-sm hover:text-blue-200">Dashboard</a>
                <a href="{{ route('alumno.index') }}" class="text-sm hover:text-blue-200">Alumnos</a>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-sm">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-sm hover:text-blue-200">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endauth
    
    <!-- Main Header -->
    <div class="container mx-auto py-4 px-6 flex justify-between items-center">
        <div class="flex items-center gap-4">
            <img class="h-16 max-h-full rounded-full shadow-lg" src="{{asset('images/logo-futbol.jpg')}}" alt="logo de fútbol">
            <h1 class="text-4xl font-bold">Club Deportivo Campeones de Cuarte</h1>
        </div>
        <div class="flex gap-4">
            @guest
                <a href="{{route('register')}}" class="btn btn-primary hover:scale-105 transition-transform duration-200 bg-green-600 border-none hover:bg-green-700">
                    ¡Únete al Equipo!
                </a>
                <a href="{{route('login')}}" class="btn btn-outline text-white hover:bg-white hover:text-blue-900 transition-colors duration-200">
                    Acceso Jugadores
                </a>
            @endguest
        </div>
    </div>
</header>

{{--Diseño para moviles--}}
<header class="md:hidden bg-blue-900 flex flex-row justify-between items-center p-4">
    <div class="flex items-center gap-2">
        <img class="h-12 max-h-full rounded-full shadow-lg" src="{{asset('images/logo-futbol.jpg')}}" alt="logo de fútbol">
        <h1 class="text-xl font-bold text-white">CD Campeones</h1>
    </div>
    
    <div>
        <input type="checkbox" id="menu-toggler" class="peer hidden">
        <label for="menu-toggler" class="text-3xl text-white cursor-pointer">
            &#9778;
        </label>
        <div class="hidden absolute right-0 mt-2 bg-blue-800 p-4 rounded-xl peer-checked:flex flex-col gap-2 shadow-xl">
            @guest
                <a href="{{route('login')}}" class="btn btn-sm btn-outline text-white hover:bg-white hover:text-blue-900 w-full">Acceso Jugadores</a>
                <a href="{{route('register')}}" class="btn btn-sm bg-green-600 text-white border-none hover:bg-green-700 w-full">¡Únete al Equipo!</a>
            @endguest
            @auth
                <span class="text-white text-center">{{ auth()->user()->name }}</span>
                <form action="{{route('logout')}}" method="POST">
                    @csrf 
                    <input class="btn btn-sm btn-outline text-white hover:bg-white hover:text-blue-900 w-full" type="submit" value="Cerrar Sesión">
                </form>
            @endauth
        </div>
    </div>
</header>

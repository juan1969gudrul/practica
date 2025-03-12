<nav class="bg-blue-900 text-white shadow-lg">
    <div class="container mx-auto p-4 flex justify-center space-x-8">
        <a href="{{route('home')}}" class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all duration-300">
            <i class="fas fa-home mr-2"></i>
            <span>Inicio</span>
        </a>
        
        <a href="{{route('about')}}" class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all duration-300">
            <i class="fas fa-users mr-2"></i>
            <span>Nosotros</span>
        </a>
        
        <a href="{{route('contact')}}" class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all duration-300">
            <i class="fas fa-envelope mr-2"></i>
            <span>Contacto</span>
        </a>
        
        <a href="{{route('services')}}" class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all duration-300">
            <i class="fas fa-futbol mr-2"></i>
            <span>Servicios</span>
        </a>
        
        @auth
            <a href="{{route('alumno.index')}}" class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all duration-300">
                <i class="fas fa-graduation-cap mr-2"></i>
                <span>Alumnos</span>
            </a>
        @endauth

    </div>
</nav>
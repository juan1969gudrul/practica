<![CDATA[<x-layouts.layout>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Hero Section con imagen de fondo y capa azul -->
    <div class="relative h-96 mb-8">
        <!-- Imagen de fondo principal -->
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('img/hero-soccer.jpg') }}" alt="Campo de fútbol" class="w-full h-full object-cover">
            <!-- Capa azul semitransparente que no llega hasta abajo -->
            <div class="absolute inset-0 bg-gradient-to-b from-blue-600/70 via-blue-600/40 to-transparent">
            </div>
        </div>
        <!-- Contenido sobre la imagen -->
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center shadow-text">Gestión de Alumnos</h1>
            <p class="text-xl md:text-2xl text-center max-w-2xl shadow-text">Sistema de administración para nuestra escuela deportiva</p>
        </div>
    </div>

    <!-- Imagen de fondo decorativa -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <img src="{{ asset('img/kids-soccer.jpg') }}" alt="Niños jugando fútbol" 
             class="w-full h-full object-cover opacity-5">
    </div>

    <!-- Contenedor principal con estilo para el contenido -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white/90 backdrop-blur-sm rounded-lg shadow-xl p-6 relative z-10">

            <!-- Botón para crear un nuevo alumno -->
            <div class="mb-6">
                <a href="{{route('alumno.create')}}" 
                   class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Crear alumno
                </a>
            </div>

            <!-- Contenedor para la tabla -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-footer">
                        <tr>
                            <th class="px-6 py-3 text-center text-lg font-semibold text-white uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-center text-lg font-semibold text-white uppercase tracking-wider">DNI</th>
                            <th class="px-6 py-3 text-center text-lg font-semibold text-white uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-center text-lg font-semibold text-white uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($alumnos as $alumno)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center text-gray-900">{{$alumno->name}}</td>
                                <td class="px-6 py-4 text-center text-gray-900">{{$alumno->dni}}</td>
                                <td class="px-6 py-4 text-center text-gray-900">{{$alumno->email}}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-4">
                                        <!-- Botón Editar -->
                                        <a href="{{route('alumno.edit', $alumno->id)}}" 
                                           class="text-blue-600 hover:text-blue-900 transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" 
                                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                        <!-- Botón Borrar -->
                                        <form id="delete-form-{{$alumno->id}}" 
                                              action="{{route('alumno.destroy', $alumno->id)}}" 
                                              method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" 
                                                    onclick="confirmDelete({{$alumno->id}})" 
                                                    class="text-red-600 hover:text-red-900 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                                     viewBox="0 0 24 24" stroke-width="1.5" 
                                                     stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts para SweetAlert2 -->
    <script>
        // Mostrar notificación si existe
        @if (session()->has('status'))
            Swal.fire({
                title: 'Notificación',
                text: "{{session()->get('status')}}",
                icon: "{{ session()->has('color') ? session()->get('color') : 'success' }}",
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            });
        @endif

        // Función para confirmar borrado
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <style>
        .shadow-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</x-layouts.layout>]]>

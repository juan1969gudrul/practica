<x-layouts.layout>
    <div class="min-h-full flex flex-col justify-center items-center bg-gray-300">
        <div class="flex flex-col justify-center items-center p-5 bg-white rounded-xl max-h-full m-5">
            <h1 class="text-2xl text-footer mb-4">Editar alumno</h1>
            <form action="{{route('alumno.update', $alumno->id)}}" method="POST" class="space-y-4 w-full max-w-md">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-footer font-medium mb-2">Nombre</label>
                    <input id="name" value="{{$alumno->name}}" name="name" type="text" placeholder="Nombre"
                        class="input input-bordered input-footer w-full" />
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="dni" class="block text-footer font-medium mb-2">DNI</label>
                    <input id="dni" value="{{$alumno->dni}}" name="dni" type="text" placeholder="DNI"
                        class="input input-bordered input-footer w-full" />
                    @error('dni')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-footer font-medium mb-2">Email</label>
                    <input id="email" value="{{$alumno->email}}" name="email" type="email" placeholder="Email"
                        class="input input-bordered input-footer w-full" />
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="btn bg-footer text-white hover:bg-opacity-90">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
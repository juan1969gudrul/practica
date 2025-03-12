<x-layouts.layout>
    <div class="min-h-full flex flex-col justify-center items-center bg-gray-300">
        <div class="flex flex-col justify-center items-center p-5 bg-white rounded-xl max-h-full m-5">
            <h1 class="text-2xl text-footer">Datos nuevo alumno</h1>
            
            @if ($errors->any())
                <div class="alert alert-error mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('alumno.store')}}" method="post" class="space-y-4 grid grid-cols-2 gap-4">
                @csrf
                
                <div>
                    <label for="name" class="flex flex-col justify-center items-center">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Nombre" value="{{old('name')}}" 
                           class="input input-bordered input-footer w-full max-w-xs" />
                    @error("name")
                        <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <label for="dni" class="flex flex-col justify-center items-center">DNI</label>
                    <input id="dni" name="dni" type="text" placeholder="DNI" value="{{old('dni')}}"
                           class="input input-bordered input-footer w-full max-w-xs" />
                    @error("dni")
                        <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="flex flex-col justify-center items-center">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" value="{{old('email')}}"
                           class="input input-bordered input-footer w-full max-w-xs" />
                    @error("email")
                        <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="flex flex-col justify-center items-center">
                    <button type="submit" class="btn bg-footer text-white hover:bg-blue-700">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
<header class="h-15v bg-header flex flex-row justify-between items-center p3">


    <img class= "h-10 max-h-full bg-white" src="{{asset('images/cpifp.png')}}" alt="logo">

    <h1 class="text-5xl text-white">GESTION CENTRO</h1>

    <div>
    @guest
        <form action="">
            <a href="{{route('login')}}" class="btn btn-sm btn-primary btn-outline">Login</a>
            <a href="{{route('register')}}" class="btn btn-sm btn-primary btn-outline">Register</a>
        </form>
    </div>
    @endguest
    
    @auth
        {{ auth()->user()->name }}
        <form action="{{route('logout')}}" method="POST">
            @csrf 
        <input class="btn btn-sm" type="submit">Salir</button>
        </form>

    @endauth

</header>


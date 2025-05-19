<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>     
        @endif
        <div class="content">
            <div class="tittle m-b-md">
                Gestion de Productos
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio_unitario</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Categoria</th>
                        </tr>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <th scope="row">{{ $producto->id }}</th>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>{{ $producto->precio_unitario }}</td>
                                    <td>{{ $producto->cantidad }}</td>
                                    <td>{{ $producto->categoria }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
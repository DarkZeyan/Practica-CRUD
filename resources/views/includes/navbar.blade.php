<nav class="navbar navbar-dark" style="font-size: 100%;  border: 2px solid white; border-radius: 14px;   text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
    <a class="navbar-brand" href="#" style="font-size: 130%">Navegacion: Estructuras de Control</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- Secuenciales --}}
            <li class="nav-item"><a href="{{route('Area de Trapecio',[
                'basemenor' => 12,
                'basemayor' => 31
            ])}}" class="nav-link">Area de Trapecio</a></li>
            <li class="nav-item"><a href="{{route('Apotema de Cuadrado')}}" class="nav-link">Apotema de Cuadrado</a></li>
            <li class="nav-item"><a href="{{route('Volumen de Cono',[
                'radio'=>8,
                'altura'=>10
            ])}}" class="nav-link">Volumen de Cono</a></li>
            <li class="nav-item"><a href="{{route('Area de Triangulo',[
                'base'=>8
            ])}}" class="nav-link">Area de un Triangulo</a></li>
            <li class="nav-item"><a href="{{route('Longitud de Circunferencia')}}" class="nav-link">Longitud de Circunferencia</a></li>
            {{-- Condicionales --}}
            <li class="nav-item"><a href="{{route('Edad para votar')}}" class="nav-link">Edad para Votar</a></li>
            <li class="nav-item"><a href="{{route('Salario de Trabajador')}}" class="nav-link">Salario de Trabajador</a></li>
            <li class="nav-item"><a href="{{route('Regalos de 14 de Febrero')}}" class="nav-link">Regalos del 14 de Febrero</a></li>
            <li class="nav-item"><a href="{{route('Pago de Estacionamiento')}}" class="nav-link">Pago de Estacionamiento</a></li>
            <li class="nav-item"><a href="{{route('Calificacion con Letra')}}" class="nav-link">Calificaciones con Letra</a></li>
            {{-- Ciclos --}}
            <li class="nav-item"><a href="{{action('EstructurasController@profesor')}}" class="nav-link">Salario de profesor</a></li>
            <li class="nav-item"><a href="{{action('EstructurasController@cantidades')}}" class="nav-link">Numeros mayores,menores o iguales a 0</a></li>
            <li class="nav-item"><a href="{{action('EstructurasController@dinero')}}" class="nav-link">Caja registradora</a></li>
            <li class="nav-item"><a href="{{action('EstructurasController@alumnos')}}" class="nav-link">Calificaciones de Alumnos</a></li>
            <li class="nav-item"><a href="{{action('EstructurasController@tabla')}}" class="nav-link">Tabla de Multiplicar</a></li>
        </ul>
    </div>
    </ul>
</nav>

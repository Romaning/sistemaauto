<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('clase.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Clases</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('clase.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('marca.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Marcas</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('marca.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('tipo.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Tipos</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('tipo.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('tipo_combustible.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Tipo Combustibles</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('tipo_combustible.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('tipo_uso.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Tipo Uso</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('tipo_uso.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('estado.index')}}">
                <i class="nav-main-link-icon si si-book-open"></i>
                <span class="nav-main-link-name">Estados</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('estado.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
{{--<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Clases</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('clase.index')}}">
                <span class="nav-main-link-name">Tabla Clases</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('clase.create')}}">
                <span class="nav-main-link-name">Form Crear Clase</span>
            </a>
        </li>

    </ul>
</li>
<li class="nav-main-item">

    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Marcas</span>
    </a>
    <ul class="nav-main-submenu">

        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('marca.index')}}">
                <span class="nav-main-link-name">Tabla Marcas</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('marca.create')}}">
                <span class="nav-main-link-name">Form Crear Marca</span>
            </a>
        </li>
    </ul>

</li>
<li class="nav-main-item">

    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Tipos</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo.index')}}">
                <span class="nav-main-link-name">Tabla Tipos</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo.create')}}">
                <span class="nav-main-link-name">Form Crear Tipo</span>
            </a>
        </li>
    </ul>

</li>
<li class="nav-main-item">

    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Tipo Combustibles</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo_combustible.index')}}">
                <span class="nav-main-link-name">Tabla Tipo Combustible</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo_combustible.create')}}">
                <span class="nav-main-link-name">Form Crear Tipo Combustible</span>
            </a>
        </li>
    </ul>

</li>
<li class="nav-main-item">

    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Tipos de Usos</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo_uso.index')}}">
                <span class="nav-main-link-name">Tabla Tipo Uso</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('tipo_uso.create')}}">
                <span class="nav-main-link-name">Form Crear Tipo Uso</span>
            </a>
        </li>
    </ul>

</li>
<li class="nav-main-item">

    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-book-open"></i>
        <span class="nav-main-link-name">Estados</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('estado.index')}}">
                <span class="nav-main-link-name">Tabla Estados</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('estado.create')}}">
                <span class="nav-main-link-name">Form Crear Estado</span>
            </a>
        </li>
    </ul>

</li>--}}

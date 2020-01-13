
<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('seguro.index')}}">
                <i class="nav-main-link-icon si si-plus"></i>
                <span class="nav-main-link-name">Seguros</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('seguro.create')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>

<li class="nav-main-item">
    <div class="row">
        <div class="col-md-9">
            <a class="nav-main-link" href="{{route('seguro.index.group')}}">
                <i class="nav-main-link-icon si si-plus"></i>
                <i class="fa fa-car"></i><i class="fa fa-car"></i>
                <span class="nav-main-link-name">Grupos de Seguro</span>
            </a>
        </div>
        <div class="col-md-3 align-content-center">
            <a class="nav-main-link" href="{{route('seguro.create.group')}}">
                <span class="nav-main-link-name"><i class="fa fa-plus-circle"></i></span>
            </a>
        </div>
    </div>
</li>
{{--<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="nav-main-link-icon si si-plus"></i>
        <span class="nav-main-link-name">Informacion</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('seguro.index')}}">
                <span class="nav-main-link-name">De Todos Los Vehiculos</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('seguro.index.group')}}">
                <span class="nav-main-link-name">Grupos de Vehiculos</span>
            </a>
        </li>
    </ul>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{route('seguro.create')}}">
                <span class="nav-main-link-name">Generar Registrar Nuevo</span>
            </a>
        </li>
    </ul>
</li>--}}

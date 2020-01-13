
@if (session('status'))
    <div class='alert alert-success d-flex align-items-center' role='alert' data-toggle="appear" data-class="animated bounceIn">
        <div class='flex-00-auto'>
            <i class='fa fa-fw fa-check'></i>
        </div>
        <div class='flex-fill ml-3'>
            <p class='mb-0'>  {{ session('status') }}<a class='alert-link' href='javascript:void(0)'></a>!</p>
        </div>
    </div>
    <input type="hidden" id="alerta_alerta_status" value="0">
    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_estado">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
    {{--<a href="javascript:history.back(-2);" title="Ir la página anterior" class="btn btn-primary"><i class="fa fa-align-left"></i> ATRAS</a>--}}
@endif

@if(session()->has('alert-success'))
    <div class='alert alert-success d-flex align-items-center' role='alert' data-toggle="appear" data-class="animated bounceIn">
        <div class='flex-00-auto'>
            <i class='fa fa-fw fa-check'></i>
        </div>
        <div class='flex-fill ml-3'>
            <p class='mb-0'>{{ session()->get('alert-success') }}<a class='alert-link'
                                                                    href='javascript:void(0)'></a>!</p>
        </div>
    </div>
    <input type="hidden" id="alerta_alerta_success" value="1">
    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_exito">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
@endif
@if(session()->has('alert-danger'))
    <div class='alert alert-danger d-flex align-items-center' role='alert' data-toggle="appear" data-class="animated bounceIn">
        <div class='flex-00-auto'>
            <i class='fa fa-fw fa-check'></i>
        </div>
        <div class='flex-fill ml-3'>
            <p class='mb-0'>  {{ session()->get('alert-danger') }}<a class='alert-link'
                                                                     href='javascript:void(0)'></a>!</p>
        </div>
        <input type="hidden" id="alerta_alerta_danger" value="2">
    </div>
    <div class="d-none">
        <button type="button" class="js-swal-error btn btn-light push" id="boton_danger">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
    {{--<a href="javascript:history.back(-2);" title="Ir la página anterior" class="btn btn-primary"><i class="fa fa-align-left"></i> ATRAS</a>--}}
@endif


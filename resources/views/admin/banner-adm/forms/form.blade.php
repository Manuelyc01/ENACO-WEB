<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Banners </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group {{ $errors->has('orden') ? 'has-error' : '' }}">
            {!! Form::stdNumber('Orden', 1, 'orden', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
            {!! Form::stdText('Título', 0, 'titulo', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('des') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 0, 'des', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('textoBtn') ? 'has-error' : '' }}">
            {!! Form::stdText('Texto Botón', 0, 'textoBtn', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('enlaceBtn') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Botón', 0, 'enlaceBtn', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('enlaceFacebook') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Facebook', 0, 'enlaceFacebook', $errors) !!}
        </div>
        
        <div class="form-group {{ $errors->has('enlaceInstagram') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Instagram', 0, 'enlaceInstagram', $errors) !!}
        </div>
        
        <div class="form-group {{ $errors->has('enlaceWhatsapp') ? 'has-error' : '' }}">
            {!! Form::stdText('Enlace Instagram', 0, 'enlaceWhatsapp', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('fondoDesktop') ? 'has-error' : '' }}">
            {!! Form::stdImg('Fondo Desktop', 1, 'fondoDesktop' , isset($element) ? $element->fondoDesktop : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

        <div class="form-group {{ $errors->has('fondoMobile') ? 'has-error' : '' }}">
            {!! Form::stdImg('Fondo Mobile', 1, 'fondoMobile' , isset($element) ? $element->fondoMobile : '' , $errors, 'AAAxBBB (px)') !!}
        </div>

    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>
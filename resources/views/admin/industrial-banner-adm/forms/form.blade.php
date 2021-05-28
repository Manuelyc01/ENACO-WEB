<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Banner - Industrial - Listado </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        <div class="form-group {{ $errors->has('orden') ? 'has-error' : '' }}">
            {!! Form::stdNumber('Orden', 1, 'orden', $errors) !!}
        </div>
        <div class="form-group {{ $errors->has('banner') ? 'has-error' : '' }}">
            {!! Form::stdImg('Banner', 1, 'banner' , isset($element) ? $element->banner : '' , $errors, 'AAAxBBB (px)') !!}
        </div>


    </div>
    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>

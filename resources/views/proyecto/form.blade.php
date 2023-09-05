<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::select('tipo', [
            'Alternativa 1' => 'Alternativa 1',
            'Alternativa 2' => 'Alternativa 2',
            'Alternativa 3' => 'Alternativa 3',
            'Alternativa 4' => 'Alternativa 4',
            ], $proyecto->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''),'placeholder' => 'Seleccione']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cotización') }}
            {{ Form::select('cotización', [
            'Alternativa 1' => 'Alternativa 1',
            'Alternativa 2' => 'Alternativa 2',
            'Alternativa 3' => 'Alternativa 3',
            'Alternativa 4' => 'Alternativa 4',
            ], $proyecto->cotización, ['class' => 'form-control' . ($errors->has('cotización') ? ' is-invalid' : ''),'placeholder' => 'Seleccione']) }}
            {!! $errors->first('cotización', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechainicio') }}
            {{ Form::date('fechainicio', $proyecto->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechafin') }}
            {{ Form::date('fechafin', $proyecto->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prototipo') }}
            {{ Form::text('prototipo', $proyecto->prototipo, ['class' => 'form-control' . ($errors->has('prototipo') ? ' is-invalid' : ''), 'placeholder' => 'Prototipo']) }}
            {!! $errors->first('prototipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('requerimientos') }}
            {{ Form::text('requerimientos', $proyecto->requerimientos, ['class' => 'form-control' . ($errors->has('requerimientos') ? ' is-invalid' : ''), 'placeholder' => 'Requerimientos']) }}
            {!! $errors->first('requerimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripción', $proyecto->descripción, ['class' => 'form-control' . ($errors->has('descripción') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripción', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

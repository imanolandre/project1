<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pago->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::text('moneda', $pago->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('metododepago') }}
            {{ Form::text('metododepago', $pago->metododepago, ['class' => 'form-control' . ($errors->has('metododepago') ? ' is-invalid' : ''), 'placeholder' => 'Metododepago']) }}
            {!! $errors->first('metododepago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proyecto') }}
            {{ Form::text('proyecto', $pago->proyecto, ['class' => 'form-control' . ($errors->has('proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto']) }}
            {!! $errors->first('proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formadepago') }}
            {{ Form::text('formadepago', $pago->formadepago, ['class' => 'form-control' . ($errors->has('formadepago') ? ' is-invalid' : ''), 'placeholder' => 'Formadepago']) }}
            {!! $errors->first('formadepago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facturar') }}
            {{ Form::text('facturar', $pago->facturar, ['class' => 'form-control' . ($errors->has('facturar') ? ' is-invalid' : ''), 'placeholder' => 'Facturar']) }}
            {!! $errors->first('facturar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subtotal') }}
            {{ Form::text('subtotal', $pago->subtotal, ['class' => 'form-control' . ($errors->has('subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
            {!! $errors->first('subtotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $pago->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imputrasladados') }}
            {{ Form::text('imputrasladados', $pago->imputrasladados, ['class' => 'form-control' . ($errors->has('imputrasladados') ? ' is-invalid' : ''), 'placeholder' => 'Imputrasladados']) }}
            {!! $errors->first('imputrasladados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuretenidos') }}
            {{ Form::text('impuretenidos', $pago->impuretenidos, ['class' => 'form-control' . ($errors->has('impuretenidos') ? ' is-invalid' : ''), 'placeholder' => 'Impuretenidos']) }}
            {!! $errors->first('impuretenidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $pago->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $pago->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
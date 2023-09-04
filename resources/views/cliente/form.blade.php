<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrecliente') }}
            {{ Form::text('nombrecliente', $cliente->nombrecliente, ['class' => 'form-control' . ($errors->has('nombrecliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecliente']) }}
            {!! $errors->first('nombrecliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $cliente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teléfono') }}
            {{ Form::text('teléfono', $cliente->teléfono, ['class' => 'form-control' . ($errors->has('teléfono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('teléfono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::text('empresa', $cliente->empresa, ['class' => 'form-control' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'Empresa']) }}
            {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sitioweb') }}
            {{ Form::text('sitioweb', $cliente->sitioweb, ['class' => 'form-control' . ($errors->has('sitioweb') ? ' is-invalid' : ''), 'placeholder' => 'Sitioweb']) }}
            {!! $errors->first('sitioweb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('dirección', $cliente->dirección, ['class' => 'form-control' . ($errors->has('dirección') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('dirección', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razónsocial') }}
            {{ Form::text('razónsocial', $cliente->razónsocial, ['class' => 'form-control' . ($errors->has('razónsocial') ? ' is-invalid' : ''), 'placeholder' => 'Razónsocial']) }}
            {!! $errors->first('razónsocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $cliente->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direcciónfiscal') }}
            {{ Form::text('direcciónfiscal', $cliente->direcciónfiscal, ['class' => 'form-control' . ($errors->has('direcciónfiscal') ? ' is-invalid' : ''), 'placeholder' => 'Direcciónfiscal']) }}
            {!! $errors->first('direcciónfiscal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigopostal') }}
            {{ Form::text('codigopostal', $cliente->codigopostal, ['class' => 'form-control' . ($errors->has('codigopostal') ? ' is-invalid' : ''), 'placeholder' => 'Codigopostal']) }}
            {!! $errors->first('codigopostal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regimenincorporación') }}
            {{ Form::text('regimenincorporación', $cliente->regimenincorporación, ['class' => 'form-control' . ($errors->has('regimenincorporación') ? ' is-invalid' : ''), 'placeholder' => 'Regimenincorporación']) }}
            {!! $errors->first('regimenincorporación', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('constanciasituaciónFiscal') }}
            {{ Form::text('constanciasituaciónFiscal', $cliente->constanciasituaciónFiscal, ['class' => 'form-control' . ($errors->has('constanciasituaciónFiscal') ? ' is-invalid' : ''), 'placeholder' => 'Constanciasituaciónfiscal']) }}
            {!! $errors->first('constanciasituaciónFiscal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
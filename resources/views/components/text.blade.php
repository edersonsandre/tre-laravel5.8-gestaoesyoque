<?php
$error = ($errors->has($name)) ? "has-error" : null;
?>

<div class="form-group">
    {!! Form::label($name, $label, ['class'=>'control-label']) !!}
    {!! Form::text($name, $value, array_merge(['class'=>'form-control'], $attributes)) !!}
    @if(!is_null($error))
        <span class="error">
            <label class="error">{!! $errors->first($name) !!}</label>
        </span>
    @endif
</div>
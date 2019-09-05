<div class="form-group">
        {!! Form::label($field['name'], $field['label']) !!}
        {!! Form::textarea($field['name'], empty($value)? '': $value, ['class' => 'form-control', 'rows' => '10']) !!}
    
</div>


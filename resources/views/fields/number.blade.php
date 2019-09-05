<div class="form-group">
        {!! Form::label($field['name'], $field['label']) !!}
        {!! Form::number($field['name'], empty($value)? '': $value)  !!}
</div>


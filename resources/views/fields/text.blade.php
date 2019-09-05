<div class="form-group">
    {!! Form::label($field['name'], $field['label']) !!}
    {!!  Form::text($field['name'], empty($value)? '': $value, ['class' => 'form-control']) !!}
</div>


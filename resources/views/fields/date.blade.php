<div class="form-group">
    {!! Form::label($field['name'], $field['label']) !!}
    <input type="{{$field['type']}}" value="@if(!empty($value)){{$value}}"@else {{old($field['name'])}}" @endif name="{{$field['name']}}" class="form-control" id="{{$field['label']}} datetimepicker"  placeholder="{{$field['label']}}">
</div>


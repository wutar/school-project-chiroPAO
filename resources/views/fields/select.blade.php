

<div class="form-group">
    <label for="{{$field['name']}}">{{$field['label']}}</label>
    <select name="{{$field['name']}}">
        @foreach($field['value'] as $index => $option)
            <option value="{{$index}}">{{$option}}</option>
        @endforeach
    </select>
</div>


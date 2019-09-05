@extends('master')
@section('content')
<div class="container">
    @include('common.errors')
    {{ Form::model($group, array('url' => '/groups/'.$group->id.'/update', $group->id))  }}
    <h2> Afdeling aanpassen:</h2>
    @foreach(App\Group::formFields() as $field)
        @include(sprintf('fields.%s', $field['type']), 
                        [
                            'field' => $field,
                            'value' => $group{$field['name']}
                            ])
    @endforeach
    {!! Form::submit('Pas aan', ['class' => 'btn btn-primary pull-right']) !!}
    {{ Form::close() }}
</div>
@extends('master')
@section('content')
<div class="container">
    @include('common.errors')
    {{ Form::model($event, array('url' => '/events/'.$event->id.'/update', $event->id))  }}
    <h2> Evenement aanpassen:</h2>
    @foreach(App\Event::formFields() as $field)
        @include(sprintf('fields.%s', $field['type']), 
                        [
                            'field' => $field,
                            'value' => $event{$field['name']}
                            ])
    @endforeach
    {!! Form::submit('Pas aan', ['class' => 'btn btn-primary pull-right']) !!}
    {{ Form::close() }}
</div>
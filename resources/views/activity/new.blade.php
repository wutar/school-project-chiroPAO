@extends('master')
@section('content')
<div class="container">
    @include('common.errors')
    {{ Form::open( array('url' => '/groups/'.$group->id . '/activities/add'))  }}
    <h2> Activiteit aanmaken:</h2>
    @foreach(App\Activity::formFields() as $field)
        @include(sprintf('fields.%s', $field['type']), 
                        [
                            'field' => $field,
                        ])
    @endforeach
    {!! Form::submit('Maak aan', ['class' => 'btn btn-primary pull-right']) !!}
    {{ Form::close() }}
</div>
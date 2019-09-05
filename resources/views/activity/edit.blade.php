@extends('master')
@section('content')
<div class="container">
    @include('common.errors')
    {!! Form::model($activity, array('url' => '/groups/'.$activity->group->id . '/activities/'.$activity->id.'/update', $activity->id))  !!}
    <h2> Activiteit aanpassen:</h2>
    @foreach(App\Activity::formFields() as $field)
        @include(sprintf('fields.%s', $field['type']),
                        [
                            'field' => $field,
                            'value' => $activity{$field['name']}
                            ])
    @endforeach
    <button type="submit" class="btn btn-primary">Pas aan</button>
    {!! Form::close() !!}
    <div class="row col-lg-9 clearfix">
        <h2>Foto's</h2>
    </div>
    <div class="row col-lg-9 clearfix">
        {!!Form::open( array('url' => '/groups/'.$activity->group->id . '/activities/'.$activity->id.'/deletePhoto', $activity->id)) !!}
        @foreach($activity->photos as $photo)
            <div class="col-md-2" style="margin:10px; display:inline-block;">
                <label class="checkbox-inline">
                    <img class="img-fluid" src="{{asset('/storage/img/'.$photo->id.'.'.$photo->extension)}}" alt="">
                    {!! Form::checkbox($photo->id, $photo->id ) !!}
                </label>
            </div>
         @endforeach
         <div class="row" style="margin-top: 20px">
                {!! Form::submit('Verwijder geselecteerde foto\'s', ['class' => 'btn btn-danger']) !!}
         </div>
         {!! Form::close() !!}
    </div>
    <div style="margin-top: 20px">
        {!! Form::open(array('url' => '/groups/'.$activity->group->id . '/activities/'.$activity->id.'/addPhoto', $activity->id, 'files'=>true)) !!}
        @csrf
            <h2>Voeg nieuwe foto toe</h2>
            {!! Form::file('image' ) !!}
            <div class="row" style="margin-top:20px">
                {!! Form::submit('Voeg foto toe', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
        {!! Form::close() !!}
    </div>


</div>

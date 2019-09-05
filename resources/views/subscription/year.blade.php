@extends('master')
@section('content')
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Inschrijven</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Inschrijving werkjaar</li>
    </ol>
    @include('common.errors')
    <button type="button" class="btn btn-primary" id="showButton">Nieuw kind toevoegen</button>
    <div class="hidden" id="form">
        {!! Form::model($newKid, array('route' => array('kid.create'), $newKid->id))  !!}
        <h2> Nieuw kind toevoegen </h2>
        @foreach(App\Kid::formFields() as $field)
            @include(sprintf('fields.%s', $field['type']), ['field' => $field])
        @endforeach
        {!! Form::submit('Voeg toe', ['class' => 'btn btn-primary pull-right']) !!}
        {!! Form::close() !!}
    </div>
    @if(count(Auth::user()->kids))
    {!! Form::open(array('url' => '/subscribe/new')) !!}
        <h2> Inschrijven voor werkjaar </h2>
        @foreach($user->kids as $kid)
        <div class="form-check">
            @if($kid->subscribed)
            {{$kid->name}} {{$kid->familyname}} is reeds ingeschreven bij de {{(\App\Group::getGroup($kid)->name)}}
            @else
            {!! Form::checkbox($kid->id, $kid->id ) !!}
            {!! Form::label($kid->name, $kid->name.'(inschrijven bij de '.\App\Group::getGroup($kid)->name.')') !!}
            @endif
        </div>
       @endforeach
       @if( count(Auth::user()->kids->where('subscribed', 0)))
        {!! Form::submit('schrijf in', ['class' => 'btn btn-primary pull-right']) !!}
       @endif
    {!! Form::close() !!}
    @endif
</div>
@endsection

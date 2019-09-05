@extends('master')
@section('content')

<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">{{$leader->name." ".$leader->familyname}}
      <small>{{"leider van de ".$leader->group->name}}</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{url("/")}}">Home</a>
      </li>
      <li class="breadcrumb-item active">
      <a href="{{url("/leaders")}}">Leiding</a>
      </li>
      <li class="breadcrumb-item active">{{$leader->name}}</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="{{asset('/img/'.$leader->profilePicture->id.'.'.$leader->profilePicture->extension)}}" alt="">
      </div>
      <div class="col-lg-6">
          <div cass="row">
                <h2>over {{$leader->name}}</h2>
                <p>{{$leader->resume}}</p>
          </div>
          @auth
          <div cass="row">
                <h2>Contact</h2>
                <p>Tel: {{$leader->user->telephone}}</p>
                <p>Email: <a href="mailto:{{$leader->user->email}}">{{$leader->user->email}}</a><p>

          </div>
          @endauth
      </div>
    </div>

    <!-- /.row -->



  </div>
  <!-- /.container -->

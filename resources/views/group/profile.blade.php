@extends('master')
@section('content')

<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">{{$group->name}}
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">
      <a href="{{url("/groups")}}">Afdelingen</a> 
      </li>
      <li class="breadcrumb-item active">{{$group->name}}</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="{{asset('/img/'.$group->picture->id.'.'.$group->picture->extension)}}" alt="">
      </div>
      <div class="col-lg-6">
        <h2>Over de {{$group->name}}</h2>
        <p>{{$group->description}}</p>
        @guest
        @else    
        @if( count(Auth::user()->kids->where('group_id', $group->id))>0 || !empty(Auth::user()->leader) )  
          <a href="{{url('/groups/'.$group->id.'/activities')}}" class="btn btn-primary"> Naar activiteiten</a>
          @if(!empty(Auth::user()->leader))
          <a class="btn btn-warning" href="{{url('groups/'.$group->id.'/edit')}}" role="button">Bewerken</a>
          @endif
        @endif
        @endguest
        
      </div>
    </div>
    <!-- /.row -->



  </div>
  <!-- /.container -->

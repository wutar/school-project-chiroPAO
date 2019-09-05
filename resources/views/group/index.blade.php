@extends('master')
@section('content')

<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Afdelingen
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">Afdelingen</li>
    </ol>
    <!-- Team Members -->
    <h2>Afdelingen</h2>  
    <div class="row">
     
      @foreach($groups as $group)
      <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
              <a href="{{url('/groups/'.$group->id)}}">
              <img class="card-img-top" src="{{asset('/img/'.$group->picture->id.'.'.$group->picture->extension)}}" alt="">
              </a>
              <div class="card-body">
              <h4 class="card-title">{{$group->name}}</h4>
              <p class="card-text">{{str_limit($group->description, 100)}}</p>
          </div>
          
          </div>
      </div>
      @endforeach

    </div>


   
  </div>
@endsection


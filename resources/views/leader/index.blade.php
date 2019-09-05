@extends('master')
@section('content')

<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Leiding
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">Leiding</li>
    </ol>

    <!-- Team Members -->
    <h2>Leiding</h2>

    @foreach($groups as $group)
    <a href="{{url('/groups/'.$group->id)}}"><h3>{{$group->name}}</h3></a>
      <div class="row">
          @foreach($group->leaders as $leader)
              <div class="col-lg-4 mb-4">
                  <div class="card h-100 text-center">
                  <img class="card-img-top" src="{{asset('/img/'.$leader->profilePicture['id'].'.'.$leader->profilePicture['extension'])}}" alt="">
                  <div class="card-body">
                      <h4 class="card-title">{{$leader->name.' '.$leader->familyname}}</h4>
                      <p class="card-text">{{str_limit($leader->resume, 100)}}</p>
                  </div>
                  <div class="card-footer">
                  <a href="{{url('/leaders/'.$leader->id)}}">lees meer</a>
                  </div>
                  </div>
              </div>
          @endforeach
      </div>

    @endforeach


  </div>
@endsection

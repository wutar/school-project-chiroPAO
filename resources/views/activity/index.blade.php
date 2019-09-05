@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Activiteiten</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{url('/activities')}}">Activiteiten</a>
      </li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        @auth
        @if(!empty(auth()->user()->leader))
            @if(auth()->user()->leader->group->id == $group->id)
            <a href="{{route('activity.new', $group->id)}}" class="btn btn-default">Nieuwe activiteit +</a>
            @endif
        @endif
        @endauth
        @foreach($group->activities as $activity)
            <div class="card mb-4">
                @if(count($activity->photos)>0 )
                <img class="card-img-top img-thumbnail" src="{{asset('/storage/img/'.$activity->photos->first->id->id.'.'.$activity->photos->first->extension->extension)}}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{$activity->title}}</h2>
                <p class="card-text">{{str_limit($activity->description, 100)}}</p>
                <a href="{{url('/groups/'.$group->id.'/activities/'.$activity->id.'/detail')}}" class="btn btn-primary">Lees meer &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Gepost op {{$activity->created_at}}
                </div>
            </div>
        @endforeach
        </div>
        <!-- Side Widget -->
        <div class="card col-md-4">
            <h5 class="card-header">Over de {{$group->name}}</h5>
          <div class="card-body">
            {{$group->description}}
        </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

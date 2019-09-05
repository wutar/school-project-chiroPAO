@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Evenementen</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{url('/events')}}">Evenementen</a>
      </li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        @foreach($events as $event)
            <div class="card mb-4">

                <div class="card-body">
                    <h2 class="card-title">{{$event->title}}</h2>
                <p class="card-text">{{str_limit($event->description, 100)}}</p>
                <a href="{{url('/events/'.$event->id.'/detail')}}" class="btn btn-primary">Lees meer &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Gepost op {{$event->created_at}}
                </div>
            </div>
        @endforeach
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

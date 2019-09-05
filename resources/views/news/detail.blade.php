@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">{{$article->title}}
      <small>by
      <a href="{{url("/leaders/".$article->author->id)}}">{{$article->author->name}}</a>
      </small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">Nieuws</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Gepost op {{$article->created_at}}</p>

        <hr>

        <!-- Post Content -->
      <p class=>{{$article->content}}</p>

      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
@endsection
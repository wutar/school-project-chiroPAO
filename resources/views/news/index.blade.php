@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3" style="padding-top:60px;">Nieuws
    <small>Heet van de naald</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="index.html">Nieuws</a>
    </li>
  </ol>


    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        @foreach( $articles as $article)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{str_limit($article->content, 100)}}</p>
          <a href="{{url('/news/'.$article->id)}}" class="btn btn-primary">Lees meer &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$article->created_at}} by
            <a href="#">{{$article->author->name}}</a>
          </div>
        </div>
        @endforeach



      </div>

    </div>
    <!-- /.row -->
    {{$articles->links()}}

  </div>
  <!-- /.container -->
@endsection

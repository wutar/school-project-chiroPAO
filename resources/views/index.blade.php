
@extends('master')
@section('content')
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('{{asset('/img/cover.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
          <h3>De grootste jeugdbeweging van Maldegem</h3>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('{{asset('/img/cover2.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
          <h3> De coolste jeugdbeweging van Maldegem </h3>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('{{asset('/img/cover3.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
                <h3> De beste jeugdbeweging van Maldegem </h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<div class="container">
<h1 class="my-4">Welkom bij Chiro Maldegem</h1>
    <!-- Marketing Icons Section -->
    <div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
        <h4 class="card-header">Wat doen we deze zondag?</h4>
        <div class="card-body">
            @if(!empty($groups) && count($groups)>0)
            @foreach($groups as $group)
                <p class="card-text"><strong>{{$group->name}}: </strong>{{$group->activities->first()->title}}</p>
            @endforeach
            @else
            <p class="card-text"> Geen groepen gevonden.</p>
            @endif
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
        <h4 class="card-header">Kalender</h4>
        <div class="card-body">
            @if(!empty($events)&& count($events)>0)
            @foreach($events as $event)
                <p><a href="{{url('/events/'.$event->id.'/detail')}}">{{$event->title}}: {{$event->date}} </a></p>
            @endforeach
            @else
            <p class="card-text"> Geen groepen gevonden.</p>
            @endif
        </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
        <h4 class="card-header">Nieuws</h4>
        <div class="card-body">
            @if(!empty($news)&& count($news)>0)
            <strong>{{$news[0]->title}}</strong>
            <p class="card-text">{{$news[0]->content}}</p>
            @else
            <p> Geen nieuws </p>
            </div>
            @endif
        <div class="card-footer">
        <a href="{{url('/news?page=1')}}" class="btn btn-primary">Meer nieuws</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection

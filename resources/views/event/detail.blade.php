@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">{{$event->title}}
      <small>
        op {{$event->date}}
      </small>
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item">
      <a href="{{url('/events')}}">Evenementen</a>
      </li>
      <li class="breadcrumb-item">
        {{$event->title}}
      </li>
    </ol>
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Date/Time -->
        <p>Gepost op {{$event->created_at}}</p>
        <hr>
        <!-- Post Content -->
        @if($event->description !== '')
            <p class=>{{$event->description}}</p>
        @else
            <p class=>Later meer hierover.</p>
        @endif
    </div>
    <!-- /.row -->
    @guest
    @else
    @if( count(Auth::user()->kids)>0 )
      <div class="row col-lg-12">
          <div class="row col-lg-9 clearfix">
              <h2>Schrijf je in!</h2>
          </div>
          <div class="col-lg-12">
              {{ Form::open(array('url' => '/events/'.$event->id.'/subscribe')) }}
              @foreach(Auth::user()->kids as $kid)
                <div class="form-check">
                    @if($kid->subscribed)
                      @if(! $event->kids->contains($kid->id))
                      {{$hasUnsubscribedKids = true}}
                      <input type="checkbox" class="form-check-input" name="{{$kid->id}}" id="{{$kid->name}}">
                      <label class="form-check-label" for="exampleCheck1">{{$kid->name}} {{$kid->familyname}} inschrijven voor {{$event->title}} </label>
                      @else
                        <p> {{$kid->name}} is reeds ingeschreven voor {{$event->title}} </p>
                      @endif
                    @else
                      <p> Gelieve {{$kid->name}} eerst in te schrijven voor het werkjaar!</p>
                    @endif
                </div>
              @endforeach
              @if(!empty($hasUnsubscribedKids))
              {!! Form::submit('Schrijf in', ['class' => 'btn btn-primary pull-right']) !!}
              @endif
              {{ Form::close() }}
          </div>
        </div>
      @endif
      @if(!empty(Auth::user()->leader))
        @if(Auth::user()->leader->event == $event)
        <div class="row col-lg-12" style="margin-top:20px">
            <a class="btn btn-warning" href="{{url('events/'.$event->id.'/edit')}}" role="button">Bewerken</a>
        </div>
        @endif
    @endif
    @endguest
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
@endsection

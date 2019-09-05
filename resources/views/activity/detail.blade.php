@guest
@else
@if( count(Auth::user()->kids->where('group_id', $activity->group->id))>0 || !empty(Auth::user()->leader) )

@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">{{$activity->title}}

    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="{{url('/groups')}}">Afdelingen</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="{{url('/groups/'.$activity->group->id)}}">
          {{$activity->group->name}}
        </a>
      </li>
      <li class="breadcrumb-item active">
          <a href="{{url('/groups/'.$activity->group->id.'/activities')}}">
            Activiteiten
          </a>
      </li>
      <li class="breadcrumb-item active">
          {{$activity->title}}
      </li>
    </ol>

    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Date/Time -->
        <p>Gepost op {{$activity->created_at}}</p>
        <hr>
        <!-- Post Content -->
      <p class=>{{$activity->description}}</p>
    </div>
    <!-- /.row -->
    @if(count($activity->photos)>0)
        <div class="row col-lg-12">
        <div class="row col-lg-9 clearfix">
            <h2>Foto's</h2>
        </div>
        <div class="row col-lg-9 clearfix">
            @foreach($activity->photos as $photo)
                <a href="{{url('/img/'.$photo->id.'.'.$photo->extension)}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-2">
                <img class="img-fluid" src="{{asset('/storage/img/'.$photo->id.'.'.$photo->extension)}}" alt="">
                </a>
                @endforeach
        </div>
        </div>
    @endif
    <div style="margin-top: 20px">
      <!-- /.row -->
      @auth
        @if(!empty(auth()->user()->leader))
            @if(Auth::user()->leader->group == $activity->group)
            <a class="btn btn-warning" href="{{url('groups/'.$activity->group->id.'/activities/'.$activity->id.'/edit')}}" role="button">Bewerken</a>
            @endif
        @endif
      @endauth
    </div>

  </div>
  <!-- /.container -->
</div>
@endsection

@endif
@endguest

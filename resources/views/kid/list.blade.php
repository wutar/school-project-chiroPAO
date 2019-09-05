@extends('master')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3" style="padding-top:60px">Ledenlijst.</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}">Home</a>
      </li>
      <li class="breadcrumb-item active">Ledenlijst</li>
    </ol>
    @foreach($groups as $group)
    <div class="row">
      <h2>{{$group->name}}</h2>
      <div class="row col-lg-12">
        @foreach($group->kids->sortBy('subscribed') as $kid)
        <div class="row col-lg-12">
            <p>{{$kid->name}}  {{$kid->familyname}}
                @foreach($kid->users as $parent)
                - tel. {{$parent->telephone}}
                - mail. {{$parent->email}}
                @endforeach
                @if($kid->subscribed) - ingeschreven
                @else - moet zich nog inschrijven
                @endif
            </p>
        </div>
        @endforeach
        </div>
    </div>
    @endforeach
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
@endsection

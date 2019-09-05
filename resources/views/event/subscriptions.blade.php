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
    @foreach($event->kids as $kid)
    <div class="row">
      <div class="row col-lg-12">
        <div class="row col-lg-12">
            <p>{{$kid->name}}  {{$kid->familyname}}
                @foreach($kid->users as $parent)
                - tel. {{$parent->telephone}}
                - mail. {{$parent->email}}
                @endforeach
            </p>
        </div>
        </div>
    </div>
    @endforeach
    @if(empty($event->kids))
        <p>Er zijn nog geen inschrijvingen binnen voor dit evenement. </p>
    @endif
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
@endsection

@extends('layouts.app')
@section('navbartitle')
Panel About Us
@endsection

@section('content')



<div class="section">
  @foreach($tester as $datas)
	<div><h5><center>About Us / ABOUT OUR COMPANY</center></h5></div>
</div>

<div class="row">
	<div class="container">
    <p>{!! $datas->isi !!}</p>
  </div>

      <center><a href="{{ url('add_about', $datas->id) }}"><button class="btn btn-primary">Update</button></a></center>
      @endforeach
		</div>

@endsection
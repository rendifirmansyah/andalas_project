@extends('layouts.app')
@section('navbartitle')
Panel About Us
@endsection

@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text"><h3><center><font color="#2579A9">About US</font></center></h3></div>
</div>

<div class="section">
	<form action="{{url('/update/about')}}" method="POST">
    {!! csrf_field() !!}
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="form-control" name="isi" id="textarea1" style="height:500px; width: 1000px; margin-left: 150px;background-color: #DCDCDC;">{{ $tampil->isi }}</textarea>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="id" value="{{$tampil->id}}">
      <center/><button type="submit" class="btn btn-default" style="margin-top:10px;">Submit</button>
</div>

<script>
  CKEDITOR.replace( 'textarea1' );
</script>
@endsection
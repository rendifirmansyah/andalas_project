@extends('layouts.index')
@section('title')
Home | Andalas Media
@endsection
@section('content')



<div class="slider">
	<ul class="slides">
		@foreach($slide as $g)
		@if($g->gambar_isi == '')
		{
			<li>
			<img src="{{url('home/'.$g->gambar_home)}}"> <!-- random image -->
			<div class="caption center-align" style="margin-top:1px;">
					<h2 class="orange-text">
						<b>{{$g->judul}}</b> 
					</h2>

				<div style="background-color:black; opacity: 0.8; height:auto; margin-left:200px; margin-right:200px;">
					<h5><b>{{$g->teks1}}</h5></b>
				</div>

				<div style="background-color:black; opacity: 0.8; height:auto; margin-left:200px; margin-right:200px;">
					<h5><b>{{$g->teks2}}</h5></b>
				</div>

			</div>

		</li>
		}
		@else{
		<li>
			<img src="{{url('home/'.$g->gambar_home)}}"> <!-- random image -->
			<div class="caption center-align" style="margin-top:1px;">
					<h2 class="orange-text">
						<b>{{$g->judul}}</b> 
					</h2>

				<div style="background-color:black; opacity: 0.8; height:auto; margin-left:200px; margin-right:200px;">
					<h5><b>{{$g->teks1}}</h5></b>
				</div>

				<div style="background-color:black; opacity: 0.8; height:auto; margin-left:200px; margin-right:200px;">
					<h5><b>{{$g->teks2}}</h5></b>
				</div>

				<img src="{{url('gamvar/'.$g->gambar_isi)}}" style="width: 276.752px;
    			height: 237px;">
				
			</div>

		</li>
		}
		@endif
		@endforeach



















		<!-- <li>
        <img src="bck/cvcv.jpg">
        <div class="caption center-align">
        <div style="background-color:#1C1C1F  ;
  border:1px solid black;
  opacity:0.6;  margin:0px 350px;">
  <h6>HI,WE'RE ANDALAS TEAM</h6>
  </div>
          <h2 style="margin:0px;">WE CREATE INCREDIBLE THING</h2>
          <h6  class="light grey-text text-lighten-4" style="margin: 0px;">We're a selected and professional team who are passionate about creating incredible products.
We have just great on making notable product and provide perfect solutions.
We also looking for collaborate with entrepreneurs worldwide.</h6>
 <img src="bck/human.png" style="width: 493.712px; height: 249.632px; margin-top: 0px;">

        </div>
      </li>
		<li>
			<img src="bck/ta.jpg"> 
			<div class="caption right-align">
				<img src="bck/jam.png" style="width: 324.811px; height: 278.4px; margin-top: 0px;">
				<h5 class="orange-text"></h5>
			</div>

			<div class="caption right-align">
				<div style="margin-right:595px;">ANDALAS MEDIA</div>
				<h3 style="margin-right:580px;">SERVICES</h3>
				<div style="margin-right: 595px;">NON STOP</div>
				<h3 style="margin-right:580px;">24 / 7</h3>
				<div style="margin-right: 595px;">For Our Clients
				Totally Professional</div>
			</div>
		</li>
		
	</ul> -->
</div>


<div class="container">
	<div class="row">
		<h2 class="center-align">Our Best Solution</h2>
		<hr width="100%" align="center" color="orange">
		
		@foreach($datas as $data)
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="{{url('images/'.$data->sampul)}}">
						<span class="card-title">{{$data->judul}}</span>
					</div>
					<div class="card-content">
						<p>{{$data->isi}}</p>
					</div>
					<div class="card-action">
						<a href="{{url('/produk')}}">Learn More</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
















@foreach($footer as $q)
<footer class="page-footer" style="background-color: #ef6c00">
	<div class="container">
		<div class="row">
			<p>{!! $q->isi !!}</p>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2018 Copyright Andalas Media
<!--             <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
-->            </div>
</div>
</footer>
@endforeach

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.parallax').parallax();
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').slider();
	});
</script>

@endsection


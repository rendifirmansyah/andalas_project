@extends('layouts.index')
@section('title')
About Us | Andalas Media
@endsection

@section('content')

<div class="section">
	<div class="card-panel orange darken-2 white-text center"><h5>About Us
/ ABOUT OUR COMPANY</h5></div>
</div>

 @foreach($tester as $datas)

<div class="row">
	<div class="container">
    <p>{!! $datas->isi !!}</p>
  </div>

@endforeach







@foreach($footer as $q)
<footer class="page-footer" style="background-color: #ef6c00">
		<div class="container">
			<div class="row">
				<p>{!!$q->isi!!}</p>
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


@endsection
@extends('layouts.index')
@section('title')
Partner | Andalas Media
@endsection

@section('content')

<div class="section">
	<div class="card-panel orange darken-2 white-text center"><h5>PARTNERS</h5></div>
</div>

<br>
<br>
<br>
<br>



<img src="bck/partner.jpg" style="width: 100%;">
<br>
<br>
<br>
<br>
<br>
<br>

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
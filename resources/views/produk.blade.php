@extends('layouts.index')
@section('title')
Produk | Andalas Media
@endsection
@section('content')

@foreach($produk as $pro)
<div class="section">
	<div class="card-panel orange darken-2 white-text center">
		<div  style="margin-right: 975px;">
		<h4><b>{{$pro->nama_produk}}</b></h4>
		</div>
	</div>
</div>

<div class="row">
	<div class="container">

		<p id="summary-ckeditor">{!!$pro->isi_produk!!}</p>

	</div>
</div>
@endforeach


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
			</div>
</div>
</footer>
@endforeach

@endsection

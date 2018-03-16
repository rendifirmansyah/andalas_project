@extends('layouts.app')
@section('navbartitle')
Tambah Produk
@endsection
@section('content')

<div class="container">
	<div class="row">
		<br><br>
<div class="row">
	<div class="container">
		<form action="{{url('save/update/produk')}}" method="POST">
			<div class="form-group">
			<label for="aa1">Nama Produk</label>
			<input type="text" class="form-control" id="aa1" name="namaproduk" placeholder="Nama Produk" value="{{$produk->nama_produk}}">
		</div>

		<div class="form-group">
			<label for="summary-ckeditor">Isian produk</label>
			<textarea class="form-control" name="isian" id="summary-ckeditor" required>{{$produk->isi_produk}}</textarea>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$produk->id}}">
		<button class="btn btn-primary" type="submit">Edit</button>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace( 'summary-ckeditor' );
</script>
	</div>
</div>

@endsection
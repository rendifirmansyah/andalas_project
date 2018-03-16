@extends('layouts.app')
@section('navbartitle')
Produk | Andalas Media
@endsection
@section('content')

<div class="row">
<div class="container">
		<a href="{{url('/panel_produk')}}"><button type="button" class="btn btn-primary">Tambah</button></a>
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Isi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produk as $pro)
				<tr>
					<td>{{$pro->nama_produk}}</td>
					<td id="summary-ckeditor">{!! $pro->isi_produk !!}</td>
					<td>
						<a href="{{url('produk/edit/'.$pro->id)}}" class="btn btn-link btn-sm">Edit</a><br>
						<a href="{{url('produk/delete/'.$pro->id)}}" class="btn btn-link btn-sm">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
<!-- <script>
	READ.replace( 'summary-ckeditor' );
</script> -->
@extends('layouts.app')
@section('navbartitle')
Gambar Home
@endsection

@section('content')

<div class="row">
	<div class="container">

		<a href="{{url('/panel_gambar')}}"><button type="button" class="btn btn-primary">Tambah</button></a>
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Isi</th>
					<th>Gambar Background</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produk as $pro)
				<tr>
					<td>{{$pro->judul}}</td>
					<td>{{$pro->teks1}}</td>
					<td><img src="{{url('home/'.$pro->gambar_home)}}" style="width: 550px;height: 100px;"></td>
					<td>
						<a href="{{url('gambar/delete/'.$pro->id)}}" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

		
		
	</div>
</div>










@endsection
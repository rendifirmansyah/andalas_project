@extends('layouts.app')
@section('navbartitle')
About | Andalas Media
@endsection
@section('content')

<div class="row">
<div class="container">
		
		<a href="{{url('/panel_footer')}}"><button type="button" class="btn btn-primary">Tambah</button></a>
		
		<table class="table">
			<thead>
				<tr>
					<th>Isi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produk as $pro)
				<tr>
					<td id="summary-ckeditor">{!! $pro->isi !!}</td>
					<td>
						<a href="{{url('footer/delete/'.$pro->id)}}" class="btn btn-link btn-sm">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
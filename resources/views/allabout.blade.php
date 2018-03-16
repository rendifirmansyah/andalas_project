@extends('layouts.app')
@section('navbartitle')
About | Andalas Media
@endsection
@section('content')

<div class="row">
<div class="container">

	@if ($produk == null)	
 <a href="{{url('/panel_about')}}" style="display:none"><button type="button" class="btn btn-primary">Tambah</button></a>
@else
 <a href="{{url('/panel_about')}}"><button type="button" class="btn btn-primary">Tambah</button></a>
@endif
		
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
						<a href="{{url('about/delete/'.$pro->id)}}" class="btn btn-link btn-sm">Hapus</a>
					</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
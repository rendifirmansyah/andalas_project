@extends('layouts.app')

@section('navbartitle')
Panel Footer
@endsection

	@section('content')
<br><br>
<div class="row">
	<div class="container">
		<form action="{{url('save/footer')}}" method="POST">
		<div class="form-group">
			<label for="summary-ckeditor">Isian Footer</label>
			<textarea class="form-control" name="namaproduk" id="summary-ckeditor" 
			class="summary-ckeditor" required>
			</textarea>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection






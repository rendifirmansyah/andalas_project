@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
<div role="tabpanel" class="tab-pane" id="profile">
					<form action="{{url('tambah_admin/post')}}" method="POST">
					<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama</label>
									<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">E-Mail</label>
									<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="E-Mail" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="Password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="exampleInputEmail1">Nomor Telpeon</label>
									<input type="text" class="form-control" name="no_telp" id="exampleInputEmail1" placeholder="Nomor telepon" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Alamat</label>
							<textarea class="form-control" name="alamat" rows="3" id="exampleInputPassword1" placeholder="Alamat"></textarea>
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				
				</div>
			</div>
		</div>
				@endsection
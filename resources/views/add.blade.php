@extends('layouts.app')

@section('navbartitle')
Panel Admin
@endsection

@section('content')

<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tambah Berita</a></li>
		<li role="presentation"><a href="#lul" aria-controls="lul" role="tab" data-toggle="tab">Data Berita</a></li>
		
	</ul>

	<!-- Tab panes -->
	<div class="row">
		<div class="container">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					@if (session('alert'))								
					<center>{{ session('alert') }}</center>
					@endif


					<form action="{{ url('post/berita') }}" method="POST" 
					enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Judul</label>
                           <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                       </div>
                   </div>
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Isi</label>
                 <textarea class="form-control" name="isi" rows="3" id="exampleInputPassword1" placeholder="Isian Berita"></textarea>
             </div>
             <div class="form-group">
                 <label for="exampleInputFile">File input</label>
                 <input type="file" name="sampul" id="exampleInputFile">
                 <p class="help-block">select images to upload in the news</p>
             </div>
             <button type="submit" class="btn btn-default">Submit</button>
         </form>
     </div>





     <br>
     <div role="tabpanel" class="tab-pane" id="lul">

        <form class="pure-form" role="form" method="get" action="{{ url('berita/search') }}">
            &nbsp;&nbsp;&nbsp;
            <input type="text" class="pure-input-rounded" name="query" placeholder="Cari berita" id="cari">
            <input type="hidden" name="search" value="1">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        
        <form action="{{ route('beritas.deleteSelectedBeritaAdd') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">

            <table class="table table-striped border-top" id="sample_1">
                <thead>
                    <tr>
                       <th style="width: 8px;">
                        <input type="checkbox" class="group-checkable" id="master" data-set="#sample_1 .checkboxes" />
                    </th>
                    <th>Judul Berita</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($datas as $data)
                <tr>
                 <td><input type="checkbox" name="beritas[]" class="checkboxes sub_chk" value="{{ $data->id }}" /></td>
                 <td>{{$data->judul}}</td>
                 <td><a href="{{url('edit_berita/edit/'.$data->id)}}">Edit</a>
                     <a href="{{url('delete/berita/'.$data->id)}}">Delete</a>
                 </td>
             </tr>
             @endforeach
             <div class="pull-right">
                <button class="btn btn-danger">Delete Selected</button>
            </div>
        </form>
    </tbody>
</table>
</div>










<!-- 				<div role="tabpanel" class="tab-pane" id="settings">...</div>
-->			</div>

</div>
</div>
</div>
<script type="text/javascript">

    $(document).ready(function () {


        $('#master').on('click', function(e) {

           if($(this).is(':checked',true))  

           {

            $(".sub_chk").prop('checked', true);  

        } else {  

            $(".sub_chk").prop('checked',false);  

        }  

    });

        $('#masterz').on('click', function(e) {

           if($(this).is(':checked',true))  

           {

            $(".sub_chkz").prop('checked', true);  

        } else {  

            $(".sub_chkz").prop('checked',false);  

        }  

    });


        $('.delete_all').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: $(this).data('url'),

                        type: 'DELETE',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {

                            if (data['success']) {

                                $(".sub_chk:checked").each(function() {  

                                    $(this).parents("tr").remove();

                                });

                                alert(data['success']);

                            } else if (data['error']) {

                                alert(data['error']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (data) {

                            alert(data.responseText);

                        }

                    });


                    $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();

                  });

                }  

            }  

        });


        $('[data-toggle=confirmation]').confirmation({

            rootSelector: '[data-toggle=confirmation]',

            onConfirm: function (event, element) {

                element.trigger('confirm');

            }

        });


        $(document).on('confirm', function (e) {

            var ele = e.target;

            e.preventDefault();


            $.ajax({

                url: ele.href,

                type: 'DELETE',

                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success: function (data) {

                    if (data['success']) {

                        $("#" + data['tr']).slideUp("slow");

                        alert(data['success']);

                    } else if (data['error']) {

                        alert(data['error']);

                    } else {

                        alert('Whoops Something went wrong!!');

                    }

                },

                error: function (data) {

                    alert(data.responseText);

                }

            });


            return false;

        });

    });

</script>
@endsection

<?php $__env->startSection('navbartitle'); ?>
Panel Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 





	<!-- Tab panes -->
	<div class="row">
		<div class="container">


			<div class="tab-content" >
				<br>
        <br>
         <form class="pure-form" role="form" method="get" action="<?php echo e(url('berita/search')); ?>">
                            &nbsp;&nbsp;&nbsp;
                            <input type="text" class="pure-input-rounded" name="query" placeholder="Cari berita" id="cari">
                            <input type="hidden" name="search" value="1">
                            <button type="submit" class="btn btn-primary">Cari</button>
                </form>
        <table class="table table-striped border-top" id="sample_1">
        <thead>									
						<form action="<?php echo e(route('beritas.deleteSelectedBerita')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="delete">    
            <tr>
                <th style="width: 8px;">
                    <input type="checkbox" class="group-checkable" id="master" />
                </th>                
                            <th>Judul Berita</th>
                            <th>action</th>
            </tr>
        </thead>
    <tbody>

    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="odd gradeX">
            <td><input type="checkbox" name="beritas[]" class="checkboxes sub_chk" value="<?php echo e($data->id); ?>" /></td>
            <td><?php echo e($data->judul); ?></td>
                        <td>

                         <a href="<?php echo e(url('delete',$data->id)); ?>" class="btn btn-danger btn-sm"

                           data-tr="tr_<?php echo e($data->id); ?>"

                           data-toggle="confirmation"

                           data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"

                           data-btn-ok-class="btn btn-sm btn-danger"

                           data-btn-cancel-label="Cancel"

                           data-btn-cancel-icon="fa fa-chevron-circle-left"

                           data-btn-cancel-class="btn btn-sm btn-default"

                           data-title="Are you sure you want to delete ?"

                           data-placement="left" data-singleton="true">

                            Delete

                        </a>
                        <a href="<?php echo e(url('edit',$data->id)); ?>" class="btn btn-success btn-sm">Edit</a>

                    </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
      <div class="pull-right">
      <a class="btn btn-success" href="<?php echo e(url('data_berita')); ?>">Tambah Data</a>&nbsp;
      <button class="btn btn-danger">Delete Selected</button>
  </div>
      <br>
    </form>
  </tbody>
</table>
</div>


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
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
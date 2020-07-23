@extends('layouts.master')

@section('title')

Services Category | By Alzahraa Products
@endsection

@section('content')
	  <div class="row">
      	<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   	<h4 class="card-title">Service Category
                      <a href="{{ url('service-create') }}" class="btn btn-primary float-rtight py-2">ADD</a>
                   	</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $item)
                            <tr>
                                <input type="hidden" class="serdelete_val" value="{{ $item->id }}">
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->service_name}}</td>
                                <td>{{ $item->service_description }}</td>
                                <td>
                                    <a href="{{ url('service-edit/' .$item->id) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-danger servideletbtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    
    $(document).ready(function () {

      $('.servideletbtn').click(function (e) {

          e.preventDefault();

          var delete_id = $(this).closest("tr").find('.serdelete_val_id').val();

          swal({

            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,

          }).then((willDelete) => {

              if(willDelete) {

                  var data = {
                      "_token": $('input[name_token]').val(),

                      "id": delete_id,
                  };
                  $.ajax({

                      type:"DELETE",
                      url:'/service-cate-delete/'+delete_id,
                      data: data,
                      success: function (response) {

                        swal(response.status , {
                            icon: "success", 
                        })
                        .then((result) => {
                            location.reload();
                        });
                 }
            });
         }
      });

    });

  });
</script>

@endsection


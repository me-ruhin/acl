@extends('backend.main.main')

@push('css')
    
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">


@endpush

@section('content')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Role</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lists</a></li>
                             
                        </ol>
                    </div>
                    <h4 class="page-title">Role Lists</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                       @include('backend.pages.errors')
                       @include('backend.pages.success')
                        <a href="{{route('admin.roles.create')}}" class="btn btn-danger waves-effect waves-light mb-2"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                      

                        <table id="table_id" class="display dt-bootstrap4">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($roles as $key => $role)
                                                                 
                                <tr>
                                    <td>{{$role->name}}</td>

                                    <td>
                                        @foreach ($role->permissions as $perm)
                                        <span class="badge badge-primary mr-1">
                                            {{ $perm->name }}
                                        </span>
                                    @endforeach

                                    </td>
                                    <td>
                                       
                                       
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Edit</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Delete</button>

                                    </td>
                                </tr>

                                @endforeach
                               
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
 

 
      
 
        
    </div> <!-- container -->

</div>

@endsection


@push('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endpush
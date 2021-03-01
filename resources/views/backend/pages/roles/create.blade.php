@extends('backend.main.main')

@push('css')
   

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">New</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Role</a></li>
                             
                        </ol>
                    </div>
                    <h4 class="page-title">Add New Role</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-md-12 col-lg-12">
                        <form action="{{route('admin.roles.store')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="simpleinput">Role's Name</label>
                                <input type="text" id="simpleinput" name="name" class="form-control" required>
                               
                                @error('name')
                                <span class="text-danger">{{$message}} </span>                              
                                    
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Permission lists</label> </hr>
                                 
                            </div>

                            
                            <div class="col-md-12 mb-3"> 
                             <div class ="row">

                                @foreach($permissions as $key=>$permission)

                                <div class="col-md-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="permissions[]" class="custom-control-input" id="customCheck_{{$key}}">
                                        <label class="custom-control-label" for="customCheck_{{$key}}"> {{$permission->name}}</label>
                                    </div>                                 
                                </div>
                                    
                                @endforeach
                                                               
                             </div>
                          
                            </div>
                           
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>

                            
                          

                        </form>
                    </div>

                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
 

 
      
 
        
    </div> <!-- container -->

</div>

@endsection


@push('js')

@endpush
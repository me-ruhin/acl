@if (Session::has('success'))
    <div class="alert col-md-6" >
       <div>
           
                
                <div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ Session::get('success') }} </strong>
                </div>

           
        </div>
    </div>
@endif

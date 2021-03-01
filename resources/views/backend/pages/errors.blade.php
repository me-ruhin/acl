@if ($errors->any())
    <div class="alert col-md-6" >
       <div>
            @foreach ($errors->all() as $error)
                
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ $error }} </strong>
                </div>

            @endforeach
        </div>
    </div>
@endif

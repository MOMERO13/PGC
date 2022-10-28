<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-{{$columnas??'8'}}">
            <div class="card">
                <div class="card-header">
                   <h3> {{$titulo?? ' '}} </h3>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{$slot}}


                 </div>
            </div>
        </div>
    </div>
</div>
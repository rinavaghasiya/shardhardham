@extends('Admins.header-footer')
@section('contant')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center mt-4">
                    <div class="col-xl-6 col-xxl-12">
                        <a href="{{url('showvideo')}}"><button type="submit" class="btn btn-success mb-4">SHOW VIDEO</button></a>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">EDIT VIDEO</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        <i class="fa-lg fa fa-warning"></i>
                                        {!! session('message') !!}
                                    </div>
                                    @elseif(Session::has('error'))
                                    <div class="alert alert-danger">
                                        <i class="fa-lg fa fa-warning"></i>
                                        {!! session('error') !!}
                                    </div>
                                    @endif
                                    
                                  <form class="form-horizontal" action="{{ url('updatevideo')}}" method="post" enctype='multipart/form-data'>
                                        {{ csrf_field() }}

                                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $data->id }}">
                                        <div class="form-group">
                                            <label for="">Video Title:</label>
                                            <input type="text" class="form-control input-default"  name="videotitle" id="videotitle" value="{{$data->videotitle}}" required>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="">Video Link:</label>
                                            <input type="text" class="form-control input-default"  name="videolink" id="videolink" value="{{$data->videolink}}" required>
                                        </div>
    
    
                                        <div class="form-group">
                                            <label for="">Video Status:</label><br>
                                            <input type="radio" class="input-default" name="status" id="status" value="live" {{ $data->status == 'live' ? 'checked' : ''}} required>  Live
                                            <input type="radio" class="input-default" name="status" id="status" value="normal" {{ $data->status == 'normal' ? 'checked' : ''}} required>  Normal
                                        </div>
    


                                        <button type="submit" class="btn btn-primary mb-2">EDIT</button>
                                        <button type="submit" class="btn btn-primary mb-2">CANCEL</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        
        <script type ="text/javascript">
        
      
            function readURL(input, imgControlName) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
    
                        $(imgControlName).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
    
            $("#imgInp").change(function() {
                var imgControlName = "#blah";
                readURL(this, imgControlName);
    
            });
        </script>
        
       


@endsection

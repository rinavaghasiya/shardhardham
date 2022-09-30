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
                    <a href="{{ url('showdailydarshan') }}"><button type="submit" class="btn btn-success mb-4">SHOW
                            VIDEO</button></a>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Video</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                @if (Session::has('message'))
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

                                <form class="form-horizontal" action="{{ url('insertvideo') }}" method="post"  enctype='multipart/form-data'>
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label for="">Video Title:</label>
                                        <input type="text" class="form-control input-default"  name="videotitle" id="videotitle" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Video Link:</label>
                                        <input type="text" class="form-control input-default"  name="videolink" id="videolink" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Video Status:</label><br>
                                        <input type="radio" class="input-default" name="status" id="status" value="live" required>  Live
                                        <input type="radio" class="input-default" name="status" id="status" value="normal" required>  Normal
                                    </div>


                                    
                                    {{-- <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="text" class="custom-file-input" name="videotitle" id="videotitle">
                                        
                                        </div>
                                       
                                    </div> --}}

                                    <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
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


    
@endsection

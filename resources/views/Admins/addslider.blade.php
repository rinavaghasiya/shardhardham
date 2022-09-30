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
                    <a href="{{ url('showslider') }}"><button type="submit" class="btn btn-success mb-4">SHOW
                            SLIDER</button></a>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Slider</h4>
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

                                <form class="form-horizontal" action="{{ url('insertslider') }}" method="post"  enctype='multipart/form-data'>
                                    {{ csrf_field() }}
                                    <label for="">Slider Image:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="slider_img" id="slider_img" data-preview-file-type="text"  accept=".png, .jpg, .jpeg">
                                           
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        {{-- <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div> --}}
                                    </div>
                                    <div class="input-group mb-3">
                                        <div id="slider_img_preview"></div>
                                    </div>

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


    <script type="text/javascript">
        $("#slider_img").change(function() {

            $('#slider_img_preview').html("");
            var total_file = document.getElementById("slider_img").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#slider_img_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) +
                    "' height='60' width='60' >");
            }
        });
    </script>
@endsection

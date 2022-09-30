@extends('Admins.header-footer')
@section('contant')

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="submit" class="btn btn-primary mb-2"><a href="{{url('addvideo')}}">Add Video</a> </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Link</th>
                                                <th>EDIT</th>
                                                <th>DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->videotitle}}</td>
                                                <td>{{$user->videolink}}</td>

                                               
                                                <td><a href="{{url('editvideo')}}/{{ $user->id }}"><button type="submit" class="btn btn-primary"><i class="mdi mdi-pencil"></i></button></a></td>
                                                <td><a href="{{url('deletevideo')}}/{{ $user->id }}"><button type="submit" class="btn btn-danger"><i class="mdi mdi-close"></i></button></a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

@endsection

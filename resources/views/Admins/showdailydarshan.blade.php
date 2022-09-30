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
                                <button type="submit" class="btn btn-primary mb-2"><a href="{{url('adddailydarshan')}}">Add Daily Image</a> </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>IMAGE</th>
                                                <th>EDIT</th>
                                                <th>DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td><img src="{{ url('dailydarshan_img')}}/{{$user->dailyimg}}" alt="" width="100px" height="100px" onclick="onClick(this)" class="modal-hover-opacity"></td>
                                                <td><a href="{{url('editdailydarshan')}}/{{ $user->id }}"><button type="submit" class="btn btn-primary"><i class="mdi mdi-pencil"></i></button></a></td>
                                                <td><a href="{{url('deletedailydarshan')}}/{{ $user->id }}"><button type="submit" class="btn btn-danger"><i class="mdi mdi-close"></i></button></a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>

                                        <div id="modal01" class="modal" onclick="this.style.display='none'">
                                            <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <div class="modal-content">
                                              <img id="img01" style="height: 600px !important;">
                                            </div>
                                        </div>


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
<script>
    function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

@endsection

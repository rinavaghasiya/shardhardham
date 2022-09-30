@extends('Admins.header-footer')
@section('contant')

 <!--**********************************   Content body start ***********************************-->
    
 <div class="content-body">
            <div class="container-fluid">
                {{-- counting section --}}
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Slider </div>
                                    
                                    <div class="stat-digit">4</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Daily Darshan</div>
                                 
                                    <div class="stat-digit">9</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Gallary Image</div>
                                    <div class="stat-digit">35</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- endcounting section --}}

                {{-- image section --}}
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>    
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div style="text-align: center;background: #e6e6e6;"> <img src="{{URL::asset('assets/client/img/mandir-image/bagasra front.png')}}" alt="" height="800px" width="800px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- end image section --}}
            </div>
        </div>
        <!--**********************************  Content body end  ***********************************-->
      
@endsection

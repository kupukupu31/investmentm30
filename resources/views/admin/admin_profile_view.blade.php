@extends('admin.admin_dashboard')
@section('admin')



                                            <div class="page-content">
                                            <div class="container-fluid">

                             <div class="row">
                            <div class="col-lg-6">
                            <div class="card"> <br><br>
                                <center>
                                    <img class="card-img-top img-fluid rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image))? url('{{ asset('backend/upload/admin_images/') }}'.$adminData->profile_image):url({{ asset('backend/upload/no_image.jpg') }}) }}" alt="Card image cap">
                                    </center>
                             <div class="card-body"><hr>
                                        <h4 class="card-title">Name : {{ $adminData->name }}</h4> <hr>
                                        <h4 class="card-title">Email : {{ $adminData->email }}</h4><hr>
                                        <h4 class="card-title">Username : {{ $adminData->username }}</h4><hr>
                                        <a href="{{route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light" >Edit Profile </a>
                                       
                                     
                            </div>
                            </div>
                            </div>
        
                             </div>
                            
        
                        






                                            </div>
                                            </div>


@endsection
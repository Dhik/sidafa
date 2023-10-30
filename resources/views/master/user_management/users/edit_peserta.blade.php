@extends('layouts.lay')

@section('content')

@foreach($users as $us)
<div class="col-sm-12">
        @if(!empty(\Session::get('success')) > 0)
                    <div class="alert alert-success">     
                        <strong>Sukses!</strong> {!! \Session::get('success') !!}             
                        </div>
                    @endif
                    @if(count($errors) > 0)
				<div class="alert alert-danger">
                <span class="close"><h3><b>&times;</b></h3></span>
                <center>
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
                </center>
				</div>
				@endif
                <script>
                    window.setTimeout(function() {
                    $.noConflict();
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                    }, 5000);
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                </div>
				
          <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="breadcrumbs-top">
                        <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                        <div class="breadcrumb-wrapper d-none d-sm-block">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item"><a href="<?php echo url("/"); ?>"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo url("/peserta"); ?>">Peserta Management</a>
                                </li>
                                <li class="breadcrumb-item active">Update
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <!-- Task Card Starts -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                  
                                <div class="card card-primary card-outline card-outline-tabs">
              
              <div class="card-body">
                <form class="form" action="<?php echo url("/update_peserta/$us->id"); ?>" method="POST" enctype="multipart/form-data">
                <!-- /.card-header -->
                {{csrf_field()}}
                <div class="card-body">
                  <div class="row">
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name *</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$us->name}}" required>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                            <label>email *</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$us->email}}" required>                  
                        </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                            <label>Password *</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="password">                  
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Role</label>
                        <select name='id_role' class="form-control select2bs4" style="width: 100%;">
                            <?php
                            $roles = DB::table('roles')
                                ->select('*')
                                ->get();
                            foreach ($roles as $name) {
                            ?> 
                            <option value='{{$name->id}}' {{$us->id_role ==  $name->id  ? 'selected' : ''}}>{{$name->role_user}}</option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                            <label>Jabatan *</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$us->jabatan}}" required>                  
                        </div>
                    </div>
                    <!-- /.col -->
                    
                    <div class="col-md-6">
                    <div class="form-group">
                            <label>Pangkat *</label>
                            <input type="text" class="form-control" id="pangkat" name="pangkat" value="{{$us->jabatan}}" required>                  
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                            <label>Instansi *</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value="{{$us->instansi}}" required>                  
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                            <label>Pemda *</label>
                            <input type="text" class="form-control" id="pemda" name="pemda" value="{{$us->pemda}}" required>                  
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                            <label>File *</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="file">                  
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-12">
                    <div class="form-group">             
                            <iframe src="{{asset('storage/tugas/'.$us->file)}}" width="100%" height="500" title="Iframe Example"></iframe> 
                          </div>
                    </div>
                    <!-- /.col -->
                    
					          <div class="col-12 col-sm-12">
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>       
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                 Kemendagri 
                </div>
              </div>
              <!-- /.card -->
              </form>
              </div>
              <!-- /.card -->
            </div>


                                </div>
                            </div>
                        </div>
                    </div>
      @endforeach
@endsection
@extends('layouts.lay')

@section('content')

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
                                <li class="breadcrumb-item"><a href="<?php echo url("/menu"); ?>">Menu Management</a>
                                </li>
                                <li class="breadcrumb-item active">Menus
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
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">

                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Menu</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Sub_menu</a>
                  </li>
                  
                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  <div class="card">
							<div class="card-header">
							<a class="btn btn-info btn-sm" href="<?php echo url('/add_menu'); ?>">
							<div style="width: 30px; height: 30px;"><i class="menu-livicon" data-icon="plus-alt"></i></div>
							</a>
							</div>
											
							<!-- /.card-header -->
							<div class="card-body">
								<table id="next" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Status</th>
									<th style="width:10%">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php $no=0; ?> 
							@foreach($menu as $lk)
							<?php $no++; ?>
								<tr>
									<td>{{$no}}</td>
									<td>{{$lk->name}} </td>
									<td>{{$lk->status}}</td>
									<td>
									<a class="btn btn-info btn-sm" href="<?php echo url('/edit_menu/'.$lk->id); ?>">
									<i class="menu-livicon" data-icon="pencil">
											</i>
										</a>
                                            
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
							</div>
							<!-- /.card-body -->
							</div>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  
                  <div class="card">
							<div class="card-header">
							<a class="btn btn-info btn-sm" href="<?php echo url('/add_sub'); ?>">
							<div style="width: 30px; height: 30px;"><i class="menu-livicon" data-icon="plus-alt"></i></div>
										</a>
							</div>
											
							<!-- /.card-header -->
							<div class="card-body">
								<table id="next2" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>Menu</th>
									<th>Sub Menu</th>
									<th style="width:10%">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php $no=0; ?> 
							@foreach($sub_menu as $r)
							<?php $no++; ?>
								<tr>
									<td>{{$r->menu}}</td>
									<td>{{$r->sub_menu}}</td>
									<td> 
									<a class="btn btn-info btn-sm" href="<?php echo url('/edit_sub/'.$r->id); ?>">
									<i class="menu-livicon" data-icon="pencil"></i>
										</a>
                                        
                                            						
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
							</div>
							<!-- /.card-body -->
							</div>
                
                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
            </div>


                                </div>
                            </div>
                        </div>
                    </div>
@endsection
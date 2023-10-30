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
                                <li class="breadcrumb-item"><a href="<?php echo url("/embed"); ?>">Embed Management</a>
                                </li>
                                <li class="breadcrumb-item active">Embed
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
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Embeded</a>
                  </li>

                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  <div class="card">
							<div class="card-header">
							<a class="btn btn-info btn-sm" href="<?php echo url('/add_embed'); ?>">
							<div style="width: 30px; height: 30px;"><i class="menu-livicon" data-icon="plus-alt"></i></div>
							</a>
							</div>
											
							<!-- /.card-header -->
							<div class="card-body">
								<table id="next" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>No</th>
									<th>Menu</th>
									<th>Sub Menu</th>
									<th>Name</th>
									<th>Status</th>
									<th style="width:10%">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php $no=0; ?> 
							@foreach($embed as $lk)
							<?php $no++; ?>
								<tr>
									<td>{{$no}}</td>
									<td>{{$lk->menu}} </td>
									<td>{{$lk->sub_menu}} </td>
									<td>{{$lk->name}} </td>
									<td>{{$lk->status}}</td>
									<td>
									<a class="btn btn-info btn-sm" href="<?php echo url('/edit_embed/'.$lk->id); ?>">
									Edit
										</a>
                                        <button type="button" class="btn btn-danger btn-sm confirmation" data-toggle="modal" data-target="#myModalroles{{$lk->id}}">
                                            Hapus</div>
                                        </button>
										<!-- Modal -->
                                                <div class="modal fade" id="myModalroles{{$lk->id}}" role="dialog">
												<div class="modal-dialog">
												
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
													<h4 class="modal-title">Apakah Anda Yakin menghapus data Embed {{$lk->name}}..?</h4>
													</div>
													<div class="modal-footer">
													<a href="<?php echo url('/embed/destroy/'.$lk->id); ?>" class="btn btn-danger btn-sm confirmation" >Hapus Data</a>
														
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
												
												</div>
											</div>    
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
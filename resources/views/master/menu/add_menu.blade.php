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
                                <li class="breadcrumb-item active">Menus Add
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
                <form class="form" action="<?php echo url("/menu/create"); ?>" method="POST" enctype="multipart/form-data">
                <!-- /.card-header -->
                {{csrf_field()}}
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Menus Name *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Menu" required>
                      </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-12">
                    <div class="form-group">
                            <label>Status *</label>
                            <select name='status' class="form-control select2bs4" style="width: 100%;">
                            
                            <option value='1'>Aktif</option>
                            <option value='0'>Off</option>
                            
                        </select>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <input type="radio" id="icon" name="icons" value="box">
                    <label for="html">box <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="box"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="plus-alt">
                    <label for="html">plus <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="plus-alt"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="image">
                    <label for="html">image <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="image"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="home">
                    <label for="html">home <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="home"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="leaf">
                    <label for="html">leaf <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="leaf"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="map">
                    <label for="html">map <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="map"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="location">
                    <label for="html">location <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="location"></i></div></label><br>
                    </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                    <div class="form-group">
                    <input type="radio" id="icon" name="icons" value="building">
                    <label for="html">building <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="building"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="shield">
                    <label for="html">shield <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="shield"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="idea">
                    <label for="html">idea <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="image"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="cpu">
                    <label for="html">cpu <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="cpu"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="credit-card-in">
                    <label for="html">credit-card-in <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="credit-card-in"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="diagram">
                    <label for="html">diagram <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="diagram"></i></div></label><br>
                    
                    <input type="radio" id="icon" name="icons" value="coins">
                    <label for="html">coins <div style="width: 20px; height: 20px;"><i class="menu-livicon" data-icon="coins"></i></div></label><br>
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
                 FORTECH 
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
@endsection
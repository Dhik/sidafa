@extends('layouts.lay')

@section('content')
@foreach($embed as $us)
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
                                <li class="breadcrumb-item"><a href="<?php echo url("/embed"); ?>">Konten Management</a>
                                </li>
                                <li class="breadcrumb-item active">Konten Edit
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
                <form class="form" action="<?php echo url("/update_embed/".$us->id); ?>" method="POST" enctype="multipart/form-data">
                <!-- /.card-header -->
                {{csrf_field()}}
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Menus Name *</label>
                        <select class="form-control" name="menu" id="menu">
                            @foreach ($menu as $itema) 
                            <option value="{{ $itema->id }}" {{$us->id_menu ==  $itema->id  ? 'selected' : ''}}>{{ $itema->name }}</option>
                            @endforeach
                        </select>    
                    </div>
                    </div>
                    <!-- /.col -->
                    
                    <div class="col-md-6">
                    <div class="form-group">
                    <label class="form-label">Sub Menu </label>
                    <select class="form-control" name="sub_menu">
                            @foreach ($smenu as $items)
                            <option value="{{ $items->id }}" {{$us->id_sub_menu ==  $items->id  ? 'selected' : ''}}>{{ $items->name }}</option>
                            @endforeach
                        </select> 
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-label">Name </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$us->name}}" required>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-label">Iframe </label>
                    <textarea class="form-control" name="iframe" id="iframe" required>{{$us->iframe}}</textarea>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-label">Konten </label><br/>
                    <textarea class="form-control" name="content" id="test" required>{{$us->keterangan}}</textarea>
                    </div></div>
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
                 CSIRT MA IT DEVELOPMENT TEAMS 
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

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
            $('#category').on('change', function() {
               var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/getCourse/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#course').empty();
                            $('#course').append('<option hidden>Choose Sub Menu</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="course"]').append('<option value="'+ course.id +'">' + course.name+ '</option>');
                            });
                        }else{
                            $('#course').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });
        </script>
@endforeach
@endsection
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SiDafa</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>'
  <link rel="stylesheet" href="{{url('/assets/style.css')}}">
  
  <meta name="keywords" content="FORTECH">
    <meta name="author" content="ANGGA IBNU SAPUTRA">
    <title>FORTECH DATA ANALYTIC</title>
    <link rel="apple-touch-icon" href="{{url('images/index.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/index.png')}}">

</head>
<body>
<!-- partial:index.partial.html -->
@yield('content')
<div class="menuContent"><a class="slider"></a>
  <ul id="nav">
  <img class="img" width="15%" src="{{url('images/index.png')}}">
  <?php 
                 $menu = \DB::table('menu')
                 ->select('id','name','icons')
                 ->where('status','=',1)
                 ->get();
                 ?>
                 @foreach($menu as $m)
    <li>
      <ul id="{{$m->id}}">
      <?php 
                    $smenu = \DB::table('embed')
                    ->join('menu', 'menu.id', '=', 'embed.id_menu')
                    ->join('sub_menu', 'sub_menu.id', '=', 'embed.id_sub_menu')
                    ->select('menu.name as menu','sub_menu.name as sub_menu','sub_menu.id as id_sub_menu',
                    'embed.name as name','embed.iframe as iframe','embed.status as status',
                    'embed.id as id','embed.keterangan as keterangan')
                    ->where('embed.id_menu','=',$m->id)
                    ->get();
                    ?>
                    @foreach($smenu as $sm)
                    <?php 
                    $count = \DB::table('sub_menu')
                    ->select('id','name')
                    ->where('id','=',$sm->id_sub_menu)
                    ->count();
                    ?>
                    @if($count < 0)

                    @else
        <li><a href="<?php echo url('/analysis/'.$sm->id); ?>">{{$sm->name}}</a></li>
                    @endif
                    @endforeach
      </ul><a class="sub" href="#" tabindex="{{$m->id}}">{{$m->name}}</a>
    </li>
    @endforeach

  </ul>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script  src="{{url('/assets/script.js')}}"></script>

</body>
</html>

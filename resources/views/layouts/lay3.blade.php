<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SiDafa</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>'
  <link rel="stylesheet" href="{{url('/assets/style.css')}}">
  
  <meta name="keywords" content="Kemendagri">
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
  <a href="<?php echo url('/'); ?>">
  <img class="img" width="15%" src="{{url('images/index.png')}}">
  </a>
    <li>
      <ul id="1">
                  <?php 
                    $cctv = \DB::table('cctv_jogja')
                    ->select('location')
                    ->groupBy('location')
                    ->get();
                    ?>
                    @foreach($cctv as $c)
        <li><a href="<?php echo url('/cctv/'.$c->location); ?>">{{$c->location}}</a></li>           
                    @endforeach        
      </ul><a class="sub" href="#" tabindex="1">Survilance</a>
    </li>

    <li>
      <ul id="2">
                  <?php 
                    $smenu = \DB::table('embed')
                    ->select('*')
                    ->get();
                    ?>
                    @foreach($smenu as $sm)
        <li><a href="<?php echo url('/analysis/'.$sm->id); ?>">{{$sm->name}}</a></li>           
                    @endforeach        
      </ul><a class="sub" href="#" tabindex="2">Media Sosial</a>
    </li>

  </ul>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script  src="{{url('/assets/script.js')}}"></script>
</body>
</html>

@extends('layouts.lay')

@section('body')

<link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">  
                    <div class="row">                  
@foreach($dafa as $us)
                        <!-- Task Card Starts -->            
                        <div class="col-xs-12 col-sm-3 widget-container-col" id="widget-container-col-3">
                        <div class="widget-box">
												<div class="widget-header">
													<h5 class="widget-title smaller">{{$us->name}}</h5>
												</div>

                        
                                                         <!-- HTML -->
                                                        <video id='{{$us->idc}}'  class="video-js" autoplay="false" width="300" height="150" controls>
                                                        <source  src="{{$us->cctv}}">
                                                        </video> 


                                                        <!-- JS code -->
                                                        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
                                                        <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
                                                        <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

                                                        <script>
                                                        var player = videojs('{{$us->idc}}');
                                                        player.play();
                                                        </script>
              
											</div> 
                        </div>                                
@endforeach
                    </div>     
@endsection
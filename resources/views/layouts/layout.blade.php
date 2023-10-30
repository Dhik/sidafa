<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SiDafa</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{url('/assets3/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{url('/assets3/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{url('/assets3/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{url('/assets3/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

		<link rel="stylesheet" href="{{url('/assets3/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{url('/assets3/css/ace-rtl.min.css')}}" />

        <script src="{{url('/assets3/js/ace-extra.min.js')}}"></script>
            
        <link rel="apple-touch-icon" href="{{url('images/index.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{url('images/index.png')}}">

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="<?php echo url('/'); ?>" class="navbar-brand">
						<small>
							<img class="img" width="10%" src="{{url('images/index.png')}}">
						</small>
					</a>

                    <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>

				</div>

				
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="
                    @if(Request::getRequestUri() == '/')
                    active
                    @endif
                    hover">
						<a href="<?php echo url('/'); ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> DASHBOARD </span>
						</a>

						<b class="arrow"></b>
					</li>

                    <li class="
                    @if(Request::getRequestUri() == '/cctv/cctv-kota')
                            active
                            @endif

                            @if(Request::getRequestUri() == '/cctv2')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-sleman')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-bantul')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-sungai')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-kp')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-kominfosleman')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-uptmallioboro')
                            active
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-public')
                            active
                            @endif 

                     open hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-video-camera"></i>
							<span class="menu-text">
								SURVILANCE
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="open hover">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									JOGJA
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
							
                                    <li class="hover">
                                    <?php 
                                        $cctv = \DB::table('cctv_jogja')
                                        ->select('location')
                                        ->groupBy('location')
                                        ->get();
                                        ?>
                                        @foreach($cctv as $c)
                                        <a href="<?php echo url('/cctv/'.$c->location); ?>">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            {{$c->location}}
                                        </a>
                                        @endforeach
                                        <b class="arrow"></b>
                                    </li>
                                    
                                </ul>

							</li>

                            <li class="
                            @if(Request::getRequestUri() == '/cctv2')
                            active
                            @endif
                            open hover">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									TOL JAKARTA
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
							
                                    <li class="hover">
                                        <a href="<?php echo url('/cctv2'); ?>">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Tol Dalam Kota Jakarta
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    
                                </ul>

							</li>

						</ul>

					</li>
					
					<li class="
                    @if (Request::getRequestUri() == '/analysis/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-globe"></i>
							<span class="menu-text"> MEDIA SOSIAL </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
                            <?php 
                    $smenu = \DB::table('embed')
                    ->select('*')
                    ->where('status','=',1)
                    ->get();
                    ?>
                    @foreach($smenu as $sm)  
								<a href="<?php echo url('/analysis/'.$sm->id); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									{{$sm->name}}
								</a>
                    @endforeach      
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					
					<li class="
                    @if(Request::getRequestUri() == '/kepegawaian')
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> KEPEGAWAIAN </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
								<a href="<?php echo url('/kepegawaian'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kepegawaian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

                    <li class="
                    @if (Request::getRequestUri() == '/lingkungan/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-leaf"></i>
							<span class="menu-text"> LINGKUNGAN HIDUP </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
                            <?php 
                    $ling = \DB::table('embed')
                    ->select('*')
                    ->where('status','=',2)
                    ->get();
                    ?>
                    @foreach($ling as $l)  
								<a href="<?php echo url('/lingkungan/'.$l->id); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									{{$l->name}}
								</a>
                    @endforeach      
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

                    <li class="
                    @if (Request::getRequestUri() == '/hukum/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-gavel"></i>
							<span class="menu-text"> HUKUM </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
                            <?php 
                    $ling = \DB::table('embed')
                    ->select('*')
                    ->where('status','=',3)
                    ->get();
                    ?>
                    @foreach($ling as $l)  
								<a href="<?php echo url('/hukum/'.$l->id); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									{{$l->name}}
								</a>
                    @endforeach      
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

                    <li class="
                    @if (Request::getRequestUri() == '/perumahan')
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> PERUMAHAN </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
                            
                                    <a href="<?php echo url('/perumahan'); ?>">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Perumahan Rakyat
                                    </a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

                    <li class="
                    @if (Request::getRequestUri() == '/politik')
                    active
                    @endif
                    hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bar-chart-o"></i>
							<span class="menu-text"> POLITIK </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="hover">
                            
                                    <a href="<?php echo url('/politik'); ?>">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Analysis Pemilu 2024
                                    </a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
                            
                                    <a href="<?php echo url('/politik2'); ?>">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Analysis Presiden 2024
                                    </a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
                            @if(Request::getRequestUri() == '/')
                            Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Sistem Informasi Data Fortech
								</small>
                            @endif
                            @if(Request::getRequestUri() == '/cctv/cctv-kota')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV KOTA YOGYAKARTA
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-sleman')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV SLEMAN
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-bantul')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV BANTUL
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-sungai')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV SUNGAI DIY
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-kp')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV KULON PROGO
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-kominfosleman')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV KOMINFOSLEMAN
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-uptmallioboro')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV MALIOBORO
								</small>
                            @endif
                            
                            @if(Request::getRequestUri() == '/cctv/cctv-public')
                            CCTV
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									CCTV PUBLIK DIY
								</small>
                            @endif 
                            @if (Request::getRequestUri() == '/hukum/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                            HUKUM
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kebijakan, Putusan dan Analisis Hukum
								</small>
                            @endif
                            @if (Request::getRequestUri() == '/lingkungan/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                            LINGKUNGAN
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kebijakan, Informasi dan Analisis Lingkungan
								</small>
                            @endif
                            @if (Request::getRequestUri() == '/analysis/'.preg_replace('/[^0-9]/', '', \Request::getRequestUri()))
                            MEDIA SOSIAL DAN ONLINE
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Twitter,Instagram,Facebook,News, Anymore
								</small>
                            @endif
                            @if (Request::getRequestUri() == '/kepegawaian')
                            KEPEGAWAIAN
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kebijakan, Informasi dan Analisis Pegawai
								</small>
                            @endif
                            @if (Request::getRequestUri() == '/perumahan')
                            PERUMAHAN
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kebijakan, Informasi dan Analisis Perumahan Rakyat
								</small>
                            @endif
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

								<div class="fix">
                                @yield('content')
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Fortech</span>
							SiDafa &copy; 2023
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{url('/assets3/js/jquery-2.1.4.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets3/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{url('/assets3/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
		</script>
		<script src="{{url('/assets3/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{url('/assets3/js/ace-elements.min.js')}}"></script>
		<script src="{{url('/assets3/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>

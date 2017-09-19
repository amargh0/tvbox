<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>TVBOX</title>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<link rel='stylesheet' id='all_css-css' href='<?php echo e(asset('/assets/css/all.min.css?ver=4.7.5')); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='boostrap_css-css' href='<?php echo e(asset("/assets/css/bootstrap.min.css?ver=4.7.5")); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='style_css-css' href='<?php echo e(asset("/assets/css/style.css')); ?>' type='text/css'/>
	<link rel='stylesheet' id='main_css-css' href='<?php echo e(asset("/assets/css/main.css?ver=4.7.5")); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='awesome_css-css' href='<?php echo e(asset("/assets/icons/css/font-awesome.min.css?ver=4.7.5")); ?>' type='text/css' media='all' />
	<script type='text/javascript' src='<?php echo e(asset("/assets/inc/js/assets1.min.js?ver=4.7.5")); ?>'></script>
</head>





<body>
<div id="xmain">
	<!--header-->


	<header>
		<div class="container">
			<div class="header-logo">
				<h1>
					<a title="Watch TV Online Free" href="#" id="logo">Watch TV Online Free</a>
				</h1>
			</div>
			<div class="mobile-menu"><i class="fa fa-reorder"></i></div>
			<div id="menu">
				<ul class="top-menu">
					<li>
						<a href="#" title="Home">
							<span class="li-text">Sport</span>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</header>





</div><div class="header-pad"></div>
<!-- main -->
<div id="main" class="page-detail page-watch ">
	<div class="container">
		<div class="pad"></div>
		<div class="main-content main-detail type-tvseries">
			<div class="md-top">
				<div id="bread">

				</div>
				<div class="content-kuss">

				</div>
				<div id="player-area">
					<div class="pa-main">
						<div id="content-embed" class="cssload-2x cssload-center video-container" style="display: block;">

							<iframe id="iframe-embed" width="100%" height="500" scrolling="no" frameborder="0" src="" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
						</div>
						<div id="bar-player">
            <span id="btn-favorite">
				<a  class="btn bp-btn-like" href="javascript:void(0)" data-target="#pop-auth" data-toggle="modal" title="Add to favorite"><i class="fa fa-heart"></i> Favorite</a>
			</span>
							<a class="btn bp-btn-report" style="color: #fff000; float: right"><i class="fa fa-warning"></i> Report</a>
							<div class="clearfix"></div>
						</div>
						<div id="favorite-alert" style="display: none;">
							<div class="alert alert-success" role="alert">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
								<i class="fa fa-check"></i> <span id="favorite-message"></span>
								<a target="_blank" href="http://spacemov.io/user/movies/favorite" title="Your favorite" class="alert-link">your favorite.</a>
							</div>
						</div>
					</div>
					<div class="pa-server">
						<div class="pas-header">
							<div class="pash-title">
								<i>SPORT</i>
							</div>
						</div>



						<div class="pas-list">
							<div id="loading-episodes" style="background: #141414; display: none;" class="cssload-center cssload-2x">
								<div class="cssload"><span></span></div>
							</div>
							<ul class="list-episodes ps-container hidden" id="episodes-server-1" data-episodes="4316|3911">
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
									<div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
								</div>
								<div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
									<div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
								</div>


							</ul>
							<ul class="list-episodes ps-container active">
								<?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<li onclick="load_episode_iframe" class="episode-item" data-drive="https://putload.tv/embed-iz7w3m45beiz.html">
									<a>
										<i class="icon-play_arrow"></i><?php echo e($channel->channelname); ?>

									</a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								<div id="episode-list" data-episodes_list="4316,3911"></div>
								<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
									<div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
								</div>
								<div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
									<div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
								</div>
							</ul>

						</div>





						<script type="text/javascript">
                            function load_episode_iframe(e, s){
                                if(s == 10){
                                    $("#iframe-embed").attr("src", $("#episodes-server-"+s+" #episode-"+ e).data("drive"));
                                    $(".playing-on").text("Server 1");
                                }
                                else if(s == 1){
                                    $("#iframe-embed").attr("src", $("#episodes-server-"+s+" #episode-"+ e).data("openload"));
                                    $(".playing-on").text("Server Openload");
                                }
                                window.history.pushState(null, null, '?episode_id=' + e);
                                var episodesss =  $('#episodes-server-'+s).data("episodes");
                                var myArray = episodesss.split("|");
                                for(var i=0; i<myArray.length; i++) {
                                    $("#episodes-server-1 #episode-"+myArray[i]).removeClass("active");
                                    $("#episodes-server-10 #episode-"+myArray[i]).removeClass("active");
                                }
                                $("#episodes-server-"+s+" #episode-"+e).addClass("active");
                            }
                            $(document).ready(function () {
                                load_episode_iframe(3911,10);
                                if (!jQuery.browser.mobile) {
                                    $('.pas-list ul').perfectScrollbar();
                                }

                            });

						</script>

					</div>
					<div class="clearfix"></div>
				</div>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-1 footer-block1"></div>
				<div id="copyright">
					<p><a href="" id="logo-footer" ></a></p>
					<p>Copyright © <a href="http://spacemov.io" title="SpaceMov.io">SpaceMov.io</a>. All Rights
						Reserved , <a href="http://spacemov.io/dmca/">DMCA</a></p>
					<p style="font-size: 11px; line-height: 14px;">Disclaimer: This site does not store any files on its
						server. All contents are provided by non-affiliated third parties. Contact Spacemovadm@gmail.com</p>
				</div>
			</div>
		</div>
</footer>
<!--/footer-->
</div>

<script type="text/javascript" src="../../public/assets/inc/js/decrypted_player-v1.js"></script>
</body>
</html>

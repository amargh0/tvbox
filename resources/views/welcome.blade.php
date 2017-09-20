{{--<!DOCTYPE html>--}}
{{--<html lang="en-US">--}}
{{--<head>--}}
    {{--<script src="{{asset('assets/videojs/video.js')}}"></script>--}}
    {{--<script src="{{asset('assets/inc/js/videojs-contrib-hls.js')}}"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('assets/videojs/video-js.css')}}">--}}
    {{--<title>TVBOX</title>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, minimal-ui, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>--}}
    {{--<meta http-equiv="content-language" content="en"/>--}}
    {{--<link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}"/>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/jquery-1.9.1.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/jquery.cookie.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset("assets/inc/js/md5.min.js")}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/jquery.lazyload.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset("assets/inc/js/jquery.hover-intent.js")}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/jquery.qtip.min.js')}}"></script>--}}
{{--?    <script type="text/javascript" src="{{asset('assets/inc/js/bootstrap-select.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/detectmobilebrowser.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/psbar.jquery.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/jquery.smooth-scroll.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/inc/js/star-rating.js')}}"></script>--}}
    {{--<link rel='stylesheet' id='all_css-css' href='{{asset('assets/css/all.min.css')}}' type='text/css' media='all'/>--}}
    {{--<link rel='stylesheet' id='boostrap_css-css' href='{{asset('assets/css/bootstrap.min.css')}}' type='text/css'--}}
          {{--media='all'/>--}}
    {{--<link rel='stylesheet' id='style_css-css' href='{{asset('assets/css/style.css')}}' type='text/css' media='all'/>--}}
    {{--<link rel='stylesheet' id='main_css-css' href='{{asset('assets/css/main.css')}}' type='text/css' media='all'/>--}}
    {{--<link rel='stylesheet' id='awesome_css-css' href='{{asset('assets/icons/css/font-awesome.min.css')}}' type='text/css'--}}
          {{--media='all'/>--}}
    {{--<script type='text/javascript' src='{{asset('assets/inc/js/assets1.min.js')}}'></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="xmain">--}}
    {{--<header>--}}
        {{--<div class="container">--}}
            {{--<div class="header-logo">--}}
                {{--<h1>--}}
                    {{--<a title="Watch TV Online Free" href="#" id="logo">Watch TV Online Free</a>--}}
                {{--</h1>--}}
            {{--</div>--}}
            {{--<div class="mobile-menu"><i class="fa fa-reorder"></i></div>--}}
            {{--<div id="menu">--}}
                {{--<ul class="top-menu">--}}
                    {{--@foreach($sections as $section)--}}
                    {{--<li>--}}
                        {{--<a href="#" title="Home">--}}
                            {{--<span class="li-text">{{ $section->section }}</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</header>--}}
  {{--<div class="pas-header">--}}
{{--</div>--}}
{{--<div class="header-pad">--}}

{{--</div>--}}
{{--<!-- main -->--}}
{{--<div id="main" class="page-detail page-watch ">--}}
    {{--<div class="container">--}}
        {{--<div class="pad"></div>--}}
        {{--<div class="main-content main-detail type-tvseries">--}}
            {{--<div class="md-top">--}}
                {{--<div id="bread">--}}

                {{--</div>--}}
                {{--<div class="content-kuss">--}}

                {{--</div>--}}
                {{--<div id="player-area">--}}
                    {{--<div class="pa-main">--}}
                        {{--<div>--}}
                            {{--<video id="iframe-embed" width="100%" height="500"--}}
                                   {{--class="video-js vjs-fluid vjs-default-skin  vjs-big-play-centered " controls--}}
                                   {{--preload="auto"--}}
                                   {{--data-setup="">--}}
                                {{--<source src="rtmp://semerkandglb.mediatriple.net:1935/semerkandliveedge/_definst_/semerkand1" type="application/x-mpegURL">--}}
                            {{--</video>--}}
                            {{--<!--<iframe id="iframe-embed" width="100%" height="500" scrolling="no" frameborder="0" src="" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">-->--}}


                            {{--<!--</iframe>-->--}}
                        {{--</div>--}}
                        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.10.1/videojs-contrib-hls.js"></script>--}}
                        {{--<div id="bar-player">--}}
            {{--<span id="btn-favorite">--}}
				{{--<a class="btn bp-btn-like" href="javascript:void(0)" data-target="#pop-auth" data-toggle="modal"--}}
                   {{--title="Add to favorite"><i class="fa fa-heart"></i> Favorite</a>--}}
			{{--</span>--}}
                            {{--<a class="btn bp-btn-report" style="color: #fff000; float: right"><i--}}
                                        {{--class="fa fa-warning"></i> Report</a>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div id="favorite-alert" style="display: none;">--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>--}}
                                {{--<i class="fa fa-check"></i> <span id="favorite-message"></span>--}}
                                {{--<a target="_blank" href="http://spacemov.io/user/movies/favorite" title="Your favorite"--}}
                                   {{--class="alert-link">your favorite.</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pa-server">--}}
                        {{--<div class="pas-header">--}}
                            {{--<div class="pash-title">--}}
                                {{--<i>SPORT</i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="pas-list">--}}
                            {{--<ul class="list-episodes ps-container hidden" >--}}
                                {{--<div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">--}}
                                    {{--<small class="date"><i class="fa fa-"></i></small>--}}
                                    {{--<div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>--}}
                                {{--</div>--}}
                            {{--</ul>--}}
                            {{--<ul class="list-episodes ps-container active">--}}
                                {{--<li class="episode-item">--}}
                                    {{--<a><i class="icon-play_arrow"></i>Bein Sport 1HD</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}

                        {{--</div>--}}




                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                {{--<footer>--}}
                    {{--<div id="footer">--}}
                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-1 footer-block1"></div>--}}
                                {{--<div id="copyright">--}}
                                    {{--<p><a href="" id="logo-footer"></a></p>--}}
                                    {{--<p>Copyright © <a href="http://spacemov.io" title="SpaceMov.io">SpaceMov.io</a>. All--}}
                                        {{--Rights--}}
                                        {{--Reserved , <a href="http://spacemov.io/dmca/">DMCA</a></p>--}}
                                    {{--<p style="font-size: 11px; line-height: 14px;">Disclaimer: This site does not store--}}
                                        {{--any files on its--}}
                                        {{--server. All contents are provided by non-affiliated third parties. Contact--}}
                                        {{--Spacemovadm@gmail.com</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</footer>--}}
                {{--<!--/footer-->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}

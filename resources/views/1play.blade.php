@include('player.header')

<div class="container-fluid">
    <!--documents-->
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>Channel List</b></li>
                @foreach($channels as $channel)
                <li class="list-group-item"><a href="{{$channel->id}}"><i class="glyphicon glyphicon-certificate"></i>{{ $channel->channelname }} </a></li>
                @endforeach

            </ul>
        </div>

        <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Channels</h3>
                </div>



<div id="playerjxJRqLMFuJaA_wrapper" style="position: relative; display: block; width: 100%; height: 490px;">
    <a id="beforeswfanchor0" href="#playerjxJRqLMFuJaA" tabindex="0" title="Flash start" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="playerjxJRqLMFuJaA"></a>

    <object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/12/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="playerjxJRqLMFuJaA" name="playerjxJRqLMFuJaA" class="jwswf swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" tabindex="0">
        <param name="allowfullscreen" value="true">
        <param name="allowscriptaccess" value="always">
        <param name="seamlesstabbing" value="true">
        <param name="wmode" value="opaque">
    </object>

    <a id="afterswfanchor0" href="#playerjxJRqLMFuJaA" tabindex="0" title="Flash end" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="playerjxJRqLMFuJaA"></a>

    <div id="playerjxJRqLMFuJaA_aspect" style="display: none;">
    </div>

    <div id="playerjxJRqLMFuJaA_jwpsrv" style="position: absolute; top: 0px; z-index: 10;"><div class="afs_ads" style="width: 1px; height: 1px; position: absolute; background: transparent;">&nbsp;
        </div>
    </div>

    <script data-cfasync="false" type="text/javascript">
        jwplayer('playerjxJRqLMFuJaA').setup({
            file: '{{ $ulchannels->ulchannel }}',
            aboutlink: 'http://skysports.com',
            controls: 'true',
            title: '{{ $ulchannels->channelname }}',
            width: '100%',
            height: '490',
            stretching: 'uniform',
            autostart: 'true',
            primary: 'flash',
            skin: 'vapor',
            androidhls: 'true',
        });
    </script>


@include('player.footer')


@include('player.header')

@include('player.sidebar')



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
            file: 'http://stream.elcld.com:6001/ch25/smil:adaptive/stream.m3u8',
            aboutlink: 'http://skysports.com',
            controls: 'true',
            title: 'BINE SPORT',
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


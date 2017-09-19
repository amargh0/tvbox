
@include('adminpanel.head')
@include('adminpanel.header')
@include('adminpanel.sidebar')

<section id="main-content">
  <section class="wrapper">
    <section class="panel">
      <header class="panel-heading">
        Form Elements
      </header>
      <input type="hidden" name="X-CSRF-TOKEN" id="" value="{{ csrf_token() }}">
      <div class="panel-body">
        <form class="form-horizontal bucket-form" action="{{ asset('/channel/store') }}" method="post">
          <div class="form-group">
            <label class="col-sm-3 control-label">Channel Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="channelname" id="" placeholder="Channel Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Ul Channel</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="ulchannel" id="" placeholder="Ul Channel">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Section</label>
            <div class="col-sm-6">
              <select name="section" class="form-control input-lg m-bot15">
                @foreach($sections as $section)

                <option  value="{{$section->id}}">{{ $section->section }}</option>
                  @endforeach
              </select>
            </div>
          </div>

          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-danger">submit</button>
          </div>
     </div>
        </form>
      </div>
    </section>
@include('adminpanel.footer')

{{--@include('player.header')--}}

{{--@include('incloud.sidebar')--}}
{{--<div class="content-row">--}}

  {{--<div class="panel panel-default">--}}

      {{--<div class="panel-options">--}}
        {{--<a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>--}}
        {{--<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>--}}
        {{--<a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>--}}
      {{--</div>--}}
    {{--</div>--}}
    {{--<input type="hidden" name="X-CSRF-TOKEN" id="" value="{{ csrf_token() }}">--}}


  {{--<div class="panel-body">--}}
      {{--<form action="{{ asset('/channel/store') }}" method="post">--}}



        {{--<div class="form-group">--}}
          {{--<label for="exampleInputEmail1">Channel Name</label>--}}
          {{--<input type="text" class="form-control" name="channelname" id="exampleInputEmail1" placeholder="Channel Name">--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
          {{--<label for="exampleInputPassword1">UlChannel</label>--}}
          {{--<input type="text" class="form-control" name="ulchannel" id="exampleInputPassword1" placeholder="Ul Channel">--}}
        {{--</div>--}}

        {{--<button type="submit" class="btn btn-default">Submit</button>--}}
      {{--</form>--}}
    {{--</div>--}}
  {{--</div>--}}

{{--</div>--}}

{{--@include("player.footer");--}}
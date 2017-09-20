
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
        <form class="form-horizontal bucket-form" action="{{ asset('/channel/update/'.$ch->id) }}" method="post">
          <div class="form-group">
            <label class="col-sm-3 control-label">Channel Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="channelname" id="exampleInputEmail1" value="{{$ch->channelname}}" placeholder="Channel Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Ul Channel</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="ulchannel" id="exampleInputPassword1" value="{{$ch->ulchannel}}" placeholder="Ul Channel">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Ul Channel</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="section" id="exampleInputPassword1" value="{{$ch->section}}" placeholder="Ul Channel">
            </div>
          </div>
          {{--<div class="form-group">--}}
            {{--<label class="col-sm-3 control-label">Section</label>--}}
            {{--<div class="col-sm-6">--}}
              {{----}}
              {{--<select name="section" class="form-control input-lg m-bot15">--}}
                {{--@foreach($sections as $section)--}}

                  {{--<option  value="{{$se->$section}}">{{ $section->section }}</option>--}}
                {{--@endforeach--}}
              {{--</select>--}}
            {{--</div>--}}
          {{--</div>--}}

          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-danger">submit</button>
          </div>
       </div>
      </form>
      </div>
    </section>
@include('adminpanel.footer')

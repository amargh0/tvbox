
@include('incloud.header');

@include('incloud.sidebar')






<div class="content-row">

  <div class="panel panel-default">

      <div class="panel-options">
        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
      </div>
    </div>

    <div class="panel-body">
      <form action="{{ asset('/channel/store') }}" method="post">



        <div class="form-group">
          <label for="exampleInputEmail1">Channel Name</label>
          <input type="text" class="form-control" name="channelname" id="exampleInputEmail1" placeholder="Channel Name">
        </div>

        {{ csrf_token() }}
        <div class="form-group">
          <label for="exampleInputPassword1">UlChannel</label>
          <input type="text" class="form-control" name="ulchannel" id="exampleInputPassword1" placeholder="Ul Channel">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">UlChannel</label>
          <input type="text" class="form-control" name="profile" id="exampleInputPassword1" placeholder="Profile">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>

</div>

@include("incloud.footer");
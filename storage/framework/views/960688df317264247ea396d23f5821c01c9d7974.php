
<?php echo $__env->make('player.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

<?php echo $__env->make('incloud.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>






<div class="content-row">

  <div class="panel panel-default">

      <div class="panel-options">
        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
      </div>
    </div>

    <div class="panel-body">
      <form action="<?php echo e(asset('/channel/store')); ?>" method="post">



        <div class="form-group">
          <label for="exampleInputEmail1">Channel Name</label>
          <input type="text" class="form-control" name="channelname" id="exampleInputEmail1" placeholder="Channel Name">
        </div>

        <?php echo e(csrf_token()); ?>

        <div class="form-group">
          <label for="exampleInputPassword1">UlChannel</label>
          <input type="text" class="form-control" name="ulchannel" id="exampleInputPassword1" placeholder="Ul Channel">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>

</div>

<?php echo $__env->make("player.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
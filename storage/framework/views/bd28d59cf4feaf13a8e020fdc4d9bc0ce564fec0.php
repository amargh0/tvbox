
<?php echo $__env->make('player.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('incloud.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="row">
  <div class="col-md-12">
    <a href="<?php echo e(asset('/channel/create')); ?>" class="btn btn-default">Create</a>
  </div>
</div>
            <div class="bs-example">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Channel Name</th>
                              <th>Ul Channel</th>
                              <th>Edit</th>



                            </tr>
                          </thead>

                          <tbody>
                          <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($channel->channelname); ?></td>
                              <td><?php echo e($channel->ulchannel); ?></td>
                              <td>
                                <a class="fa fa-pencil-square-o fa-2x" href="/channel/edit/<?php echo e($channel->id); ?>" ></a>
                                <a class="fa fa-trash-o fa-2x"  href="/channel/delete/<?php echo e($channel->id); ?>" onclick=""></a>
                              </td>

                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>




  </body>

</html>

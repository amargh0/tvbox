<?php echo $__env->make('adminpanel.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          Responsive Table
        </div>
        <div class="row w3-res-tb">
          <div class="col-sm-5 m-b-xs">
            <a href="<?php echo e(asset('/channel/create')); ?>" class="btn btn-default">Create</a>
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-3">
            <div class="input-group">
              <input type="text" class="input-sm form-control" placeholder="Search">
              <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped b-t b-light">
            <thead>
            <tr>
              <th>Ul Channel</th>
              <th>Name</th>
              <th>Section</th>
              <th style="width:30px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($channel->ulchannel); ?></td>
              <td><?php echo e($channel->channelname); ?></td>
              <td><?php echo e($channel->gh->section); ?></td>
              <td>
                <a class="fa fa-check text-success text-active" href="/channel/edit/<?php echo e($channel->id); ?>" ></a>
                <a class="fa fa-times text-danger text"  href="/channel/delete/<?php echo e($channel->id); ?>" onclick=""></a>
              </td>
            </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <footer class="panel-footer">
          <div class="row">
            <div class="col-sm-5 text-center">
              <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">
              <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </section>
<?php echo $__env->make('adminpanel.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
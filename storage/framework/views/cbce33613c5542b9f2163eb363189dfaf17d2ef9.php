
<?php echo $__env->make('adminpanel.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section id="main-content">
  <section class="wrapper">
    <section class="panel">
      <header class="panel-heading">
        Form Elements
      </header>
      <input type="hidden" name="X-CSRF-TOKEN" id="" value="<?php echo e(csrf_token()); ?>">
      <div class="panel-body">
        <form class="form-horizontal bucket-form" action="<?php echo e(asset('/channel/store')); ?>" method="post">
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
                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option  value="<?php echo e($section->id); ?>"><?php echo e($section->section); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('adminpanel.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>






  

      
        
        
        
      
    
    


  
      



        
          
          
        

        
          
          
        

        
      
    
  





<?php echo $__env->make('adminpanel.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpanel.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Form Elements
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" action="<?php echo e(asset('/section/update/'.$se->id)); ?>" method="post">
                    <input type="hidden" name="X-CSRF-TOKEN" id="" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Section</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="section" id="exampleInputEmail1" value="<?php echo e($se->section); ?>" placeholder="section">
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">submit</button>
                    </div>
                </form>
            </div>
        </section>
<?php echo $__env->make('adminpanel.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

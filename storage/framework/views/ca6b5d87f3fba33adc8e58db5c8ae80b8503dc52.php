

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-10 text-center ftco-animate">
        <h2 class="pb-3 font-weight-bold">FAQ</h2>
      </div>
    </div>
    <div class="row p-5">
     
      <div id="accordion">
         <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
          <div class="card-header" id="headingOne">
            <h3 class="mb-0">
              <button class="btn btn-link text-danger font-weight-bold" style="width: auto" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <?php echo e($f->pertanyaan); ?>

              </button>
            </h3>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <?php echo e($f->jawaban); ?>

            </div>
          </div>
        </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/faq/index.blade.php ENDPATH**/ ?>
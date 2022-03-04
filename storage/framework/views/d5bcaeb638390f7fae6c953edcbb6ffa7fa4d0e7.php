<?php if (isset($component)) { $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\App::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\App::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->slot("header"); ?>
          <h1> إضافة إدارة جديدة  </h1> 
           <a href=""> <button class="back"> <i class="fa-solid fa-angle-right"></i>  </button>  </a>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot("content"); ?>
    <div class="form-card">
        <form action="/managments/save_new" method="POST" >
             <?php echo csrf_field(); ?>
            <div class="form-header">
                <div class="form-options">
                    <button type="submit" > حفظ </button>
                </div>
                <div class="form-title">
                    <h3> إضافة إدارة </h3>
                </div>
            </div>
  
             <div class="input-area">
                  <label for="name"> إسم الادارة </label>
                  <input type="text" id="name" name="name" autofocus >
             </div>
         </form>
    </div>
       

    <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8)): ?>
<?php $component = $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8; ?>
<?php unset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8); ?>
<?php endif; ?><?php /**PATH E:\orders-managment\resources\views//managments/add.blade.php ENDPATH**/ ?>
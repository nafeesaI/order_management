<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
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
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /home/khunfoshary/Documents/projects/Nafisa/orders-managment/resources/views//managments/add.blade.php ENDPATH**/ ?>
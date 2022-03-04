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
          <h1> الإدارات </h1> 
           <a></a>
           
    <?php $__env->endSlot(); ?>

    <?php $__env->slot("content"); ?>
    <div class="list-card">
        
            <div class="list-header">
                <div class="list-options">
                  <a href="/managments/add"><button type="button" >  إضافة إدارة جديدة  </button> </a>  
                </div>
                <div class="list-title">
                    <h3>  قائـمة الادارات </h3>
                </div>
            </div>

            <div class="list" >
                <?php $__currentLoopData = $managments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <div class="item">

                        <div class="item-options">
                            <a href="/managments/delete/<?php echo e($mana->id); ?>"><button type="button" class="dele fa fa-trash "> </button> </a>  
                            <a href="/managments/edit/<?php echo e($mana->id); ?>"><button type="button" class="edit fa fa-edit "> </button> </a>  

                        </div>

                        <a href="managments/info/<?php echo e($mana->id); ?>">
                            <div class="item-title">
                                <h3> <?php echo e($mana->name); ?> </h3>
                            </div>
                        </a>

                    </div>
            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
    </div>
       

    <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8)): ?>
<?php $component = $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8; ?>
<?php unset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8); ?>
<?php endif; ?><?php /**PATH E:\orders-managment\resources\views//managments/index.blade.php ENDPATH**/ ?>
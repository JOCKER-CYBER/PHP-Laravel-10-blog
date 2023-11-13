<article class="flex max-w-xl flex-col items-start justify-between">
        <div class="pb-2"><img src="<?php echo e($post->getThumbnail()); ?>" alt="<?php echo e($post->title); ?>" class="object-contain"></div>
        <div class="flex items-center mx-[5%] sm:mx-0 gap-x-4 text-xs">
            <p class="font-semibold text-gray-900">
                <?php echo e($post->user->name); ?>,
            </p>
          <time class="text-gray-500"><?php echo e($post->getFormattedDate()); ?> | <?php echo e($post->human_read_time); ?></time>
          <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('by-category', $category)); ?>" class="relative z-10 rounded-lg bg-black px-3 py-1.5 font-medium text-white hover:bg-stone-700"><?php echo e($category->title); ?></a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="group relative mx-[5%] sm:mx-0">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="<?php echo e(route('view', $post)); ?>">
              <span class="absolute"></span>
              <?php echo e($post->title); ?>

            </a>
          </h3>
          <a href="<?php echo e(route('view', $post)); ?>" class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php echo e($post->shortBody()); ?></a>
        </div>
        <div class="relative mt-8 flex items-center gap-x-6 sm:gap-x-4">
          <div class="text-sm leading-6">
          </div>
          <a href="<?php echo e(route('view', $post)); ?>" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
        </div>
</article>
<?php /**PATH F:\xampp\htdocs\blog\resources\views/components/post-item.blade.php ENDPATH**/ ?>
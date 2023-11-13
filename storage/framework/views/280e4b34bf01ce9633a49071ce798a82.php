<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['metaDescription' => 'A journey into professional website development practices.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php $__env->startSection('type', "article"); ?>
<!-- CHANGE THESE URLs INTO YOUR DOMAIN ADDRESS -->
              <?php $__env->startSection('url', "http://127.0.0.1"); ?>
              <?php $__env->startSection('image', "http://127.0.0.1/storage/post2-small.jpg"); ?>
              <?php $__env->startSection('width', "1200"); ?>
              <?php $__env->startSection('height', "630"); ?>
<div class="container max-w-7xl mx-auto py-6">

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Latest Post -->
            <div class="col-span-2 sm:mx-0 mx-[5%]">
                <h2 class="text-lg sm:text-2xl font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                    Latest Post
                </h2>

                <?php if($latestPost): ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-item','data' => ['post' => $latestPost]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($latestPost)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- Popular 3 post -->
            <div>
                <h2 class="text-lg sm:text-2xl sm:mx-0 mx-[5%] font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                    Popular Posts
                </h2>
                <?php $__currentLoopData = $popularPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <a href="<?php echo e(route('view', $post)); ?>" class="pt-1 sm:ml-0 ml-[15px]">
                            <img src="<?php echo e($post->getThumbnail()); ?>" alt="<?php echo e($post->title); ?>"/>
                        </a>
                        <div class="col-span-3">
                            <a href="<?php echo e(route('view', $post)); ?>">
                                <h3 class="text-sm uppercase whitespace-nowrap truncate"><?php echo e($post->title); ?></h3>
                            </a>
                            <div class="flex gap-4 mb-2">
                            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="#" class="bg-black text-white p-1 rounded text-xs font-bold uppercase">
                                        <?php echo e($category->title); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="text-xs">
                                <?php echo e($post->shortBody(10)); ?>

                            </div>
                            <a href="<?php echo e(route('view', $post)); ?>" class="text-xs uppercase text-gray-800 hover:text-black">Continue
                                Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Recommended posts -->
        <div class="mb-8">
            <h2 class="sm:mx-0 mx-[5%] text-lg sm:text-2xl font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                Recommended Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gap-3">
               <?php $__currentLoopData = $recommendedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-item','data' => ['post' => $post,'showAuthor' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'show-author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH F:\xampp\htdocs\blog\resources\views/welcome.blade.php ENDPATH**/ ?>
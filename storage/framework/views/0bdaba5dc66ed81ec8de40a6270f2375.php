<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['metaTitle' => $post->meta_title ?: $post->title,'metaDescription' => $post->meta_description] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php $__env->startSection('type', "article"); ?>
              <?php $__env->startSection('meta_description', $post->meta_description); ?>
              <?php $__env->startSection('url', "http://127.0.0.1/$post->slug"); ?>
              <?php $__env->startSection('image', "http://127.0.0.1/storage/$post->thumbnail"); ?>
              <?php $__env->startSection('width', "1200"); ?>
              <?php $__env->startSection('height', "630"); ?>
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">

            <article class="flex flex-col shadow my-4">
                <h1 class="text-4xl font-bold self-center text-center hover:text-gray-700 pb-4">
                        <?php echo e($post->title); ?>

                </h1>
                <!-- Article Image -->
                    <img src="<?php echo e($post->getThumbnail()); ?>">
                <div class="bg-white flex flex-col justify-start p-6">
                    <div class="flex gap-4">
                        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                                <?php echo e($category->title); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800"><?php echo e($post->user->name); ?></a>, Published on
                        <?php echo e($post->getFormattedDate()); ?> | <?php echo e($post->human_read_time); ?>

                    </p>
                    <div>
                        <?php echo $post->body; ?>

                    </div>

                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('upvote-downvote', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, 'fctxOfd', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <div class="w-1/2">
                    <?php if($prev): ?>
                        <a href="<?php echo e(route('view', $prev)); ?>"
                           class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center">
                                <i class="fas fa-arrow-left pr-1"></i>
                                Previous
                            </p>
                            <p class="pt-2"><?php echo e(\Illuminate\Support\Str::words($prev->title, 5)); ?></p>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="w-1/2">
                    <?php if($next): ?>
                        <a href="<?php echo e(route('view', $next)); ?>"
                           class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next
                                <i
                                    class="fas fa-arrow-right pl-1"></i></p>
                            <p class="pt-2">
                                <?php echo e(\Illuminate\Support\Str::words($next->title, 5)); ?>

                            </p>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </section>

        <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH F:\xampp\htdocs\blog\resources\views/post/view.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="text-center font-['Consolas']">
        <div class="text-7xl italic max-[640px]:text-4xl" style="text-shadow: 3px 3px 5px gray;">
            Otávio A. Castro<br>
        </div>
        
        <div class="justify-items-center">
            <img src="assets/svg.png" alt="" class="max-w-[90%]"/>
        </div>
        <div class="txt-animado mt-2 text-4xl max-[640px]:text-lg justify-items-center">
            <div class="text-center flex">
                >DESENVOLVEDOR<pre><span class="relative"></span></pre>
            </div>
        </div>
    </div>

    <div class="flex justify-center px-10 max-h-[500px]">
        <img class="h-[500px] invert max-[640px]:hidden rotate-[270deg] z-0" src="assets/tech_bg_cut.png" alt="">
        <div class="h-[500px] content-center relative z-10 justify-items-center">
            <div class="border-8 border-white size-96 max-[640px]:size-64 rounded-full overflow-hidden">
                <img src="assets/me_pb-min.png" alt="">
            </div>
        </div>
        <img class="h-[500px] invert max-[640px]:hidden rotate-[90deg]" src="assets/tech_bg_cut.png" alt="">
    </div>

    <div class="flex justify-evenly min-h-20 font-trend-sans-one text-xl max-[640px]:text-sm">
        <a class="link-block text-center content-center" href="aboutme">
            Sobre Mim
        </a>
        <a class="link-block text-center content-center" href="academicbackground">
            Formações
        </a>
        <a class="link-block text-center content-center" href="projects">
            Projetos
        </a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\estudos\portfolio\resources\views/index.blade.php ENDPATH**/ ?>
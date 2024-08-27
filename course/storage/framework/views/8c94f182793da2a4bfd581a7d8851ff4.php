<!doctype html>
<html class="no-js" lang="en" dir=<?php echo e(isRtl() ? 'rtl' : ''); ?>>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?>

    </title>
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php echo e(Settings('site_name')); ?>">
    <meta itemprop="description" content="<?php echo e(Settings('meta_description')); ?>">
    <meta itemprop="image" content="<?php echo e(asset(Settings('logo') )); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e(Settings('site_title')); ?>">
    <meta property="og:description" content="<?php echo e(Settings('meta_description')); ?>">
    <meta property="og:image" content="<?php echo e(asset(Settings('logo') )); ?>"/>
    <meta property="og:image:type" content="image/png"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(getCourseImage(Settings('favicon') )); ?>">


    <?php if (isset($component)) { $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c = $component; } ?>
<?php $component = App\View\Components\FrontendDynamicStyleColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-dynamic-style-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontendDynamicStyleColor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c)): ?>
<?php $component = $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c; ?>
<?php unset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9 = $component; } ?>
<?php $component = App\View\Components\BackendDynamicColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-dynamic-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BackendDynamicColor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9)): ?>
<?php $component = $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9; ?>
<?php unset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9); ?>
<?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/fluidplayer.min.css">

    
    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?>"/>
    <?php if(isRtl()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.rtl.min.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.min.css">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/fontawesome.css ">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?>"/>
    <?php if(isRtl()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style_rtl.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style.css">
    <?php endif; ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/common.js<?php echo e(assetVersion()); ?>"></script>
    
    <?php echo $__env->yieldContent('css'); ?>
    <script>
        $(document).on("click", ".play_toggle_btn", function () {
            $('.courseListPlayer').toggleClass("active");
            $('.course_fullview_wrapper').toggleClass("active");
            $('.floating-title').fadeToggle('fast')
        });
        $(document).ready(function () {
            const height = $('.header_area').height();
            $('.course_fullview_wrapper .course__play_warp, .course_fullview_wrapper').css('--top', height + 'px');
            $('.mobile_display_content').css('margin-top', height + 35);
            $('.floating-title').css('top', height);


        });


    </script>
</head>

<body>

<?php echo $__env->make('preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/fluidplayer.min.js"></script>
<input type="hidden" name="base_url" class="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">


<?php echo $__env->yieldContent('mainContent'); ?>

<!-- FOOTER::END  -->
<!-- shoping_cart::start  -->
<div class="shoping_wrapper">
    <div class="dark_overlay"></div>
    <div class="shoping_cart">
        <div class="shoping_cart_inner">
            <div class="cart_header d-flex justify-content-between">
                <h4><?php echo e(__('frontend.Shoping Cart')); ?></h4>
                <div class="chart_close">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div id="cartView">
                <div class="single_cart">
                    <h4><?php echo e(__('frontend.No Item into cart')); ?></h4>
                </div>
            </div>


        </div>
        <div class="view_checkout_btn d-flex justify-content-end " style="display: none!important;">
            <a href="<?php echo e(url('my-cart')); ?>" class="theme_btn small_btn3 mr_10"><?php echo e(__('frontend.View cart')); ?></a>
            <a href="<?php echo e(route('CheckOut')); ?>" class="theme_btn small_btn3"><?php echo e(__('frontend.Checkout')); ?></a>
        </div>
    </div>
</div>


<!-- UP_ICON  -->
<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>

<?php if(auth()->guard()->check()): ?>
    <?php if((int)Settings('device_limit_time')!=0): ?>
        <?php if(\Illuminate\Support\Facades\Auth::user()->role_id==3): ?>
            <script>
                function update() {
                    $.ajax({
                        type: 'GET',
                        url: "<?php echo e(url('/')); ?>" + "/update-activity",
                        success: function (data) {


                        }
                    });
                }

                var intervel = "<?php echo e(Settings('device_limit_time')); ?>"
                var time = (intervel * 60) - 20;

                setInterval(function () {
                    update();
                }, time * 1000);

            </script>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>


<script>
    setTimeout(function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();

        });
    }, 0);
</script>
<?php echo Toastr::message(); ?>

<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/layouts/full_screen_master.blade.php ENDPATH**/ ?>
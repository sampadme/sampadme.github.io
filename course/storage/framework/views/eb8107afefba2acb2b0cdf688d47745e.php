<?php if(isset($result)): ?>
    <?php
        $total =0;
        $courses =[];
        foreach ($result as $key => $value) {
            if ($value->discount_price!=null){
                $price=(int)$value->discount_price;
            }else{
                $price=(int)$value->price;
            }

            if ((request()->get('price')=='paid' && $price==0) || (request()->get('price')=='free' && $price!=0)){
                continue;
            }
            $total++;
            $courses[] = $value;
        }
    ?>
    <duv class="row">

        <div class="col-12">
            <div class="box_header d-flex flex-wrap align-items-center justify-content-between">
                <h5 class="font_16 f_w_500 mb_30"><?php echo e(translatedNumber($total)); ?>

                    <?php if(Route::current()->getName() == 'courses'): ?>
                        <?php echo e(__('frontend.Courses are found')); ?>

                    <?php elseif(Route::current()->getName() == 'quizzes'): ?>
                        <?php echo e(__('frontend.Quizzes are found')); ?>

                    <?php elseif(Route::current()->getName() == 'classes'): ?>
                        <?php echo e(__('frontend.Classes are found')); ?>

                    <?php else: ?>
                        <?php echo e(__('frontend.Topics are found')); ?>

                    <?php endif; ?>
                </h5>
                <div class="box_header_right mb_30">
                    <div class="short_select d-flex align-items-center">
                        <div class="mobile_filter mr_10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="13"
                                 viewBox="0 0 19.5 13">
                                <g transform="translate(28)">
                                    <rect id="" data-name="Rectangle 1" width="19.5"
                                          height="2" rx="1"
                                          transform="translate(-28)"
                                          fill="var(--system_primery_color)"/>
                                    <rect id="" data-name="Rectangle 2" width="15.5"
                                          height="2" rx="1"
                                          transform="translate(-26 5.5)"
                                          fill="var(--system_primery_color)"/>
                                    <rect id="" data-name="Rectangle 3" width="5" height="2"
                                          rx="1"
                                          transform="translate(-20.75 11)"
                                          fill="var(--system_primery_color)"/>
                                </g>
                            </svg>
                        </div>
                        <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('frontend.Order By')); ?>:</h5>
                        <select class="small_select" id="order">
                            <option value="" data-display=""><?php echo e(__('frontend.None')); ?></option>
                            <option
                                value="price" <?php echo e(request('order')=="price"?'selected':''); ?>><?php echo e(__('frontend.Price')); ?></option>
                            <option
                                value="created_at" <?php echo e(request('order')=="created_at"?'selected':''); ?>><?php echo e(__('frontend.Date')); ?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-6 col-xl-4">
                <div class="couse_wizged">
                    <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                        <div class="thumb">

                            <div class="thumb_inner lazy"
                                 data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">
                            </div>
                            <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $course->price,'discount' => $course->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('price-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PriceTag::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $component = $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>
                        </div>
                    </a>
                    <div class="course_content">
                        <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">

                            <h4 class="noBrake" title=" <?php echo e($course->title); ?>">
                                <?php echo e($course->title); ?>

                            </h4>
                        </a>
                        <div class="rating_cart">
                            <div class="rateing">
                                <span><?php echo e(translatedNumber($course->totalReview)); ?>/<?php echo e(translatedNumber(5)); ?></span>

                                <i class="fas fa-star"></i>
                            </div>
                            <?php if(!onlySubscription()): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(!$course->isGuestUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="course_less_students">
                            <?php if($course->type==1): ?>
                                <a> <i class="ti-agenda"></i> <?php echo e(translatedNumber($course->total_lessons)); ?>

                                    <?php echo e(__('frontend.Lessons')); ?></a>
                            <?php elseif($course->type==2): ?>
                                <a> <i class="ti-agenda"></i>
                                    <?php echo e(translatedNumber($course->quiz->total_questions)); ?>

                                    <?php echo e(__('frontend.Question')); ?></a>
                            <?php elseif($course->type==3): ?>
                                <a> <i
                                        class="ti-agenda"></i> <?php echo e(translatedNumber($course->class->total_class)); ?>

                                    <?php echo e(__('frontend.Classes')); ?></a>
                            <?php endif; ?>
                            <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                <a>
                                    <i class="ti-user"></i> <?php echo e(translatedNumber($course->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-lg-12">
                <div
                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                    <div class="thumb">
                        <img style="width: 50px"
                             src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/img/not-found.png"
                             alt="">
                    </div>

                    <h1>

                        <?php if(Route::currentRouteName() == 'courses'): ?>
                            <?php echo e(__('frontend.No Course Found')); ?>

                        <?php elseif(Route::currentRouteName() == 'quizzes'): ?>
                            <?php echo e(__('frontend.No Quiz Found')); ?>

                        <?php elseif(Route::currentRouteName() == 'classes'): ?>
                            <?php echo e(__('frontend.No Class Found')); ?>

                        <?php else: ?>
                            <?php echo e(__('frontend.No Topic Found')); ?>

                        <?php endif; ?>

                    </h1>
                </div>
            </div>
        <?php endif; ?>
        <?php if(isset($has_pagination)): ?>
            <?php echo e($result->appends(Request::all())->links(theme('snippets.components._dynamic_pagination'))); ?>

        <?php endif; ?>

    </duv>
    <script>
        if ($.isFunction($.fn.lazy)) {
            $('.lazy').lazy();
        }
    </script>
<?php endif; ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/snippets/components/_single_topic.blade.php ENDPATH**/ ?>
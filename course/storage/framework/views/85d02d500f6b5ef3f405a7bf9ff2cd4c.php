<?php if(routeIs('CourseChapterShow')): ?>
    <?php echo e(Form::open([
        'class' => 'form-horizontal',
        'files' => true,
        'route' => 'saveChapter',
        'method' => 'POST',
        'enctype' => 'multipart/form-data',
    ])); ?>

<?php else: ?>
    <?php if(isset($editChapter) || isset($editLesson)): ?>
        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'updateChapter', 'method' => 'PUT', 'enctype' => 'multipart/form-data'])); ?>

    <?php else: ?>
        <?php echo e(Form::open([
            'class' => 'form-horizontal',
            'files' => true,
            'route' => 'saveChapter',
            'method' => 'POST',
            'enctype' => 'multipart/form-data',
        ])); ?>

    <?php endif; ?>
<?php endif; ?>

<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
<div class="section-white-box">
    <div class="add-visitor">

        <div class="row">
            <div class="col-lg-12">
                <input type="hidden" name="input_type" value="0" id="">
                <div class="lesson_div">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="primary_input_label mt-1" for=""> <?php echo e(__('courses.Chapter')); ?>

                                <span class="required_mark">*</span></label>
                            <select class="primary_select" name="chapter_id">
                                <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Chapter')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Chapter')); ?> </option>
                                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$chapter->id); ?>"
                                        <?php echo e(isset($editLesson) ? ($editLesson->chapter_id == $chapter->id ? 'selected' : '') : ''); ?>>
                                        <?php echo e(@$chapter->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('category')): ?>
                                <span class="invalid-feedback invalid-select" role="alert">
                                    <strong><?php echo e($errors->first('category')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-effect mt-2 pt-1">
                                <label><?php echo e(__('courses.Lesson')); ?> <?php echo e(__('common.Name')); ?>

                                    <span class="required_mark">*</span></label>
                                <input
                                    class="primary_input_field name<?php echo e($errors->has('chapter_name') ? ' is-invalid' : ''); ?>"
                                    type="text" name="name"
                                    placeholder="<?php echo e(__('courses.Lesson')); ?> <?php echo e(__('common.Name')); ?>"
                                    autocomplete="off" value="<?php echo e(isset($editLesson) ? $editLesson->name : ''); ?>">
                                <input type="hidden" name="lesson_id"
                                       value="<?php echo e(isset($editLesson) ? $editLesson->id : ''); ?>">
                                <span class="focus-border"></span>
                                <?php if($errors->has('chapter_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('chapter_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="input-effect mt-2 pt-1">
                                <label><?php echo e(__('common.Duration')); ?> (<?php echo e(__('common.In Minute')); ?>) </label>
                                <input
                                    class="primary_input_field name<?php echo e($errors->has('chapter_name') ? ' is-invalid' : ''); ?>"
                                    min="0" step="any" type="number" name="duration"
                                    placeholder="<?php echo e(__('courses.Duration')); ?>" autocomplete="off"
                                    value="<?php echo e(isset($editLesson) ? $editLesson->duration : ''); ?>">

                                <span class="focus-border"></span>
                                <?php if($errors->has('chapter_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('chapter_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <?php if(isModuleActive('Org')): ?>

                                <?php echo $__env->make('coursesetting::parts_of_course_details._org_host_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php endif; ?>

                            <div class="defaultHost <?php echo e(isModuleActive('Org') ? 'd-none' : ''); ?>">

                                <div class="input-effect mt-2 pt-1">
                                    <label class="primary_input_label mt-1" for=""> <?php echo e(__('courses.Host')); ?>

                                        <span class="required_mark">*</span></label>


                                    <select class="primary_select host_select" name="host" id="category_id">
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?>

                                        </option>
                                        <option value="Youtube" <?php if(@$editLesson->host == 'Youtube'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Youtube'): ?> selected <?php endif; ?>>
                                            Youtube
                                        </option>

                                        <option value="Vimeo" <?php if(@$editLesson->host == 'Vimeo'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Vimeo'): ?> selected <?php endif; ?>>
                                            Vimeo
                                        </option>
                                        <option value="Self" <?php if(@$editLesson->host == 'Self'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Self'): ?>  selected <?php endif; ?>>
                                            Self
                                        </option>
                                        <option value="VdoCipher" <?php if(@$editLesson->host == 'VdoCipher'): ?> Selected
                                                <?php endif; ?>
                                                <?php if(empty(@$editLesson) && @$editLesson->host == 'VdoCipher'): ?> selected <?php endif; ?>>
                                            VdoCipher
                                        </option>
                                        <option value="URL" <?php if(@$editLesson->host == 'URL'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'URL'): ?> selected <?php endif; ?>>
                                            Video URL
                                        </option>

                                        <option value="Iframe" <?php if(@$editLesson->host == 'Iframe'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Iframe'): ?> selected <?php endif; ?>>
                                            Iframe embed
                                        </option>

                                        <option value="Image" <?php if(@$editLesson->host == 'Image'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Image'): ?> selected <?php endif; ?>>
                                            Image
                                        </option>

                                        <option value="PDF" <?php if(@$editLesson->host == 'PDF'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'PDF'): ?> selected <?php endif; ?>>
                                            PDF File
                                        </option>

                                        <option value="Word" <?php if(@$editLesson->host == 'Word'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Word'): ?> selected <?php endif; ?>>
                                            Word File
                                        </option>


                                        <option value="Excel" <?php if(@$editLesson->host == 'Excel'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Excel'): ?> selected <?php endif; ?>>
                                            Excel File
                                        </option>

                                        <option value="PowerPoint" <?php if(@$editLesson->host == 'PowerPoint'): ?> Selected
                                                <?php endif; ?>
                                                <?php if(empty(@$editLesson) && @$editLesson->host == 'PowerPoint'): ?> selected <?php endif; ?>>
                                            Power Point File
                                        </option>


                                        <option value="Text" <?php if(@$editLesson->host == 'Text'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Text'): ?> selected <?php endif; ?>>
                                            Text File
                                        </option>


                                        <option value="Zip" <?php if(@$editLesson->host == 'Zip'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'Zip'): ?> selected <?php endif; ?>>
                                            Zip File
                                        </option>

                                        <option value="m3u8" <?php if(@$editLesson->host == 'm3u8'): ?> Selected <?php endif; ?>
                                        <?php if(empty(@$editLesson) && @$editLesson->host == 'm3u8'): ?> selected <?php endif; ?>>
                                            M3U8
                                        </option>

                                        <option value="GoogleDrive" <?php if(@$editLesson->host == 'GoogleDrive'): ?> Selected
                                                <?php endif; ?>
                                                <?php if(empty(@$editLesson) && @$editLesson->host == 'GoogleDrive'): ?> selected <?php endif; ?>>
                                            Google Drive
                                        </option>

                                        <?php if(isModuleActive('AmazonS3')): ?>
                                            <option value="AmazonS3" <?php if(@$editLesson->host == 'AmazonS3'): ?> Selected
                                                    <?php endif; ?>
                                                    <?php if(empty(@$editLesson) && @$editLesson->host== 'AmazonS3'): ?> selected <?php endif; ?>>
                                                Amazon S3
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive('BunnyStorage')): ?>
                                            <option value="BunnyStream"
                                                    <?php if(@$editLesson->host == 'BunnyStream'): ?> Selected
                                                    <?php endif; ?>
                                                    <?php if(empty(@$editLesson) &&  @$editLesson->host == 'BunnyStream'): ?> selected <?php endif; ?>
                                            >

                                                Bunny Stream
                                            </option>
                                        <?php endif; ?>


                                        <?php if(isModuleActive('SCORM')): ?>
                                            <option value="SCORM"
                                                    <?php if(empty(@$editLesson) && @$editLesson->host == 'SCORM'): ?> selected <?php endif; ?>>
                                                SCORM Self
                                            </option>
                                        <?php endif; ?>
                                        <?php if(isModuleActive('H5P')): ?>
                                            <option value="H5P"
                                                    <?php if(empty(@$editLesson) && @$editLesson->host == 'H5P'): ?> selected <?php endif; ?>>
                                                H5P
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive('AmazonS3') && isModuleActive('SCORM')): ?>
                                            <option value="SCORM-AwsS3"
                                                    <?php if(empty(@$editLesson) && @$editLesson->host== 'SCORM-AwsS3'): ?> selected <?php endif; ?>>
                                                SCORM AWS S3
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive('XAPI')): ?>
                                            <option value="XAPI"
                                                    <?php if(empty(@$editLesson) && @$editLesson->host== 'XAPI'): ?> selected <?php endif; ?>>
                                                XAPI Self
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive('AmazonS3') && isModuleActive('XAPI')): ?>
                                            <option value="XAPI-AwsS3"
                                                    <?php if(empty(@$editLesson) && @$editLesson->host== 'XAPI-AwsS3'): ?> selected <?php endif; ?>>
                                                XAPI AWS S3
                                            </option>
                                        <?php endif; ?>


                                        <option value="Storage"
                                                <?php if(empty(@$editLesson) && @$editLesson->host== 'Storage'): ?> selected <?php endif; ?>>
                                            Storage
                                        </option>

                                    </select>
                                    <?php if($errors->has('category')): ?>
                                        <span class="invalid-feedback invalid-select" role="alert">
                                            <strong><?php echo e($errors->first('category')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>


                                <div class="input-effect mt-2 pt-1" id="videoUrl"
                                     style="display:<?php if((isset($editLesson) && ($editLesson->host != 'Youtube' && $editLesson->host != 'URL' && $editLesson->host != 'm3u8')) || !isset($editLesson)): ?> none <?php endif; ?>">
                                    <label><?php echo e(__('courses.Video URL')); ?>

                                        <span class="required_mark">*</span></label>
                                    <input id="youtubeVideo"
                                           class="primary_input_field name<?php echo e($errors->has('video_url') ? ' is-invalid' : ''); ?>"
                                           type="text" name="video_url" placeholder="<?php echo e(__('courses.Video URL')); ?>"
                                           autocomplete="off"
                                           value="<?php if(isset($editLesson)): ?> <?php if($editLesson->host == 'Youtube' || $editLesson->host == 'URL' || $editLesson->host == 'm3u8'): ?><?php echo e($editLesson->video_url); ?> <?php endif; ?> <?php endif; ?>">
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('video_url')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('video_url')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-effect mt-2 pt-1" id="iframeBox"
                                     style="display: <?php if((isset($editLesson) && $editLesson->host != 'Iframe') || !isset($editLesson)): ?> none <?php endif; ?>">
                                    <div class="" id="">

                                        <label><?php echo e(__('courses.Iframe URL')); ?>

                                            <span class="required_mark">*</span></label>
                                        <input
                                            class="primary_input_field name<?php echo e($errors->has('iframe_url') ? ' is-invalid' : ''); ?>"
                                            type="text" name="iframe_url"
                                            placeholder="<?php echo e(__('courses.Iframe (Provide the source only)')); ?>"
                                            autocomplete="off"
                                            value="<?php if(isset($editLesson)): ?> <?php if($editLesson->host == 'Iframe'): ?><?php echo e($editLesson->video_url); ?> <?php endif; ?> <?php endif; ?>">
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('video_url')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('video_url')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="input-effect mt-2 pt-1" id="vimeoUrl"
                                     style="display: <?php if((isset($editLesson) && $editLesson->host != 'Vimeo') || !isset($editLesson)): ?> none <?php endif; ?>">
                                    <div class="" id="">
                                        <?php if(config('vimeo.connections.main.upload_type') == 'Direct'): ?>
                                            <div class="primary_file_uploader">
                                                <input class="primary-input filePlaceholder" type="text"
                                                       id="" <?php echo e($errors->has('image') ? 'autofocus' : ''); ?>

                                                       placeholder="<?php echo e(__('courses.Browse Video file')); ?>"
                                                       readonly="">
                                                <button class="" type="button">
                                                    <label class="primary-btn small fix-gr-bg"
                                                           for="document_file_thumb_vimeo_lesson_section"><?php echo e(__('common.Browse')); ?></label>
                                                    <input type="file" class="d-none fileUpload" name="vimeo"
                                                           id="document_file_thumb_vimeo_lesson_section">
                                                </button>
                                            </div>
                                        <?php else: ?>
                                            <select class="select2 lessonVimeo vimeoVideoLesson" name="vimeo">
                                                <option
                                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                    value=""><?php echo e(__('common.Select')); ?>

                                                    <?php echo e(__('courses.Video')); ?>

                                                </option>

                                            </select>
                                        <?php endif; ?>
                                        <?php if($errors->has('vimeo')): ?>
                                            <span class="invalid-feedback invalid-select" role="alert">
                                                <strong><?php echo e($errors->first('vimeo')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if(isModuleActive('BunnyStorage')): ?>

                                    <div class="input-effect mt-2 pt-1" id="bunnyStreamUrl"
                                         style="display: <?php if((isset($editLesson) && $editLesson->host != 'Vimeo') || !isset($editLesson)): ?> none <?php endif; ?>">
                                        <div class="" id="">
                                            <?php if(saasEnv('BUNNY_UPLOAD_TYPE')=="Direct"): ?>
                                                <div class="primary_file_uploader">
                                                    <input
                                                        class="primary-input filePlaceholder"
                                                        type="text"
                                                        id=""
                                                        <?php echo e($errors->has('image') ? 'autofocus' : ''); ?>

                                                        placeholder="<?php echo e(__('courses.Browse Video file')); ?>"
                                                        readonly="">
                                                    <button class="" type="button">
                                                        <label
                                                            class="primary-btn small fix-gr-bg"
                                                            for="document_file_thumb_bunny_lesson_section_insider"><?php echo e(__('common.Browse')); ?></label>
                                                        <input type="file"
                                                               class="d-none fileUpload"
                                                               name="bunny"
                                                               id="document_file_thumb_bunny_lesson_section_insider">
                                                    </button>
                                                </div>
                                            <?php else: ?>
                                                <select class="select2 lessonBunny BunnyVideoLesson" name="bunny"
                                                >
                                                    <option
                                                        data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                                    </option>

                                                </select>
                                            <?php endif; ?>
                                            <?php if($errors->has('bunny')): ?>
                                                <span class="invalid-feedback invalid-select"
                                                      role="alert">
                                            <strong><?php echo e($errors->first('bunny')); ?></strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                <?php endif; ?>


                                <div class="input-effect mt-2 pt-1" id="VdoCipherUrl"
                                     style="display: <?php if((isset($editLesson) && $editLesson->host != 'VdoCipher') || !isset($editLesson)): ?> none <?php endif; ?>">
                                    <div class="" id="">

                                        <select class="select2 lessonVdocipher VdoCipherVideoLesson" name="vdocipher"
                                                id="VdoCipherVideo">
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                            </option>
                                        </select>
                                        <?php if($errors->has('vdocipher')): ?>
                                            <span class="invalid-feedback invalid-select" role="alert">
                                                <strong><?php echo e($errors->first('vdocipher')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php
                                    $ignoreHost=[
                                        'SCORM',
                                        'SCORM-AwsS3',
                                        'XAPI'.
                                        'XAPI-AwsS3',
                                        'H5P'
                                        ];
                                ?>


                                <div class="input-effect mt-2 pt-1" id="fileupload"
                                     style="display: <?php if(
                                        (isset($editLesson) &&
                                            ($editLesson->host == 'Vimeo' ||
                                                $editLesson->host == 'Youtube' ||
                                                $editLesson->host == 'vdocipher' ||
                                                $editLesson->host == 'Iframe' ||
                                                $editLesson->host == 'Storage' ||
                                                $editLesson->host == 'm3u8' ||
                                                $editLesson->host == 'URL')) ||
                                            !isset($editLesson)): ?> none <?php endif; ?>">
                                    <input type="file" class="filepond" name="file" id=""
                                           data-file="<?php echo e(isset($editLesson)? !in_array($editLesson->host,$ignoreHost)?$editLesson->video_url:'':''); ?>">
                                </div>


                                <div class="input-effect mt-2 pt-1" id="media_upload"
                                     style="display: <?php if((isset($editLesson) && $editLesson->host != 'Storage') || !isset($editLesson)): ?> none <?php endif; ?>">

                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'video','required' => 'true','type' => 'video','mediaId' => ''.e(isset($editLesson)?$editLesson->video_url_media?->media_id:'').'','label' => ''.e(__('common.File')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'video','required' => 'true','type' => 'video','media_id' => ''.e(isset($editLesson)?$editLesson->video_url_media?->media_id:'').'','label' => ''.e(__('common.File')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                </div>
                            </div>
                            <div class="input-effect mt-2 pt-1">
                                <div class="" id="">
                                    <label class="primary_input_label mt-1"
                                           for=""><?php echo e(__('courses.Privacy')); ?>

                                        <span class="required_mark">*</span> </label>
                                    <select class="primary_select" name="is_lock">
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> "
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?>

                                        </option>
                                        <?php if(isset($editLesson)): ?>
                                            <option value="0" <?php if(@$editLesson->is_lock == 0): ?> selected <?php endif; ?>>
                                                <?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1" <?php if(@$editLesson->is_lock == 1): ?> selected <?php endif; ?>>
                                                <?php echo e(__('courses.Locked')); ?></option>
                                        <?php else: ?>
                                            <option value="0"><?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1" selected><?php echo e(__('courses.Locked')); ?></option>
                                        <?php endif; ?>


                                    </select>
                                    <?php if($errors->has('is_lock')): ?>
                                        <span class="invalid-feedback invalid-select" role="alert">
                                            <strong><?php echo e($errors->first('is_lock')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-effect mt-2 pt-1">
                                <label><?php echo e(__('common.Description')); ?>

                                </label>
                                <input
                                    class="primary_input_field name<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>"
                                    type="text" name="description" placeholder="<?php echo e(__('common.Description')); ?>"
                                    autocomplete="off" value="<?php echo e(isset($editLesson) ? $editLesson->description : ''); ?>">
                                <span class="focus-border"></span>
                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="row mt-40">
            <div class="col-lg-12 text-center">
                <button type="submit" class="primary-btn fix-gr-bg" data-bs-toggle="tooltip">
                    <i class="ti-check"></i>
                    <?php echo e(__('common.Save')); ?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php echo e(Form::close()); ?>

<script>
    $('#category_id').trigger('change');
    $('#category_id1').trigger('change');
</script>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/lesson_section.blade.php ENDPATH**/ ?>
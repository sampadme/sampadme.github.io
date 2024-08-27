<?php if(routeIs('CourseChapterShow')): ?>
    <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'saveChapter',
'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

<?php else: ?>
    <?php if(isset($editChapter) || isset($editLesson)): ?>
        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'updateChapter', 'method' => 'PUT', 'enctype' => 'multipart/form-data'])); ?>

    <?php else: ?>
        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'saveChapter',
        'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

    <?php endif; ?>
<?php endif; ?>


<?php
    $key =$key+100;
?>
<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
<input type="hidden" name="chapter_id" value="<?php echo e(@$chapter->id); ?>">
<div class="section-white-box">
    <div class="add-visitor">

        <div class="row">
            <div class="col-lg-12">
                <input type="hidden" name="input_type" value="0" id="">
                <div class="lesson_div">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="input-effect mt-2 pt-1">
                                <label><?php echo e(__('courses.Lesson')); ?> <?php echo e(__('common.Name')); ?>

                                    <span class="required_mark">*</span></label>
                                <input
                                    class="primary_input_field name<?php echo e($errors->has('chapter_name') ? ' is-invalid' : ''); ?>"
                                    type="text" name="name"
                                    placeholder="<?php echo e(__('courses.Lesson')); ?> <?php echo e(__('common.Name')); ?>"
                                    autocomplete="off"
                                    value="<?php echo e(isset($editLesson)? $editLesson->name:''); ?>">
                                <input type="hidden" name="lesson_id"
                                       value="<?php echo e(isset($editLesson)? $editLesson->id: ''); ?>">
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
                                    placeholder="<?php echo e(__('courses.Duration')); ?>"
                                    autocomplete="off"
                                    value="<?php echo e(isset($editLesson)? $editLesson->duration:''); ?>">

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


                            <div class="defaultHost <?php echo e(isModuleActive('Org')?'d-none':''); ?>">
                                <div class="input-effect mt-2 pt-1">
                                    <label class="primary_input_label mt-1"
                                           for=""> <?php echo e(__('courses.Host')); ?>

                                        <span class="required_mark">*</span></label>


                                    <select class="primary_select category_id host_select" name="host"
                                            data-key="<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                            id="category_id<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>">
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?> </option>


                                        <option
                                            value="Youtube" <?php echo e(isset($editLesson) ? $editLesson->host=='Youtube'? 'selected':'':''); ?> >
                                            Youtube
                                        </option>

                                        <option
                                            value="Vimeo" <?php echo e(isset($editLesson) ? $editLesson->host=='Vimeo'? 'selected':'':''); ?> >
                                            Vimeo
                                        </option>
                                        <option
                                            value="VdoCipher" <?php echo e(isset($editLesson) ? $editLesson->host=='VdoCipher'? 'selected':'':''); ?> >
                                            VdoCipher
                                        </option>
                                        <option
                                            value="Self" <?php echo e(isset($editLesson) ? $editLesson->host=='Self'? 'selected':'':''); ?> >
                                            Self
                                        </option>


                                        <option
                                            value="URL" <?php echo e(isset($editLesson) ? $editLesson->host=='URL'? 'selected':'':''); ?> >
                                            Video URL
                                        </option>
                                        <option
                                            value="Iframe" <?php echo e(isset($editLesson) ? $editLesson->host=='Iframe'? 'selected':'':''); ?> >
                                            Iframe embed
                                        </option>
                                        <option
                                            value="Image" <?php echo e(isset($editLesson) ? $editLesson->host=='Image'? 'selected':'':''); ?> >
                                            Image
                                        </option>
                                        <option
                                            value="PDF" <?php echo e(isset($editLesson) ? $editLesson->host=='PDF'? 'selected':'':''); ?> >
                                            PDF File
                                        </option>
                                        <option
                                            value="Word" <?php echo e(isset($editLesson) ? $editLesson->host=='Word'? 'selected':'':''); ?> >
                                            Word File
                                        </option>
                                        <option
                                            value="Excel" <?php echo e(isset($editLesson) ? $editLesson->host=='Excel'? 'selected':'':''); ?> >
                                            Excel File
                                        </option>
                                        <option
                                            value="Text" <?php echo e(isset($editLesson) ? $editLesson->host=='Text'? 'selected':'':''); ?> >
                                            Text File
                                        </option>
                                        <option
                                            value="Zip" <?php echo e(isset($editLesson) ? $editLesson->host=='Zip'? 'selected':'':''); ?> >
                                            Zip File
                                        </option>

                                        <option
                                            value="m3u8" <?php echo e(isset($editLesson) ? $editLesson->host=='m3u8'? 'selected':'':''); ?> >
                                            M3U8
                                        </option>

                                        <option value="GoogleDrive"
                                                <?php if(@$editLesson->host=='GoogleDrive'): ?> Selected
                                                <?php endif; ?>
                                                <?php if(empty(@$editLesson) && @$editLesson->host=="GoogleDrive"): ?> selected <?php endif; ?> >
                                            Google Drive
                                        </option>
                                        <option
                                            value="PowerPoint" <?php echo e(isset($editLesson) ? $editLesson->host=='PowerPoint'? 'selected':'':''); ?> >
                                            Power Point File
                                        </option>

                                        <?php if(isModuleActive("AmazonS3")): ?>
                                            <option
                                                value="AmazonS3" <?php echo e(isset($editLesson) ? $editLesson->host=='AmazonS3'? 'selected':'':''); ?> >
                                                Amazon S3
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive('BunnyStorage')): ?>
                                            <option
                                                value="BunnyStorage" <?php echo e(isset($editLesson) ? $editLesson->host=='BunnyStorage'? 'selected':'':''); ?>>
                                                Bunny Storage
                                            </option>
                                        <?php endif; ?>


                                        <?php if(isModuleActive("SCORM")): ?>
                                            <option
                                                value="SCORM" <?php echo e(isset($editLesson) ? $editLesson->host=='SCORM'? 'selected':'':''); ?> >
                                                SCORM Self
                                            </option>
                                        <?php endif; ?>
                                        <?php if(isModuleActive('H5P')): ?>
                                            <option value="H5P"
                                                <?php echo e(isset($editLesson) ? $editLesson->host=='H5P'? 'selected':'':''); ?>

                                            >
                                                H5P
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive("AmazonS3") && isModuleActive("SCORM")): ?>
                                            <option
                                                value="SCORM-AwsS3" <?php echo e(isset($editLesson) ? $editLesson->host=='SCORM-AwsS3'? 'selected':'':''); ?> >
                                                SCORM AWS S3
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive("XAPI")): ?>
                                            <option value="XAPI"
                                                <?php echo e(isset($editLesson) ? $editLesson->host=='XAPI'? 'selected':'':''); ?>

                                            >
                                                XAPI Self
                                            </option>
                                        <?php endif; ?>

                                        <?php if(isModuleActive("AmazonS3") && isModuleActive("XAPI")): ?>
                                            <option value="XAPI-AwsS3"
                                                <?php echo e(isset($editLesson) ? $editLesson->host=='XAPI-AwsS3'? 'selected':'':''); ?>

                                            >
                                                XAPI AWS S3
                                            </option>
                                        <?php endif; ?>
                                        <option
                                            value="Storage" <?php echo e(isset($editLesson) ? $editLesson->host=='Storage'? 'selected':'':''); ?> >
                                            Storage
                                        </option>
                                    </select>
                                    <?php if($errors->has('host')): ?>
                                        <span class="invalid-feedback invalid-select"
                                              role="alert">
                                                                        <strong><?php echo e($errors->first('host')); ?></strong>
                                                                    </span>
                                    <?php endif; ?>
                                </div>


                                <div class="input-effect mt-2 pt-1"
                                     id="videoUrl<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                     style="display:<?php if((isset($editLesson) && ($editLesson->host!="Youtube"  && $editLesson->host!="URL"  && $editLesson->host!="m3u8")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                    <label><?php echo e(__('courses.Video URL')); ?>

                                        <span class="required_mark">*</span></label>
                                    <input
                                        id="youtubeVideo"
                                        class="primary_input_field name<?php echo e($errors->has('video_url') ? ' is-invalid' : ''); ?>"
                                        type="text" name="video_url"
                                        placeholder="<?php echo e(__('courses.Video URL')); ?>"
                                        autocomplete="off"
                                        value="<?php if(isset($editLesson)): ?> <?php if($editLesson->host=="Youtube" || $editLesson->host=="URL" || $editLesson->host=="m3u8"): ?><?php echo e($editLesson->video_url); ?> <?php endif; ?> <?php endif; ?>">
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('video_url')): ?>
                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('video_url')); ?></strong>
                                            </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-effect mt-2 pt-1"
                                     id="iframeBox<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                     style="display: <?php if((isset($editLesson) && ($editLesson->host!="Iframe")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                    <div class="" id="">

                                        <label><?php echo e(__('courses.Iframe URL')); ?>

                                            <span class="required_mark">*</span></label>
                                        <input
                                            class="primary_input_field name<?php echo e($errors->has('iframe_url') ? ' is-invalid' : ''); ?>"
                                            type="text" name="iframe_url"
                                            placeholder="<?php echo e(__('courses.Iframe (Provide the source only)')); ?>"
                                            autocomplete="off"
                                            value="<?php if(isset($editLesson)): ?> <?php if($editLesson->host=="Iframe"): ?><?php echo e($editLesson->video_url); ?> <?php endif; ?> <?php endif; ?>">
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('video_url')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('video_url')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="input-effect mt-2 pt-1"
                                     id="vimeoUrl<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                     style="display: <?php if((isset($editLesson) && ($editLesson->host!="Vimeo")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                    <div class="" id="">
                                        <?php if(config('vimeo.connections.main.upload_type')=="Direct"): ?>
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
                                                        for="document_file_thumb_vimeo_lesson_section_insider<?php echo e($key); ?>"><?php echo e(__('common.Browse')); ?></label>
                                                    <input type="file"
                                                           class="d-none fileUpload"
                                                           name="vimeo"
                                                           id="document_file_thumb_vimeo_lesson_section_insider<?php echo e($key); ?>">
                                                </button>
                                            </div>
                                        <?php else: ?>
                                            <select class="select2 lessonVimeo vimeoVideoLesson" name="vimeo"
                                            >
                                                <option
                                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                                </option>
                                                <?php if(isset($editLesson)): ?>
                                                    <option
                                                        value="<?php echo e($editLesson->video_url); ?>" selected>
                                                    </option>
                                                <?php endif; ?>
                                            </select>
                                        <?php endif; ?>
                                        <?php if($errors->has('vimeo')): ?>
                                            <span class="invalid-feedback invalid-select"
                                                  role="alert">
                                            <strong><?php echo e($errors->first('vimeo')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if(isModuleActive('BunnyStorage')): ?>
                                    <div class="input-effect mt-2 pt-1"
                                         id="bunnyStreamUrl<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                         style="display: <?php if((isset($editLesson) && ($editLesson->host!="BunnyStorage")) || !isset($editLesson)): ?> none  <?php endif; ?>">
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
                                                            for="document_file_thumb_bunny_lesson_section_insider<?php echo e($key); ?>"><?php echo e(__('common.Browse')); ?></label>
                                                        <input type="file"
                                                               class="d-none fileUpload"
                                                               name="bunny"
                                                               id="document_file_thumb_bunny_lesson_section_insider<?php echo e($key); ?>">
                                                    </button>
                                                </div>
                                            <?php else: ?>
                                                <select class="select2 lessonBunny BunnyVideoLesson" name="bunny"
                                                >
                                                    <option
                                                        data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                                    </option>
                                                    <?php if(isset($editLesson) && $editLesson->bunnyLesson): ?>
                                                        <?php if($editLesson->bunnyLesson->service_type == 'stream'): ?>
                                                            <option
                                                                value="<?php echo e($editLesson->bunnyLesson->video_id); ?>"
                                                                selected="selected"> <?php echo e($editLesson->bunnyLesson->video_id); ?>

                                                            </option>
                                                        <?php elseif($editLesson->bunnyLesson->service_type == 'storage'): ?>
                                                            <option
                                                                value="<?php echo e($editLesson->bunnyLesson->name); ?>"
                                                                selected="selected"> <?php echo e($editLesson->bunnyLesson->name); ?>

                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
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
                                <div class="input-effect mt-2 pt-1"
                                     id="VdoCipherUrl<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                     style="display: <?php if((isset($editLesson) && ($editLesson->host!="VdoCipher")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                    <div class="" id="">

                                        <select class=" lessonVdocipher VdoCipherVideoLesson" name="vdocipher"

                                        >
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                            </option>
                                            <?php if(isset($editLesson)): ?>
                                                <option
                                                    value="<?php echo e($editLesson->video_url); ?>" selected>
                                                </option>
                                            <?php endif; ?>
                                        </select>
                                        <?php if($errors->has('vdocipher')): ?>
                                            <span class="invalid-feedback invalid-select"
                                                  role="alert">
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
                                <div class="input-effect mt-2 pt-1"
                                     id="fileupload<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
                                     style="display: <?php if((isset($editLesson) &&
 (($editLesson->host=="Vimeo") ||
  ($editLesson->host=="BunnyStream") ||
    ($editLesson->host=="Youtube")||
     ($editLesson->host=="VdoCipher")||
      ($editLesson->host=="Iframe")||
                                                $editLesson->host == 'Storage' ||
                                                $editLesson->host == 'm3u8' ||

        ($editLesson->host=="URL")) ) ||
         !isset($editLesson)): ?> none  <?php endif; ?>">
                                    <input type="file" class="filepond"
                                           name="file"
                                           data-file="<?php echo e(isset($editLesson)? !in_array($editLesson->host,$ignoreHost)?$editLesson->video_url:'':''); ?>"
                                           id="">


                                </div>

                                <div class="input-effect mt-2 pt-1"
                                     id="media_upload<?php echo e(isset($editSection)?'_edit_':''); ?><?php echo e(isset($editLesson)? $editLesson->id:$key); ?>"
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
                                        <option
                                            data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> "
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> </option>
                                        <?php if(isset($editLesson)): ?>
                                            <option value="0"
                                                    <?php if( @$editLesson->is_lock==0): ?> selected <?php endif; ?> ><?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1"
                                                    <?php if(@$editLesson->is_lock==1): ?> selected <?php endif; ?> ><?php echo e(__('courses.Locked')); ?></option>
                                        <?php else: ?>
                                            <option
                                                value="0"><?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1"
                                                    selected><?php echo e(__('courses.Locked')); ?></option>
                                        <?php endif; ?>


                                    </select>
                                    <?php if($errors->has('is_lock')): ?>
                                        <span class="invalid-feedback invalid-select"
                                              role="alert">
                                                                            <strong><?php echo e($errors->first('is_lock')); ?></strong>
                                                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-effect mt-2 pt-1">
                                <label><?php echo e(__('common.Description')); ?>

                                </label>

                                <textarea class="primary_textarea height_128" name="description"

                                          id="description" cols="30"
                                          rows="10"><?php echo e(isset($editLesson)? $editLesson->description:''); ?></textarea>


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
                <button type="submit" class="primary-btn fix-gr-bg"
                        data-bs-toggle="tooltip">
                    <i class="ti-check"></i>
                    <?php echo e(__('common.Save')); ?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php echo e(Form::close()); ?>


<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/lesson_section_inside.blade.php ENDPATH**/ ?>
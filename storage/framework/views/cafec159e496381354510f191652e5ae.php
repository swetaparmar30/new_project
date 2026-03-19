<div class="row">

                                                                    <div class="row form-sec">

                                                                        <div

                                                                            class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">

                                                                            <div class="row form-sec">

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                    <label for="">Meta Title

                                                                                    </label>

                                                                                </div>

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <input type="text" name="meta_title"

                                                                                        id="meta_title" placeholder="Title"

                                                                                        value="<?php echo e(isset($meta_tags->meta_title) ? $meta_tags->meta_title : ''); ?>"

                                                                                        data-parsley-required-message="Please Enter Title">

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div

                                                                            class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">

                                                                            <div class="row form-sec">

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                    <label for="">Meta

                                                                                        Keyword</label>

                                                                                </div>

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <input type="text" name="meta_keyword"

                                                                                        id="meta_keyword"

                                                                                        placeholder="Sub Title"

                                                                                        value="<?php echo e(isset($meta_tags->meta_keyword) ? $meta_tags->meta_keyword : ''); ?>"

                                                                                        data-parsley-required-message="Please Enter Sub Title">

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div

                                                                            class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                            <div class="row form-sec">

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                    <label for="">Meta

                                                                                        Description</label>

                                                                                </div>

                                                                                <div

                                                                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                    <textarea class="form-control"

                                                                                        id="meta_description"

                                                                                        name="meta_description"

                                                                                        style="height: 150px;"

                                                                                        data-parsley-errors-container="#content_required1"

                                                                                        data-parsley-required-message="Please Enter Description"><?php echo e(isset($meta_tags->meta_description) ? $meta_tags->meta_description : ''); ?></textarea>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/settings/meta-tags-sec.blade.php ENDPATH**/ ?>
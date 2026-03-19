<div class="row">

                                                                    <div

                                                                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Title </label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="calltoaction_title"

                                                                                    id="calltoaction_title"

                                                                                    placeholder="Title"

                                                                                    value="<?php echo e(isset($calltoaction->calltoaction_title) ? $calltoaction->calltoaction_title : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Title">

                                                                            </div>

                                                                        </div>

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Sub Title

                                                                                </label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="calltosub_title"

                                                                                    id="calltosub_title" placeholder="Title"

                                                                                    value="<?php echo e(isset($calltoaction->calltosub_title) ? $calltoaction->calltosub_title : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Sub Title">

                                                                            </div>

                                                                        </div>

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Button

                                                                                    Name</label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="cl_button_name"

                                                                                    id="button_name" placeholder="Sub Title"

                                                                                    value="<?php echo e(isset($calltoaction->button_name) ? $calltoaction->button_name : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Button Name">

                                                                            </div>

                                                                        </div>

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Button

                                                                                    Url</label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="cl_button_url"

                                                                                    id="button_url" placeholder="Button Url"

                                                                                    value="<?php echo e(isset($calltoaction->button_url) ? $calltoaction->button_url : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Button Url">

                                                                            </div>

                                                                        </div>

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Call Button

                                                                                    Name</label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="call_button_name"

                                                                                    id="call_button_name"

                                                                                    placeholder="Call Button Name"

                                                                                    value="<?php echo e(isset($calltoaction->call_button_name) ? $calltoaction->call_button_name : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Button Name">

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div

                                                                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Call Button

                                                                                    Url</label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <input type="text" name="call_button_url"

                                                                                    id="call_button_url"

                                                                                    placeholder="Call Button Url"

                                                                                    value="<?php echo e(isset($calltoaction->call_button_url) ? $calltoaction->call_button_url : ''); ?>"

                                                                                    data-parsley-required-message="Please Enter Button Url">

                                                                            </div>

                                                                        </div>

                                                                        <div class="row form-sec">

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">

                                                                                <label for="">Description</label>

                                                                            </div>

                                                                            <div

                                                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                                <textarea class="form-control rich-text-editor"

                                                                                    id="call_button_desc"

                                                                                    name="call_button_desc"

                                                                                    style="height: 300px;"

                                                                                    data-parsley-errors-container="#content_required"

                                                                                    data-parsley-required-message="Please Enter Description"><?php echo e(isset($calltoaction->call_button_desc) ? $calltoaction->call_button_desc : ''); ?></textarea>

                                                                                <span id="content_required"

                                                                                    class="parsley-required"

                                                                                    style="font-weight: 500 !important;"></span>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/settings/call-to-action-sec.blade.php ENDPATH**/ ?>
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

                                                                                <input type="text" name="quote_title"

                                                                                    id="quote_title" placeholder="Title"

                                                                                    value="<?php echo e(isset($quote->quote_title) ? $quote->quote_title : ''); ?>"

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

                                                                                <input type="text" name="quotesub_title"

                                                                                    id="quotesub_title" placeholder="Title"

                                                                                    value="<?php echo e(isset($quote->quotesub_title) ? $quote->quotesub_title : ''); ?>"

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

                                                                                <input type="text" name="quote_button_name"

                                                                                    id="quote_button_name"

                                                                                    placeholder="Sub Title"

                                                                                    value="<?php echo e(isset($quote->button_name) ? $quote->button_name : ''); ?>"

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

                                                                                <input type="text" name="quote_button_url"

                                                                                    id="quote_button_url"

                                                                                    placeholder="Button Url"

                                                                                    value="<?php echo e(isset($quote->button_url) ? $quote->button_url : ''); ?>"

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

                                                                                <input type="text"

                                                                                    name="quotecall_button_name"

                                                                                    id="quotecall_button_name"

                                                                                    placeholder="Call Button Name"

                                                                                    value="<?php echo e(isset($quote->quotecall_button_name) ? $quote->quotecall_button_name : ''); ?>"

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

                                                                                <input type="text"

                                                                                    name="quotecall_button_url"

                                                                                    id="quotecall_button_url"

                                                                                    placeholder="Call Button Url"

                                                                                    value="<?php echo e(isset($quote->quotecall_button_url) ? $quote->quotecall_button_url : ''); ?>"

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

                                                                                <textarea

                                                                                    class="form-control rich-text-editor"

                                                                                    id="quote_desc" name="quote_desc"

                                                                                    style="height: 300px;"

                                                                                    data-parsley-errors-container="#content_required"

                                                                                    data-parsley-required-message="Please Enter Description"><?php echo e(isset($quote->quote_desc) ? $quote->quote_desc : ''); ?></textarea>

                                                                                <span id="content_required"

                                                                                    class="parsley-required"

                                                                                    style="font-weight: 500 !important;"></span>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/settings/quote-sec.blade.php ENDPATH**/ ?>
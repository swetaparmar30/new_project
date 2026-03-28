<?php
if(isset($config['heading_tag']) && $config['heading_tag'] != '' && $config['heading_tag'] != null)
{
	$tag = $config['heading_tag'];
}else{
	$tag = 'h4';
}
if(isset($config['heading_tag_color']) && $config['heading_tag_color'] != null)
{
	$color = $config['heading_tag_color'];
}else{
	$color = '';
}
if(isset($config['heading_bg_color']) && $config['heading_bg_color'] != null)
{
	$bg_color = $config['heading_bg_color'];
}else{
	$bg_color = '';
}
?>

<<?php echo e($tag); ?> class="<?php echo e(isset($config['heading_div_class']) ? $config['heading_div_class'] : ''); ?>" id="<?php echo e(isset($config['heading_div_id']) ? $config['heading_div_id'] : ''); ?>" style="color:<?php echo e($color); ?>;background-color:<?php echo e($bg_color); ?>;"><?php echo e(isset($config['heading_tag_text']) ? $config['heading_tag_text'] : ''); ?></<?php echo e($tag); ?>><?php /**PATH D:\xampp\htdocs\new_project\resources\views/widgets/heading_tag.blade.php ENDPATH**/ ?>
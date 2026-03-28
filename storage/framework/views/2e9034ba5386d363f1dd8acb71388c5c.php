<style>
    .custom-editor-class{
        <?php if(isset($config['editor_bg_img']) && $config['editor_bg_img'] != null): ?>
        background-image: url('<?php echo e($config['editor_bg_img']); ?>');
        <?php endif; ?>
        <?php if(isset($config['editor_bg_color']) && $config['editor_bg_color'] != null): ?>
        background-color: <?php echo e($config['editor_bg_color']); ?>;
        <?php endif; ?>
        <?php if(isset($config['editor_bg_size']) && $config['editor_bg_size'] != null): ?>
        background-size: <?php echo e($config['editor_bg_size']); ?>;
        <?php endif; ?>
        <?php if(isset($config['editor_bg_position']) && $config['editor_bg_position'] != null): ?>
        background-position: <?php echo e($config['editor_bg_position']); ?>;
        <?php endif; ?>
        <?php if(isset($config['editor_bg_repeate']) && $config['editor_bg_repeate'] != null): ?>
        background-repeat: <?php echo e($config['editor_bg_repeate']); ?>;
        <?php endif; ?>
        <?php if(isset($config['editor_t_alignment']) && $config['editor_t_alignment'] != null): ?>
        text-align: <?php echo e($config['editor_t_alignment']); ?>;
        <?php endif; ?>
    }
</style>
<div class="custom-editor-class <?php echo e(isset($config['editor_div_class']) && $config['editor_div_class'] != null ? $config['editor_div_class'] : ''); ?>" id="<?php echo e(isset($config['editor_div_id']) && $config['editor_div_id'] != null ? $config['editor_div_id'] : ''); ?>">
	<?php echo html_entity_decode($config['editor_content']); ?>

</div><?php /**PATH D:\xampp\htdocs\new_project\resources\views/widgets/text_editor.blade.php ENDPATH**/ ?>
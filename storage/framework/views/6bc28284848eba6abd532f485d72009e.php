<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
   
    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($page->slug != 'sitemap'): ?>
            <?php if(isset($page->id) && $page->id == 1): ?>

                <?php if(isset($posts) && count($posts) > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <url>
                        <loc><?php echo e(route('front.single_blog_detail',['slug' => $post->slug])); ?></loc>
                        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                        <priority>0.80</priority>
                    </url>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                
            <?php endif; ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
</urlset>
               <?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/sitemap_xml_post.blade.php ENDPATH**/ ?>
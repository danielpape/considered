<article class="<?php echo($post_status); ?>">
    <div class="row">
            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <?php echo($post_intro); ?>

               <ul class="actions" style="display:<?php echo($post_category)?>;">
                <li><a class="button" href="<?php echo($post_link); ?>">Continue Reading</a></li>
               </ul>
    </div>
</article>

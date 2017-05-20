<article class="single <?php echo($post_status); ?>">
        <img class="heroImage" src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />
        <h1><?php echo($post_title); ?></h1>
        <h2 class="intro"><?php echo($post_intro); ?></h2>
            <div class="main">
              <h2 class="tag"><a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></h2>
              <?php echo($post_content); ?>

              <ul class="actions">
                  <li><a class="button" href="https://twitter.com/intent/tweet?screen_name=<?php echo($post_author_twitter); ?>&text=Re:%20<?php echo($post_link); ?>%20" data-dnt="true">Comment on Twitter</a></li>
                  <li><a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo($post_title); ?>&quot;%20<?php echo($post_link); ?>%20via%20&#64;<?php echo($post_author_twitter); ?>" data-dnt="true">Share on Twitter</a></li>
                  <li><a class="button" href="<?php echo($blog_url); ?>">More Articles</a></li>
              </ul>
            </div>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</article>

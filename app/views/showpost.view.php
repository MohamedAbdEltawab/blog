<?php  require 'partials/header.php'; ?>



<?php if(isset($post)) : ?>

       <div class="container">
               <div>
                       <h1><?= $post->title ?></h1>

                       <p><STRONG><?= $post->body?></STRONG></p>

               <div><?= $post->created_at ?></div>
               </div>



               <hr>
               <div>
                       <?php
                               foreach($comments as $comment){

                                       echo "<p><strong>" .$comment->body ."</strong>". "  |  ". $comment->created_at . "</p>";
                               }
                       ?>
               </div>



               <form method="post" action="/posts/show?id=<?=$post->id?>">
                       <input type="text" name="comment" placeholder="Your comment here" required="">
                       <button>Add Comment</button>
               </form>

       </div>
<?php endif; ?>

<?php  require 'partials/footer.php'; ?>

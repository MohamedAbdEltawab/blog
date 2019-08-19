<?php


if(! isset($_SESSION)) {

    session_start();
}


require 'partials/header.php'; ?>




<?php

    if (isset($_SESSION['user_id'])): ?>


    <div class="container">
        <div class="row">

            <div class="col-2"></div>
                <div class="col-8">
                    <h1 style="text-align: center">All Posts</h1>

                    <!-- This is Post Section -->
                    <?php
                        if (isset($posts)):

                            foreach($posts as $post): ?>

                                <div class="card" style="margin-top: 5px; padding: 5px; text-align: center;">
                                    <div class="card-block">

                                        <h2 class="blog-post-title">
                                            <a href="show/<?= $post->id ?>">
                                                <?= $post->title ?>
                                            </a>
                                        </h2>
                                        <p class="blog-post-meta"><?= $post->created_at ?></p>

                                        <p class="blog-post-body">
                                                   <?= $post->body ?>
                                        </p>


                                    </div>
                                </div>
                    <?php
                            endforeach;
                        endif; ?>

                </div>



               </div>
    </div>


<?php   else: 
          redirect('login'); 
        endif ;  ?>



<?php require 'partials/footer.php'; ?>

<?php

session_start();


if (isset($_SESSION['user_id'])) {

    redirect('/posts');
}else{

    require 'partials/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col col-4">
                <h2>Login</h2>
                <form method="post" action="login">
                    <input type="text" name="email" class="form-control" required=""><br>
                    <input type="password" name="password" class="form-control" required=""><br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                    <?php
                        if (isset($errors)): ?>
                            <div class="alert alert-danger">
                                <ul>
                    <?php
                                    foreach ($errors as $error) :

                                      echo "<li>" . $error. "</li>";

                                    endforeach;
                    ?>
                                </ul>
                            </div>
                    <?php endif; ?>

            </div>
        </div>
    </div>

<?php } require 'partials/footer.php'; ?>

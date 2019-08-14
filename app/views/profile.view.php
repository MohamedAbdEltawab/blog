<?php require 'partials/header.php'; ?>





<div class="container">
       <div class="row">
               <div class="col-2"></div>
               <div class="col-8">
                       <h1>Profile Page</h1>
                       <form method="post" action="profile?id=<?= isset($user) ? $user->id : '' ?>">

                               <label>Username</label>
                               <input type="text" class="form-control" name="username" value="<?= isset($user) ? $user->username : '' ?>"><br><br>
                               <label>E-mail</label>
                               <input type="text" class="form-control" name="email" value="<?= isset($user) ? $user->email : '' ?>"></br><br>

                               <label>Gender</label>

                               <select name="gender" class="form-control">
                                       <?php if(isset($profile)): ?>

                                                       <option><?= isset($profile) ? $profile->gender : '' ?> </option>

                                       <?php else:?>

                                               <option>Male</option>
                                               <option>Female</option>

                                       <?php endif;?>

                               </select><br>

                               <label>Address</label>
                               <input type="text" class="form-control" name="address" value="<?= isset($profile) ? $profile->address : '' ?>">
                               <br>
                               <button class="btn btn-primary btn-block">Update</button>
                       </form>
               </div>
       </div>
</div>

<?php


if(isset($errors)){
       var_dump($errors);
}

 isset($message) ? $message : '';


 require 'partials/footer.php'; ?>
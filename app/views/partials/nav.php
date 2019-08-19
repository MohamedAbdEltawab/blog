<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Home</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="posts/create">Create a Post</a>
      </li>


    </ul>

    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto mt-2 my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/profile">

            <?= (isset($_SESSION['user_id']) && isset($user)) ? $user->username : '' ?>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout" tabindex="-1" >Logout</a>
        </li>

    </ul>

    </form>



  </div>
</nav>

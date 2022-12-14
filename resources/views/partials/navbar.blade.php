<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/wayne.png" alt="" width="80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          
          <a class="nav-link {{ ($title === "Home" ? 'active' : '') }} me-3 ms-3 aria-current="page href="/">Home</a>

          <a class="nav-link {{ ($title === "About" ? 'active' : '') }} me-3" href="/about">About</a>

          <a class="nav-link {{ ($active === "posts" ? 'active' : '') }} me-3" href="/posts">Blog</a>

          <a class="nav-link {{ ($active === "categories" ? 'active' : '') }} " href="/categories">Categories</a>

        </div>
      </div>
    </div>
  </nav>

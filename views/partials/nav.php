<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Demo Template</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="<?= urlIs('/start-code') ? 'active bg-dark text-white' : '' ?> nav-link" href="/start-code">Home <span class="sr-only">(current)</span></a>
      <a class="<?= urlIs('/start-code/post') ? 'active bg-dark text-white' : '' ?> nav-link" href="/start-code/post">Post</a>
    </div>
  </div>
</nav>
<div class="container">
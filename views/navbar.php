<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <?php
       
      $links = new \Models\Navbar;
      $li = $links->getNavLinks();
      $url = isset($_GET['url']) ? $_GET['url'] : '/';
      foreach ($li as $link=>$name) {
        echo '<li class="nav-item '.(($url==$link)?'active':'').'">
                 <a class="nav-link" href="' . $link . '" >' . $name . '</a>
              </li>';
      };
      
      ?>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>
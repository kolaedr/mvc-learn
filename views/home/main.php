<h1><?= $title ?></h1>
<?php
foreach($latestNews->articles as $articles){
    // echo $articles->title.'<br>';
    echo ' 
  <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">'.$articles->title.'</h5>
    <p class="card-text">'.$articles->content.'</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div><br>';
}
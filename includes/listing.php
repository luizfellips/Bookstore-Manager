<?php


$results = '';
$i = 1;
foreach ($books as $book) {
  if ($i == 1 || ($i - 1) % 4 == 0) {
    $results .= '<div class="row mt-2">';
  }
  $results .= '<div class="col">
                    <div class="card h-100">
                        <div class="card-body ">
                            <h3 class="card-title">' . $book->getTitle() . '</h3>
                            <h5 class="card-subtitle mb-2 text-body-primary">' . $book->getAuthor() . '</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">' . $book->getCategory() . '</h6>
                            <p class="card-text">' . $book->getDescription() . '</p>
                            <div class="card-footer text-left">
                              <a href="#" class="card-link link-offset-1  mt-5">See more</a>
                              <a href="#" class="card-link link-offset-1  mt-5">Manage</a>
                            </div>
                           
                        </div>
                    </div>
                </div>';
  if ($i == count($books) || $i % 4 == 0) {
    $results .= '</div>';
  }
  $i++;
}
?>

<section class="p-4">

  <table class="table bg-light mt-3 ">
    <?= $results ?>

  </table>

</section>
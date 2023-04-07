<?php


$results = '';
foreach ($books as $book) {
    $results .= '<tr>
                      <td>'. $book->getTitle() .'</td>
                      <td>'. $book->getDescription() .'</td>
                      <td>'. $book->getAuthor() .'</td>
                      <td>'. $book->getPublisher() .'</td>
                      <td>'. $book->getCategory() .'</td>
                      <td>'. $book->getStockUnit() .'</td>
                      <td>'. $book->getPublicationDate() .'</td>
                    </tr>';
  }
?>

<section class="p-4">

    <table class="table bg-light mt-3 ">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Category</th>
            <th>Stock Unit</th>
            <th>Publication Date</th>
          </tr>
        </thead>
        <tbody>
            <?=$results?>
        </tbody>
    </table>

  </section>

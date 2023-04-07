<?php
use App\Entity\Book;
use App\Entity\DBBook;

require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['Title'],$_POST['Description'],$_POST['Author'],$_POST['Publisher'],$_POST['Category'],$_POST['StockUnit'],$_POST['PublicationDate'])){
    $book = new Book(
        $_POST['Title'],
        $_POST['Description'],
        $_POST['Author'],
        $_POST['Publisher'],
        $_POST['Category'],
        $_POST['StockUnit'],
        $_POST['PublicationDate']);
    try {
        DBBook::register($book);

    } catch (PDOException $ex) {
        print_r($ex);
    }

}
include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/form.php";
include __DIR__ . "/includes/footer.php";
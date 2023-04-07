<?php
require __DIR__ . '/vendor/autoload.php';

use App\Entity\DBBook;

$books = DBBook::getProducts();


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listing.php';
include __DIR__ . '/includes/footer.php';
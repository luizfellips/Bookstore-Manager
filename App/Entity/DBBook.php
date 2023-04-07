<?php

namespace App\Entity;

use Module\Database;
use \PDO;

class DBBook
{
	public static function register(Book $book)
	{
		$db = new Database('book');
		$db->insert([
			'title' => $book->getTitle(),
			'description' => $book->getDescription(),
			'author' => $book->getAuthor(),
			'publisher' => $book->getPublisher(),
			'category' => $book->getCategory(),
			'stock_unit' => $book->getStockUnit(),
			'publication_date' => $book->getPublicationDate()
		]);

		return true;
	}

	public static function delete()
	{

	}
	public static function update()
	{

	}
	public static function getProduct(int $id)
	{
		return (new Database('book'))->select('id = ' . $id)->fetchObject(
			"App\Entity\Book",
			['title',
				'description',
				'author',
				'publisher',
				'category',
				'stock_unit',
				'publication_date'
			]
		);
	}
	public static function getProducts($where = null, $order = null, $limit = null)
	{
		return (new Database('book'))
			->select($where, $order, $limit)
			->fetchAll(
				PDO::FETCH_PROPS_LATE | PDO::FETCH_CLASS,
				'App\Entity\Book',
				['title',
					'description',
					'author',
					'publisher',
					'category',
					'stock_unit',
					'publication_date'
				]
			);
	}
}
<?php
declare(strict_types = 1);

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Book
 */
class BookManager
{

	private $_db;

	/**
	 * Constructor
	 *
	 * @param PDO $db
	 */
	public function __construct(PDO $db) 
	{
		$this->setDb($db);
	}

	/**
	 * Set the value of $_db
	 *
	 * @param PDO $db
	 * @return self
	 */
	public function setDb(PDO $db) 
	{
		$this->_db = $db;
		return $this;
	}

	/**
	 * Get the value of $_db
	 *
	 * @return $_db
	 */
	public function getDb()
	{
		return $this->_db;
	}

	/**
	 * Add book to the database
	 *
	 * @param Book $book
	 */
	public function addBook(Book $book)
	{
		$query = $this->getDb()->prepare('INSERT INTO books(title, author, release_date, description, disponibility, category_id, image_id) VALUES (:title, :author, :release_date, :description, :disponibility, :category_id, :image_id)');
		$query->bindValue("title", $book->getTitle(), PDO::PARAM_STR);
        $query->bindValue("author", $book->getAuthor(), PDO::PARAM_STR);
        $query->bindValue("release_date", $book->getRelease_date(), PDO::PARAM_STR);
		$query->bindValue("description", $book->getDescription(), PDO::PARAM_STR);
		$query->bindValue("disponibility", $book->getDisponibility(), PDO::PARAM_INT);
		$query->bindValue("category_id", $book->getCategory_id(), PDO::PARAM_INT);
		$query->bindValue("image_id", $book->getImage_id(), PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * Get all books from the database
	 * 
	 * @return array 
	 */
	public function getBooks()
	{
		$arrays = [];
		$arrayOfBooks = [];
		$arrayOfImages = [];
		$query = $this->getDb()->prepare('SELECT * FROM books LEFT JOIN images ON books.image_id = images.id_image');
		$query->execute();
		// On récupère un tableau contenant plusieurs tableaux associatifs
		$dataBooks = $query->fetchAll(PDO::FETCH_ASSOC);

		// A chaque tour de boucle, on récupère un tableau associatif concernant un seul compte
		foreach ($dataBooks as $dataBook) 
		{
			// On crée un nouvel objet grâce au tableau associatif, qu'on stocke dans $arrayOfAccounts
			$arrayOfBooks[] = new Book($dataBook);
			$arrayOfImages[] = new Image($dataBook);
		}

		$arrays[] = $arrayOfBooks;
		$arrays[] = $arrayOfImages;
		return $arrays;

	}

	/**
	 * Get a book by id
	 *
	 * @param integer $id
	 * @return Book
	 */
	public function getBook(int $id)
	{
		$id = (int) $id;
		$query = $this->getDb()->prepare('SELECT * FROM books WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);
		$query->execute();

		$dataBook = $query->fetch(PDO::FETCH_ASSOC);
		return new Book($dataBook);
	}

	/**
	 * Update account
	 *
	 * @param Book $book
	 */
	public function updateBook(Book $book)
	{
		$query = $this->getDb()->prepare('UPDATE books SET title = :title, author = :author, release_date = :release_date, description = :description, disponibility = :disponibility WHERE id = :id');
		$query->bindValue("title", $book->getTitle(), PDO::PARAM_STR);
		$query->bindValue("author", $book->getAuthor(), PDO::PARAM_STR);
		$query->bindValue("release_date", $book->getRelease_date(), PDO::PARAM_STR);
		$query->bindValue("description", $book->getDescription(), PDO::PARAM_STR);
		$query->execute();
	}

	/**
	 * Delete account
	 *
	 * @param integer $id
	 */
	public function deleteBook(int $id)
	{
		$query = $this->getDb()->prepare('DELETE FROM accounts WHERE id = :id');
		$query->bindValue("id", $id, PDO::PARAM_INT);		
		$query->execute();
	}
}
<?php
declare(strict_types = 1);

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Admin
 */
class ImageManager
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
	 * return self
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
	 * Add image to the database
	 *
	 * @param Image $image
	 */
	public function add(Image $image)
	{
		$query = $this->getDb()->prepare('INSERT INTO images(source, alt) VALUES (:source, :alt)');
		$query->bindValue("source", $image->getSource(), PDO::PARAM_STR);
        $query->bindValue("alt", $image->getAlt(), PDO::PARAM_STR);
		$query->execute();
	}
    
}
<?php
	include 'Book.php';
	
	class Model
	{
		public function getBookDetails()
		{
			return array(
				"xyz"=>new Book('xyz','Payal','classic'),
				"jungle"=>new Book('jungle','Saurabh','hh')
			);
		}
		
		public function getBook($title)
		{
			$allBook=$this->getBookDetails();
			return $allBook[$title];
		}
	}
?>
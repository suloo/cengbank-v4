<?php 
	class User {
		
		private $Name;
		private $Address;
		private $Phone;
		private $EMail;
		private $CompanyId;
		private $Password;
		private $UserName;
		private $CreditId;
		
		function __construct($Name = NULL, $Address = NULL, $Phone = NULL , $EMail = NULL,$CompanyId = NULL,$Password = NULL,$UserName = NULL,$CreditId = NULL) {
			$this->Name = $Name;
			$this->Address = $Address;
			$this->Phone = $Phone;
			$this->EMail = $EMail;
			$this->CompanyId = $CompanyId;
			$this->Password = $Password;
			$this->UserName = $UserName;
			$this->CreditId = $CreditId;
			
		}
		public function getName() {
			return $this->Name;	
		}
		
		public function getAddress() {
			return $this->Address;
		}
			
		public function getPhone() {
			return $this->Phone;
		}
		public function getEMail() {
			return $this->EMail;
		}
		public function getCompanyId() {
			return $this->CompanyId;
		}
		public function getPassword() {
			return $this->Password;	
		}
		public function getUserName() {
			return $this->UserName;
			
		}
			public function getCreditId() {
			return $this->CreditId;
		}
			
		}
	class c{
		private $CompanyId;
	function __construct($CompanyId = NULL)
	{
		$this->CompanyId = $CompanyId;
		
	}
	public function getCompanyId() {
			return $this->CompanyId;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	?>

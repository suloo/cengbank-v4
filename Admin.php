<?php 
	class Admin {
		private $AdminId;
		private $AdminName;
		
		private $AdminPassword;
		
		function __construct($AdminId = NULL, $AdminName = NULL, $AdminPassword = NULL ) {
			$this->AdminId = $AdminId;
			$this->AdminName = $AdminName;
			$this->AdminPassword = $AdminPassword;
			
			
		}
		public function getAdminName() {
			return $this->AdminName;	
		}
		
		public function getAdminId() {
			return $this->AdminId;
		}
			
		public function getAdminPassword() {
			return $this->AdminPassword;
		}
		
		
			
		}
		
		
		
		
		class CreditCard {
		private $CreditCardId;
		private $CompanyId;
		private $ExpirationDate;
		
		function __construct($CreditCardId = NULL, $CompanyId = NULL, $ExpirationDate = NULL ) {
			$this->CreditCardId = $CreditCardId;
			$this->CompanyId = $CompanyId;
			$this->ExpirationDate = $ExpirationDate;
			
			
		}
		public function getCompanyId() {
			return $this->CompanyId;	
		}
		
		public function getCreditCardId() {
			return $this->CreditCardId;
		}
			
		public function getExpirationDate() {
			return $this->ExpirationDate;
		}
		
		
			
		}
		class Credit {
		private $CreditId;
		private $CompanyCreditPoint;
		private $CreditAmount;
		private $PaymentDueDate;
		private $CompanyId;
		
		
		function __construct($CreditId = NULL, $CompanyCreditPoint = NULL, $CreditAmount = NULL, $PaymentDueDate = NULL, $CompanyId = NULL ) {
			$this->CreditId = $CreditId;
			$this->CompanyCreditPoint = $CompanyCreditPoint;
			$this->CreditAmount = $CreditAmount;
			$this->PaymentDueDate = $PaymentDueDate;
			$this->CompanyId = $CompanyId;
			
		}
		public function getCreditId() {
			return $this->CreditId;	
		}
		
		public function getCompanyCreditPoint() {
			return $this->CompanyCreditPoint;
		}
			
		public function getCreditAmount() {
			return $this->CreditAmount;
		}
		public function getPaymentDueDate() {
			return $this->PaymentDueDate;
			
		}public function getCompanyId() {
			return $this->CompanyId;
		}
		
			
		}
		class AccountOpr {
		private $OperationId;
		private $SenderAccountNumber;
		private $ReceiverAccountNumber;
		private $Amount;
		private $Validation;
		private $DDate;
		private $CompanyId;
		
		
		function __construct($OperationId = NULL, $SenderAccountNumber = NULL, $ReceiverAccountNumber = NULL, $Amount = NULL, $Validation = NULL, $DDate = NULL, $CompanyId = NULL  ) {
			$this->OperationId = $OperationId;
			$this->SenderAccountNumber = $SenderAccountNumber;
			$this->ReceiverAccountNumber = $ReceiverAccountNumber;
			$this->Amount = $Amount;
			$this->Validation = $Validation;
			$this->DDate = $DDate;
			$this->CompanyId = $CompanyId;
			
		}
		public function getOperationId() {
			return $this->OperationId;	
		}
		
		public function getSenderAccountNumber() {
			return $this->SenderAccountNumber;
		}
			
		public function getReceiverAccountNumber() {
			return $this->ReceiverAccountNumber;
		}
		public function getAmount() {
			return $this->Amount;
			
		}public function getValidation() {
			return $this->Validation;
		}
		public function getDDate() {
			return $this->DDate;
			
		}public function getCompanyId() {
			return $this->CompanyId;
		}
		}
		
	class b{
		private $Bal;
	function __construct($Bal = NULL)
	{
		$this->Bal = $Bal;
		
	}
	public function getBal() {
			return $this->Bal;
		}
	}
		
	class cc{
		private $CompanyId;
	function __construct($CompanyId = NULL)
	{
		$this->CompanyId = $CompanyId;
		
	}
	public function getCompanyId() {
			return $this->CompanyId;
		}
	}
	
	

	
	

	
	
	
	class accountflow{
		private $SenderAccountNumber;
		private $ReceiverAccountNumber;
		private $Amount;
		private $Validation;
		private $DDate;
		
	function __construct($SenderAccountNumber = NULL,$ReceiverAccountNumber = NULL,$Amount = NULL,$Validation = NULL,$DDate = NULL)
	{
		$this->SenderAccountNumber = $SenderAccountNumber;
		$this->ReceiverAccountNumber = $ReceiverAccountNumber;
		$this->Amount = $Amount;
		$this->Validation = $Validation;
		$this->DDate = $DDate;
	
	}
	public function getSenderAccountNumber() {
			return $this->SenderAccountNumber;
		}
		
		public function getReceiverAccountNumber() {
			return $this->ReceiverAccountNumber;
		}
		public function getAmount() {
			return $this->Amount;
		}
		public function getValidation() {
			return $this->Validation;
		}
		public function getDDate() {
			return $this->DDate;
		}
		
		
		
		
	}
		
		
		
		class accountnumber{
		private $AccountNumber;
	function __construct($AccountNumber = NULL)
	{
		$this->AccountNumber = $AccountNumber;
		
	}
	public function getAccountNumber() {
			return $this->AccountNumber;
		}
	}
		
		
		
			
		
		
	
?>
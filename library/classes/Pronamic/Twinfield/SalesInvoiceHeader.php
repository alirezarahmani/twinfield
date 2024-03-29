<?php

namespace Pronamic\Twinfield;

/**
 * Title: Sales invoice header
 * Description: 
 * Copyright: Copyright (c) 2005 - 2011
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0
 */
class SalesInvoiceHeader {
	/**
	 * The code of this office
	 * 
	 * @var string
	 */
	private $office;

	/**
	 * The sales invoice type
	 *
	 * @var string
	 */
	private $type;

	/**
	 * The sales invoice number
	 * 
	 * @var string
	 */
	private $invoiceNumber;

	/**
	 * The invoice date
	 * 
	 * @var DateTime
	 */
	private $invoiceDate;

	/**
	 * The due date
	 * 
	 * @var DateTime
	 */
	private $dueDate;

	/**
	 * The bank
	 * 
	 * @var string
	 */
	private $bank;

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * Constructs and initializes an sales invoice header object
	 */
	public function __construct() {
		
	}

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * Get the office of the sales invoice
	 * 
	 * @return string
	 */
	public function getOffice() {
		return $this->office;
	}

	/**
	 * Set the office of the sales invoice
	 * 
	 * @return string
	 */
	public function setOffice($code) {
		$this->office = $code;
	}

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * Get the type
	 * 
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set the type
	 * 
	 * @return string
	 */
	public function setType($type) {
		$this->type = $type;
	}

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * Get the invoice number
	 * 
	 * @return string
	 */
	public function getInvoiceNumber() {
		return $this->number;
	}

	/**
	 * Set the invoice number
	 * 
	 * @return string
	 */
	public function setInvoiceNumber($number) {
		$this->number = $number;
	}
}

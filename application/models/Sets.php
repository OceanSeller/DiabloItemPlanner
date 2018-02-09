<?php

class Sets extends CSV_Model
{
      //pk
	    public $id;
      //fk
	    public $weaponAccessories;
      //fk
	    public $helmetAccessories;
      public $bootsAccessories;
      public $armorAccessories;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * Return the number of records in this table.
	 * @return int The number of records in this table
	 */
	function size()
	{

	}

	/**
	 * Return the field names in this table, from the table metadata.
	 * @return array(string) The field names in this table
	 */
	function fields()
	{

	}

//---------------------------------------------------------------------------
//  C R U D methods
//---------------------------------------------------------------------------
	/**
	 * Create a new data object.
	 * Only use this method if intending to create an empty record and then populate it.
	 * @return object   An object with all its fields in place.
	 */
	function create()
	{

	}

	/**
	 * Add a record to the DB.
	 * Request fails if the record already exists.
	 * @param mixed $record The record to add, either an object or an associative array.
	 */
	function add($record)
	{

	}

	/**
	 * Retrieve an existing DB record as an object.
	 * @param string $key Primary key of the record to return.
	 * @param string $key2 Second part of composite key, if applicable
	 * @return object The requested record, null if not found.
	 */
	function get($key, $key2 = null)
	{

	}

	/**
	 * Update an existing DB record.
	 * Method fails if the record does not exist.
	 * @param mixed $record The record to update, either an object or an associative array.
	 */
	function update($record)
	{

	}

	/**
	 * Delete an existing DB record.
	 * Method fails if the record does not exist.
	 * @param string $key Primary key of the record to delete.
	 * @param string $key2 Second part of composite key, if applicable
	 */
	function delete($key, $key2 = null)
	{

	}

	/**
	 * Determine if a record exists.
	 * @param string $key Primary key of the record sought.
	 * @param string $key2 Second part of composite key, if applicable
	 * @return boolean True if the record exists, false otherwise.
	 */
	function exists($key, $key2 = null)
	{

	}

	/**
	 * Determine the highest key used.
	 * @return string The highest key
	 */
	function highest()
	{

	}

	/**
	 * Return the first record
	 * @return object The first record
	 */
	function first()
	{

	}

}

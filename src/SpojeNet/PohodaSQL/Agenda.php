<?php
/**
 * PohodaSQL - Common Agenda engine class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of Evidence
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Agenda extends \Ease\SQL\Engine
{
    /**
     * Klíčový sloupeček v pohodě
     * @var string
     */
    public $keyColumn = 'ID'; //sloupeček pro defaultní klíčování

    /**
     * Database object
     * 
     * @param mixed $identifier
     * @param array $options
     */
    public function __construct($identifier = null, $options = [])
    {
        if (defined(self::STRUCTURE)) {
            $this->setMyKey(array_key_exists('ID', self::STRUCTURE) ? 'ID' : null );
            $this->myCreatedColumn      = array_key_exists('DatCreate',
                    self::STRUCTURE) ? 'DatCreate' : null;
            $this->myLastModifiedColumn = array_key_exists('DatSave',
                    self::STRUCTURE) ? 'DatSave' : null;
            $this->nameColumn           = array_key_exists('IDS',
                    self::STRUCTURE) ? 'IDS' : null;
        }
        parent::__construct($identifier, $options);
    }

    /**
     * Set data filed value
     *
     * @param string $columnName název datové kolonky
     * @param mixed  $value      hodnota dat
     *
     * @return bool Success
     */
    public function setDataValue($columnName, $value)
    {
        return array_key_exists($columnName, self::STRUCTURE) ? parent::setDataValue($columnName,
                $value) : new Exception('Unknown field '.$columnName);
    }

    /**
     * Record ID
     * 
     * @return int
     */
    public function getID()
    {
        return (int) $this->getDataValue('ID');
    }

    /**
     * Record identification string
     * 
     * @return string
     */
    public function getIDS()
    {
        return $this->getDataValue('IDS');
    }

    /**
     * Load Pohoda Data
     * 
     * @param int|string $itemId use string to load by IDS (integer for ID)
     * 
     * @return int number of columns loaded
     */
    public function loadFromSQL($itemId)
    {
        $bck = $this->getKeyColumn();
        if (is_string($itemId)) {
            $this->setKeyColumn('IDS');
        }
        $loaded = parent::loadFromSQL($itemId);
        $this->setKeyColumn($bck);
        return $loaded;
    }

    /**
     * Synchronise object data with database
     * 
     * @param array $data
     * 
     * @return boolean
     */
    public function sync($data = null)
    {
        return $this->loadFromSQL($this->insertToSQL(is_null($data) ? $this->getData()
                        : $data)) == 1;
    }
}

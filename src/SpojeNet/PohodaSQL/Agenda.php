<?php

/**
 * PohodaSQL - Common Agenda engine class
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020,2023 Spoje.Net
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
     * SQL Table structure
     * @const array
     */
    public $struct = [];

    /**
     * DatCreate column name
     *
     * @var string
     */
    public $createdColumn;

    /**
     * DatSave column name
     *
     * @var string
     */
    public $lastModifiedColumn;

    /**
     * SetUp Object to be ready for connect
     *
     * @param array $options Object Options (dbType,server,username,password,database,
     *                                       port,connectionSettings,myTable,debug)
     */
    public function setUp($options = [])
    {
        $this->setKeyColumn(array_key_exists('ID', $this->struct) ? 'ID' : null);
        $this->createdColumn      = array_key_exists('DatCreate', $this->struct)
                ? 'DatCreate' : null;
        $this->lastModifiedColumn = array_key_exists('DatSave', $this->struct) ? 'DatSave'
                : null;
        $this->nameColumn         = array_key_exists('IDS', $this->struct) ? 'IDS'
                : null;
        parent::setUp($options);
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
        return array_key_exists($columnName, $this->struct) ? parent::setDataValue(
            $columnName,
            $value
        ) : new \Exception('Unknown field ' . $columnName);
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
}

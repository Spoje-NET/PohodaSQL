<?php

namespace tools;

/**
 * Description of Prober
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Prober extends \SpojeNet\PohodaSQL\Agenda
{
    public $myTable = 'information_schema';

    public function getTables()
    {
        $this->setMyTable('information_schema.tables');
        $tables = [];
        foreach ($this->getAll() as $tableId => $tableInfo) {
            $tables[$tableInfo['TABLE_NAME']] = $tableInfo['TABLE_NAME'];
        }
        return $tables;
    }

    public function getColumns($tableName)
    {
        $this->setMyTable('information_schema.columns');
        $structure = [];
        foreach ($this->listingQuery()->where(['TABLE_NAME' => $tableName])->fetchAll() as $columnId => $columnInfo) {
            $structure[$columnInfo['COLUMN_NAME']] = [
                'type' => $columnInfo['DATA_TYPE'],
                'size' => ($columnInfo['DATA_TYPE'] == 'varchar') ? $columnInfo['CHARACTER_MAXIMUM_LENGTH']
                    : $columnInfo['NUMERIC_PRECISION'],
                'default' => ($columnInfo['DATA_TYPE'] == 'bit') ?  (($columnInfo['COLUMN_DEFAULT'] == '((0))') ? false : null) 
                    : $columnInfo['COLUMN_DEFAULT']
            ];
        }

        return $structure;
    }

    public function classSkeleton($tableName)
    {
        $className = ucfirst($tableName);
        return '<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) '.date('Y').' Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of '.$className.'
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class '.$className.' extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = \''.$tableName.'\';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = '.var_export($this->getColumns($tableName), true).';

    /**
     * '.$tableName.' handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */    
    public function __construct($identifier = null, $options = array())
    {
        parent::__construct($identifier, $options);
    }

}
            
';
    }

    public function saveClass($tableName)
    {
        return file_put_contents(ucfirst($tableName).'.php',
            $this->classSkeleton($tableName));
    }
}

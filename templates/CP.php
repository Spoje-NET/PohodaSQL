<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of CP
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class CP extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'CP';

    /**
     * SQL Table structure
     * @const array
     */
    public $struct = [
        'ID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => NULL,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefRidic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTpZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelGlxSkupSaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Proc1' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Proc2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Proc3' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'ZvStrav' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'Kapesne' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RelTypCP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpDpr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RefVOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'CenyPHM' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'SpotrPru' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'RelTypVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelDrVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelPHM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => NULL,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'CasOdj' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'CasPrj' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => NULL,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Odjezd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Cil' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Prijezd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'Ucel' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => NULL,
        ],
        'OstZAM' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'DatVyuct' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatZauct' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'Vyuctov' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UcZal' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'UcNahr' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => NULL,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
    ];

    /**
     * CP handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

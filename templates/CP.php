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
            'default' => null,
        ],
        'UsrOrder' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Labels' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Cislo' =>
        [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'RelCR' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefRidic' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpZam' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelGlxSkupSaz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Proc1' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Proc2' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Proc3' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'ZvStrav' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Kapesne' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RelTypCP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpDpr' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefVOZ' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CenyPHM' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'SpotrPru' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RelTypVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelDrVoz' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelPHM' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProcPHM' =>
        [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'DatOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'CasOdj' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'CasPrj' =>
        [
            'type' => 'varchar',
            'size' => '5',
            'default' => null,
        ],
        'DatDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Odjezd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Cil' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Prijezd' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'Ucel' =>
        [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'OstZAM' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'DatVyuct' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZauct' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Vyuctov' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Polozky' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UcZal' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UcNahr' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Oznacil' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' =>
        [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Lock1' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'DatCreate' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'NullCheck_Cislo' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
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

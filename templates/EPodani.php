<?php
/**
 * PohodaSQL - Property Handler
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Spoje.Net
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of EPodani
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class EPodani extends Agenda
{
    /**
     * Work with given table
     * @var string
     */
    public $myTable = 'EPodani';

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
        'Sel' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RelSluzba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelZpusob' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'RelDruhEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'RelTypEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatOdes' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatPrij' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'ElPodpis' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Rozsahle' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'RozsahleId' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'RozsahlePw' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'RefID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Vazba' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'DatVeta' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'Sestava' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelStavEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'DatStav' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'IdentEPps' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => NULL,
        ],
        'IdentEP' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => NULL,
        ],
        'RespPoint' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => NULL,
        ],
        'Dorucenka' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'Submit' =>
        [
            'type' => 'image',
            'size' => NULL,
            'default' => NULL,
        ],
        'RelObdobi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => NULL,
        ],
        'InterOd' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'InterDo' =>
        [
            'type' => 'datetime',
            'size' => NULL,
            'default' => NULL,
        ],
        'ImpEnesch' =>
        [
            'type' => 'bit',
            'size' => NULL,
            'default' => false,
        ],
        'HistorieLog' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
        'Official' =>
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => NULL,
            'default' => NULL,
        ],
    ];

    /**
     * EPodani handler
     * 
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

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
            'default' => null,
        ],
        'Sel' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelSluzba' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpusob' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Popis' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'RelDruhEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTypEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatOdes' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatPrij' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'ElPodpis' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Rozsahle' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RozsahleId' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'RozsahlePw' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'RefID' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Vazba' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'DatVeta' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'Sestava' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'RelStavEP' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatStav' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'IdentEPps' =>
        [
            'type' => 'varchar',
            'size' => '50',
            'default' => null,
        ],
        'IdentEP' =>
        [
            'type' => 'varchar',
            'size' => '40',
            'default' => null,
        ],
        'RespPoint' =>
        [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Dorucenka' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'Submit' =>
        [
            'type' => 'image',
            'size' => null,
            'default' => null,
        ],
        'RelObdobi' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Rok' =>
        [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'InterOd' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'InterDo' =>
        [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'ImpEnesch' =>
        [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'HistorieLog' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Official' =>
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
        'Pozn' =>
        [
            'type' => 'text',
            'size' => null,
            'default' => null,
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

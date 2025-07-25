<?php

declare(strict_types=1);

/**
 * This file is part of the PohodaSQL package
 *
 * https://github.com/Spoje-NET/PohodaSQL
 *
 * (c) Spoje.Net <https://spoje.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SpojeNet\PohodaSQL;

/**
 * Description of FApol.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class FakturaPolozka extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'FApol';

    /**
     * SQL Table structure.
     *
     * @const array
     */
    public array $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RefAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSKz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefSKz0' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPol' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'varchar',
            'size' => '90',
            'default' => null,
        ],
        'ParSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'Kod' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
        'VCislo' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'SKzVC' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'TextMode' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Mnozstvi' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'Prenes' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'PrenesBfr' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'MJ' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'MJKoef' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'KcJedn' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Sleva' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RelSzDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ProcentoDPH' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'SDph' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Kc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDPH' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmJedn' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Cm' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmDPH' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'JCbezDPH' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpDPH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'PDP' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'RelTpPrepl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'MOSSDruh' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RelZaruka' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zaruka' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DatExp' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'IsDocID' => [
            'type' => 'varchar',
            'size' => '36',
            'default' => null,
        ],
        'RelTypPolEET' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'DICPover' => [
            'type' => 'varchar',
            'size' => '18',
            'default' => null,
        ],
        'CmKurs' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'CmMnoz' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcKRozd' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'DatCreate' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatSave' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'OrderFld' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * FApol handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

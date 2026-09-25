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
 * Description of IM.
 *
 * `Vyuzito` (float) is "Uplatněný odpis v %" - the "Danový odpis" section's
 * own field in the Pohoda GUI (labeled "% ročního odpisu"), and the same
 * value shown in the asset list grid's "Uplat." column. Confirmed
 * 2026-09-25 directly against production: it is a plain scalar on the IM
 * row itself (seen as `100.0` on every real card in one company), NOT
 * derived from `IModpis`/`IMuodpis` (those hold the yearly/monthly
 * depreciation *schedule* - a related but separate concept; see {@see
 * Odpis} and {@see UplatnenyOdpis}). A tool that duplicates a card (e.g.
 * moving it to another company) must copy `Vyuzito` itself - copying only
 * `IModpis`/`IMuodpis` leaves this GUI field blank even though the
 * schedule tables are fully populated. Do not confuse with `Vyuziti`
 * (varchar) - a separate free-text usage description field.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Majetek extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IM';

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
        'UsrOrder' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefCin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefStr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
            'default' => null,
        ],
        'RelCR' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'ParSym' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelTpIM' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelSkOdp' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'UcZust' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelPoDatum' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpOdp' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpLik' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpVyr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelZpPor' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Vyuziti' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RefIMO' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Zivotnost' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RefIMmist' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefIMclen' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Sel' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Labels' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Prevod' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Upraveno' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Uzavreno' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'Datum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatZar' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'DatLikv' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Kc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcDanova' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZv' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcOdeps' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcLikv' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZust' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZustUcetni' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'ZauctLikv' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Vyuzito' => [
            'type' => 'float',
            'size' => '53',
            'default' => null,
        ],
        'RokZvys' => [
            'type' => 'smallint',
            'size' => '5',
            'default' => null,
        ],
        'RefAD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Firma' => [
            'type' => 'varchar',
            'size' => '255',
            'default' => null,
        ],
        'Oznacil' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Ucetni' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Creator' => [
            'type' => 'varchar',
            'size' => '2',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Pozn2' => [
            'type' => 'text',
            'size' => null,
            'default' => null,
        ],
        'Lock' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'Lock1' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
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
        'NullCheck_Cislo' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * IM handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

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
 * Description of IMpohyb.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class MajetkoveOperace extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IMpohyb';

    /**
     * SQL Table structure.
     *
     * @const array
     */
    public $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelUzavreno' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefPredm' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpPoh' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Datum' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'Kc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'OdpisMin' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'varchar',
            'size' => '48',
            'default' => null,
        ],
        'RelPk' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelImAg' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelAgID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'Cislo' => [
            'type' => 'varchar',
            'size' => '32',
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
    ];

    /**
     * IMpohyb handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

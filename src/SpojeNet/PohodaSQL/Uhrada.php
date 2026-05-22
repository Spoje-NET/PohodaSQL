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
 * Payment (Úhrada).
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Uhrada extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'Uhrady';

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
        'DatumU' => [
            'type' => 'datetime',
            'size' => null,
            'default' => null,
        ],
        'RelAgH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDH' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloH' => [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'VarSymH' => [
            'type' => 'varchar',
            'size' => '20',
            'default' => null,
        ],
        'RelAgU' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDU' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RefDD' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'CisloU' => [
            'type' => 'varchar',
            'size' => '33',
            'default' => null,
        ],
        'KcU' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmH' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'CmU' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcKRozd' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'BZavaz' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'UzKursu' => [
            'type' => 'bit',
            'size' => null,
            'default' => false,
        ],
        'KcEET' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelAgPrepl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelIDPrepl' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcPrepl' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'Pozn' => [
            'type' => 'varchar',
            'size' => '64',
            'default' => null,
        ],
    ];

    /**
     * Uhrady handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, array $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

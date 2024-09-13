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
 * Description of IMpredm.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Predmet extends Agenda
{
    /**
     * Work with given table.
     */
    public string $myTable = 'IMpredm';

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
        'IDS' => [
            'type' => 'varchar',
            'size' => '10',
            'default' => null,
        ],
        'SText' => [
            'type' => 'varchar',
            'size' => '32',
            'default' => null,
        ],
        'Kc' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcZust' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'RelZpVyr' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'RelTpLik' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        'KcLikv' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
        ],
        'KcRucne' => [
            'type' => 'money',
            'size' => '19',
            'default' => null,
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
        'OrderFld' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
    ];

    /**
     * IMpredm handler.
     *
     * @param mixed $identifier Initial content/identifier
     * @param array $options    Object options
     */
    public function __construct($identifier = null, $options = [])
    {
        parent::__construct($identifier, $options);
    }
}

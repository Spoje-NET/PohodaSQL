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
 * The parent Majetek (IM) card an operation belongs to is `RefAg`, not
 * `RefPredm` despite the latter's name suggesting "Předmět" (the asset
 * itself) - confirmed 2026-09-17 against a live Pohoda database via
 * `sys.foreign_keys` (`IMpohyb.RefAg -> IM.ID` is the only FK from this
 * table to `IM`). `RefPredm` is unrelated (its purpose was not
 * identified; possibly tied to kit/`soubor` component items). Setting
 * `RefPredm` to the card's ID instead of `RefAg` silently creates an
 * operation row that never shows up on the card - see
 * https://github.com/Spoje-NET/pohoda-asset-importer for the bug this
 * caused.
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
    public array $struct = [
        'ID' => [
            'type' => 'int',
            'size' => '10',
            'default' => null,
        ],
        // FK to IM.ID - the card this operation belongs to (see class docblock).
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
        // NOT a link to the parent IM card - see class docblock. Do not use
        // this to associate an operation with its Majetek card; use RefAg.
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
        'CisloZAK' => [
            'type' => 'varchar',
            'size' => '12',
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

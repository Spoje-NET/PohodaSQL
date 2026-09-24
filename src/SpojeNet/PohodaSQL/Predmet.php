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
 * "Položky souboru" (items of a soubor/kit-type IM card, shown in the
 * Pohoda GUI on the asset card's own "Položky souboru" tab): a fixed-asset
 * card can have SEVERAL IMpredm rows, one per component item, each with
 * its own SText/Kc/KcZust/RelZpVyr/RelTpLik/KcLikv/KcRucne (Předmět/Cena/
 * Zůstatek/Způsob vyřazení/.../Likvidace/Odhad in the GUI grid) - not just
 * a single row. Confirmed 2026-09-23 against a live "soubor" card
 * (fictionalized here as StwPh_10000001_2026 / "Acme Capital", card
 * 20IM00007) holding 13 such rows. IMpohyb.RefPredm points at one of
 * these rows when one exists, but does not itself enumerate the full
 * item list.
 *
 * RefPredm is OPTIONAL, not a mandatory FK - an ordinary (non-"soubor")
 * card legitimately has ZERO IMpredm rows and RefPredm=0 on every one of
 * its IMpohyb rows. Confirmed 2026-09-23 against a real, natively
 * maintained card with 9 years of production history. Do NOT manufacture
 * a placeholder IMpredm row "to satisfy the FK" when none exists - a
 * placeholder with a blank IDS is not selectable in Pohoda's own
 * "Předmět" picker and permanently blocks further edits to the card in
 * the desktop client (this happened in production and had to be
 * corrected afterwards).
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
    public array $struct = [
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

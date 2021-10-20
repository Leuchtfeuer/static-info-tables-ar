<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (AR)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameAr = '';

    /**
     * @return string
     */
    public function getShortNameAr(): string
    {
        return $this->shortNameAr;
    }

    /**
     * @param string $shortNameAr
     */
    public function setShortNameAr(string $shortNameAr)
    {
        $this->shortNameAr = $shortNameAr;
    }
}

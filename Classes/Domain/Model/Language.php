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

class Language extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameAr = '';

    public function getNameAr(): string
    {
        return $this->nameAr;
    }

    public function setNameAr(string $nameAr)
    {
        $this->nameAr = $nameAr;
    }
}

<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    protected $shortNameAr = '';

    public function getShortNameAr(): string
    {
        return $this->shortNameAr;
    }

    public function setShortNameAr(string $shortNameAr): void
    {
        $this->shortNameAr = $shortNameAr;
    }
}

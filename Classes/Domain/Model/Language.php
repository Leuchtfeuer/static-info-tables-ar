<?php
declare(strict_types=1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameAr = '';

    public function getNameAr(): string
    {
        return $this->nameAr;
    }

    public function setNameAr(string $nameAr): void
    {
        $this->nameAr = $nameAr;
    }
}

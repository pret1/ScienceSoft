<?php

declare(strict_types=1);

namespace ScienceSoft\CharacterBook\Plugin\Model;

use ScienceSoft\CharacterBook\Model\Character;

class CharacterPlugin
{
    /**
     * @param Character $subject
     * @param $result
     * @return string
     */
    public function afterGetName(Character $subject, $result): string
    {
        return $result . " some text";
    }
}

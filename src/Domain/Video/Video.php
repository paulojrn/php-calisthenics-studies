<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    private bool $visible = false;
    public int $ageLimit;
    
    public function isPublic(): bool
    {
        return $this->visible;
    }    

    public function publish(): void
    {
        $this->visible = true;
    }

    /* === DEPRECATED CODE === */

    /**
     * @deprecated by $visible attribute
     */
    private const PUBLIC = 1;

    /**
     * @deprecated by $visible attribute
     */
    private const PRIVATE = 2;

    /**
     * @deprecated by isPublic function
     */
    public function getVisibility(): int
    {
        return $this->visibility;
    }

    /**
     * @deprecated by publish function
     */
    public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    {
        if (!in_array($visibility, [self::PUBLIC, self::PRIVATE])) {
            throw new \InvalidArgumentException('Invalid visibility');
        }

        $this->visibility = $visibility;
    }

    /**
     * @deprecated by turn attribute ageLimit public
     */
    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    /**
     * @deprecated by turn attribute ageLimit public
     */
    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}

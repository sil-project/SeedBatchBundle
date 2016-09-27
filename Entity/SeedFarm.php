<?php

namespace Librinfo\SeedBatchBundle\Entity;

use AppBundle\Entity\Extension\LibrinfoSeedBatchBundle\SeedFarmExtension;
use Librinfo\OuterExtensionBundle\Entity\Traits\OuterExtensible;

use Librinfo\DoctrineBundle\Entity\Traits\BaseEntity;
use Librinfo\DoctrineBundle\Entity\Traits\Addressable;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;
use Librinfo\DoctrineBundle\Entity\Traits\Loggable;
use Librinfo\UserBundle\Entity\Traits\Traceable;

/**
 * SeedFarm
 */
class SeedFarm
{
    use BaseEntity,
        SeedFarmExtension,
        OuterExtensible,
        Addressable,
        Traceable,
        Loggable,
        Descriptible;

    /**
     * @var string
     */
    private $code;


    /**
     * Set code
     *
     * @param string $code
     *
     * @return SeedFarm
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}


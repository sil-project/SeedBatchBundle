<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Librinfo\CRMBundle\Entity\Organism;
use Librinfo\DoctrineBundle\Entity\Traits\BaseEntity;
use Librinfo\UserBundle\Entity\Traits\Traceable;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;
use Librinfo\DoctrineBundle\Entity\Traits\Loggable;

/**
 * Producer
 */
class SeedBatch
{
    use BaseEntity,
        Traceable,
        Descriptible,
        Loggable
    ;

    /**
     * @var string
     */
    private $code;


    /**
     * Set code
     *
     * @param string $code
     *
     * @return SeedBatch
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

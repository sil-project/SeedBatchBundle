<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Librinfo\CRMBundle\Entity\Organism;
use Librinfo\DoctrineBundle\Entity\Traits\BaseEntity;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;
use Librinfo\DoctrineBundle\Entity\Traits\Loggable;
use Librinfo\UserBundle\Entity\Traits\Traceable;
use Librinfo\VarietiesBundle\Entity\Variety;

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
     * @var Variety
     */
    private $variety;


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

    /**
     * Set variety
     *
     * @param Variety $variety
     *
     * @return SeedBatch
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;
        $variety->addSeedBatch($this);

        return $this;
    }

    /**
     * Get code
     *
     * @return Variety
     */
    public function getVariety()
    {
        return $this->variety;
    }

}

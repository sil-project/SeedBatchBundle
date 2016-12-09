<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Entity;

use AppBundle\Entity\OuterExtension\LibrinfoSeedBatchBundle\PlotExtension;
use Blast\BaseEntitiesBundle\Entity\Traits\Addressable;
use Blast\BaseEntitiesBundle\Entity\Traits\BaseEntity;
use Blast\BaseEntitiesBundle\Entity\Traits\Descriptible;
use Blast\BaseEntitiesBundle\Entity\Traits\Loggable;
use Blast\BaseEntitiesBundle\Entity\Traits\Searchable;
use Blast\OuterExtensionBundle\Entity\Traits\OuterExtensible;
use Librinfo\UserBundle\Entity\Traits\Timestampable;

/**
 * Plot
 */
class Plot
{
    use BaseEntity,
        PlotExtension,
        OuterExtensible,
        Addressable,
        Timestampable,
        Loggable,
        Descriptible,
        Searchable;

    /**
     * @var string
     */
    private $code;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $seedBatches;

    /**
     * @var \Librinfo\CRMBundle\Entity\Organism
     */
    private $producer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seedBatches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Plot
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
     * Add seedBatch
     *
     * @param \Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch
     *
     * @return Plot
     */
    public function addSeedBatch(\Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch)
    {
        $this->seedBatches[] = $seedBatch;

        return $this;
    }

    /**
     * Remove seedBatch
     *
     * @param \Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSeedBatch(\Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch)
    {
        return $this->seedBatches->removeElement($seedBatch);
    }

    /**
     * Get seedBatches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeedBatches()
    {
        return $this->seedBatches;
    }

    /**
     * Set producer
     *
     * @param \Librinfo\CRMBundle\Entity\Organism $producer
     *
     * @return Plot
     */
    public function setProducer(\Librinfo\CRMBundle\Entity\Organism $producer = null)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return \Librinfo\CRMBundle\Entity\Organism
     */
    public function getProducer()
    {
        return $this->producer;
    }
}


<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Librinfo\SeedBatchBundle\Entity\SeedBatch;

trait HasSeedBatches
{
    /**
     * @var Collection
     */
    private $seedBatches;

    public function initSeedBatches()
    {
        $this->seedBatches = new ArrayCollection();
    }

    /**
     * This function is called by the owning side of the N-N relationship
     * @param SeedBatch $seedBatch
     * @return this
     */
    public function addSeedBatch(SeedBatch $seedBatch)
    {
        $this->seedBatches->add($seedBatch);
        return $this;
    }

    /**
     * @param SeedBatch $seedBatch
     * @return this
     */
    public function removeSeedBatch(SeedBatch $seedBatch)
    {
        $this->seedBatches->removeElement($seedBatch);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSeedBatches()
    {
        return $this->seedBatches;
    }
}
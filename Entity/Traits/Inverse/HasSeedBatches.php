<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits\Inverse;

use Doctrine\Common\Collections\Collection;
use Librinfo\SeedBatchBundle\Entity\SeedBatch;

trait HasSeedBatches
{
    /**
     * @var Collection
     */
    private $seedBatches;

    /**
     * Add seed batch
     *
     * @param SeedBatch $seedBatch
     *
     * @return this
     */
    public function addSeedBatch($seedBatch)
    {
        $this->seedBatches[] = $seedBatch;
        return $this;
    }

    /**
     * Remove seed batch
     *
     * @param SeedBatch $seedBatch
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSeedBatch($seedBatch)
    {
        return $this->seedBatches->removeElement($seedBatch);
    }

    /**
     * Get seedBatches
     *
     * @return Collection
     */
    public function getSeedBatches()
    {
        return $this->seedBatches;
    }

}
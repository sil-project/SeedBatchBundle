<?php

namespace Librinfo\SeedBatchBundle\Entity\OuterExtension;

use Doctrine\Common\Collections\Collection;
use Librinfo\SeedBatchBundle\Entity\Plot;

trait HasPlots
{
    /**
     * @var Collection
     */
    private $plots;

    /**
     * Add plot
     *
     * @param Plot $plot
     *
     * @return this
     */
    public function addPlot($plot)
    {
        $this->plots[] = $plot;

        // We could have used $this->setOwningSideRelation($plot) but Plot#setOrganism method does not exist
        $plot->setProducer($this);
        return $this;
    }

    /**
     * Remove plot
     *
     * @param Plot $plot
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlot($plot)
    {
        return $this->plots->removeElement($plot);
    }

    /**
     * Get plots
     *
     * @return Collection
     */
    public function getPlots()
    {
        return $this->plots;
    }

}
<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits\Inverse;

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

        // TODO: create a trait in OuterExtensionBundle with a generic setter (setter name based on $this reflecionClass...)
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
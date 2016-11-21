<?php

namespace Librinfo\SeedBatchBundle\Entity\OuterExtension;

trait OrganismExtension
{
    use HasSeedBatches;
    use HasPlots;

    /**
     * @var string
     */
    private $seedProducerCode;

    /**
     * Set seedProducerCode
     *
     * @param string $seedProducerCode
     *
     * @return Organism
     */
    public function setSeedProducerCode($seedProducerCode)
    {
        $this->seedProducerCode = $seedProducerCode;

        return $this;
    }

    /**
     * Get seedProducerCode
     *
     * @return string
     */
    public function getSeedProducerCode()
    {
        return $this->seedProducerCode;
    }

    public function producerToString()
    {
        return (string)$this;
    }

}
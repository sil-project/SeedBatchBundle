<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits;

trait OrganismExtension
{
    use Inverse\HasSeedBatches;
    use Inverse\HasPlots;

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

}
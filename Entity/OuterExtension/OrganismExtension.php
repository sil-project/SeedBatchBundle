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
     *
     * @var boolean
     */
    private $seedProducer;

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
    
    public function isSeedProducer()
    {
        return $this->seedProducer;
    }
    
    public function setSeedProducer($seedProducer)
    {
        $this->seedProducer = $seedProducer;
        
        return $this;
    }

}
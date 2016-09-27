<?php

namespace Librinfo\SeedBatchBundle\Entity;

use AppBundle\Entity\Extension\LibrinfoSeedBatchBundle\SeedBatchExtension;
use Librinfo\OuterExtensionBundle\Entity\Traits\OuterExtensible;

use Librinfo\DoctrineBundle\Entity\Traits\BaseEntity;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;
use Librinfo\DoctrineBundle\Entity\Traits\Loggable;
use Librinfo\DoctrineBundle\Entity\Traits\Searchable;
use Librinfo\UserBundle\Entity\Traits\Traceable;

/**
 * SeedBatch
 */
class SeedBatch
{
    use BaseEntity,
        SeedBatchExtension,
        OuterExtensible,
        Traceable,
        Loggable,
        Descriptible,
        Searchable;

    /**
     * @var \Librinfo\VarietiesBundle\Entity\Variety
     */
    private $variety;

    /**
     * @var \Librinfo\CRMBundle\Entity\Organism
     */
    private $producer;

    /**
     * @var \Librinfo\SeedBatchBundle\Entity\Plot
     */
    private $plot;

    /**
     * @var \Librinfo\SeedBatchBundle\Entity\SeedFarm
     */
    private $seedFarm;

    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $productionYear;

    /**
     * @var float
     */
    private $germinationRate;

    /**
     * @var \DateTime
     */
    private $germinationDate;

    /**
     * @var float
     */
    private $tkwRate;

    /**
     * @var \DateTime
     */
    private $tkwDate;


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
     * Set productionYear
     *
     * @param int $productionYear
     *
     * @return SeedBatch
     */
    public function setProductionYear($productionYear)
    {
        $this->productionYear = $productionYear;

        return $this;
    }

    /**
     * Get productionYear
     *
     * @return int
     */
    public function getProductionYear()
    {
        return $this->productionYear;
    }

    /**
     * Set germinationRate
     *
     * @param float $germinationRate
     *
     * @return SeedBatch
     */
    public function setGerminationRate($germinationRate)
    {
        $this->germinationRate = $germinationRate;

        return $this;
    }

    /**
     * Get germinationRate
     *
     * @return float
     */
    public function getGerminationRate()
    {
        return $this->germinationRate;
    }

    /**
     * Set germinationDate
     *
     * @param \DateTime $germinationDate
     *
     * @return SeedBatch
     */
    public function setGerminationDate($germinationDate)
    {
        $this->germinationDate = $germinationDate;

        return $this;
    }

    /**
     * Get germinationDate
     *
     * @return \DateTime
     */
    public function getGerminationDate()
    {
        return $this->germinationDate;
    }

    /**
     * Set tkwRate
     *
     * @param float $tkwRate
     *
     * @return SeedBatch
     */
    public function setTkwRate($tkwRate)
    {
        $this->tkwRate = $tkwRate;

        return $this;
    }

    /**
     * Get tkwRate
     *
     * @return float
     */
    public function getTkwRate()
    {
        return $this->tkwRate;
    }

    /**
     * Set tkwDate
     *
     * @param \DateTime $tkwDate
     *
     * @return SeedBatch
     */
    public function setTkwDate($tkwDate)
    {
        $this->tkwDate = $tkwDate;

        return $this;
    }

    /**
     * Get tkwDate
     *
     * @return \DateTime
     */
    public function getTkwDate()
    {
        return $this->tkwDate;
    }

    /**
     * Set seedFarm
     *
     * @param \Librinfo\SeedBatchBundle\Entity\SeedFarm $seedFarm
     *
     * @return SeedBatch
     */
    public function setSeedFarm(\Librinfo\SeedBatchBundle\Entity\SeedFarm $seedFarm = null)
    {
        $this->seedFarm = $seedFarm;

        return $this;
    }

    /**
     * Get seedFarm
     *
     * @return \Librinfo\SeedBatchBundle\Entity\SeedFarm
     */
    public function getSeedFarm()
    {
        return $this->seedFarm;
    }

    /**
     * Set variety
     *
     * @param \Librinfo\VarietiesBundle\Entity\Variety $variety
     *
     * @return SeedBatch
     */
    public function setVariety(\Librinfo\VarietiesBundle\Entity\Variety $variety = null)
    {
        $this->variety = $variety;

        return $this;
    }

    /**
     * Get variety
     *
     * @return \Librinfo\VarietiesBundle\Entity\Variety
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set producer
     *
     * @param \Librinfo\CRMBundle\Entity\Organism $producer
     *
     * @return SeedBatch
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

    /**
     * Set plot
     *
     * @param \Librinfo\SeedBatchBundle\Entity\Plot $plot
     *
     * @return SeedBatch
     */
    public function setPlot(\Librinfo\SeedBatchBundle\Entity\Plot $plot = null)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return \Librinfo\SeedBatchBundle\Entity\Plot
     */
    public function getPlot()
    {
        return $this->plot;
    }
}


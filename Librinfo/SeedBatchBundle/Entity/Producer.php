<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Librinfo\CRMBundle\Entity\Organism;

/**
 * Producer
 */
class Producer extends Organism
{
    /**
     * @var string
     */
    private $test;


    /**
     * Set test
     *
     * @param string $test
     *
     * @return Producer
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }
}


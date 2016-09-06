<?php

namespace Librinfo\SeedBatchBundle\Entity;

/**
 * SeedBatch
 */
class SeedBatch
{
    /**
     * @var string
     */
    private $code;


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
}


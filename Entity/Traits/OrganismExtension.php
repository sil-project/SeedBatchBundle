<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits;

trait OrganismExtension
{
    use Inverse\HasSeedBatches;
    use Inverse\HasPlots;

    public function producerToString()
    {
        $parts = [];
        if ($this->getSupplierCode()) $parts[] = "[" . $this->getSupplierCode() . "]";
        if ($this->getName()) $parts[] = $this->getName();
        return implode(' ', $parts);
    }
}
<?php

namespace Librinfo\SeedBatchBundle\Entity\Traits;

trait OrganismExtension
{
    use Inverse\HasSeedBatches;
    use Inverse\HasPlots;

    public function producerToString()
    {
        $parts = [];
        if ($this->supplierCode) $parts[] = "[" . $this->supplierCode() . "]";
        if ($this->name) $parts[] = $this->name;
        return implode(' ', $parts);
    }
}
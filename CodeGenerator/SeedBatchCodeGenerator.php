<?php

namespace Librinfo\SeedBatchBundle\CodeGenerator;

use Librinfo\SeedBatchBundle\Entity\SeedBatch;
use Librinfo\CoreBundle\Exception\InvalidEntityCodeException;

class SeedBatchCodeGenerator
{
    /**
     * @param  SeedBatch $seedBatch
     * @return string
     * @throws InvalidEntityCodeException
     */
    public static function generate(SeedBatch $seedBatch)
    {
        // TODO...
        $seedFarmCode = 'LIB';

        $variety = $seedBatch->getVariety();
        if (!$variety)
            throw new InvalidEntityCodeException('librinfo.error.missing_variety');
        if (!$varietyCode = $variety->getCode())
            throw new InvalidEntityCodeException('librinfo.error.missing_variety_code');

        $species = $variety->getSpecies();
        if (!$species)
            throw new InvalidEntityCodeException('librinfo.error.missing_species');
        if (!$speciesCode = $species->getCode())
            throw new InvalidEntityCodeException('librinfo.error.missing_species_code');

        $producer = $seedBatch->getProducer();
        if (!$producer)
            throw new InvalidEntityCodeException('librinfo.error.missing_producer');
        if (!$producerCode = $producer->getSupplierCode())
            throw new InvalidEntityCodeException('librinfo.error.missing_producer_code');

        $productionYear = (int)$seedBatch->getProductionYear();
        if (!$productionYear)
            throw new InvalidEntityCodeException('librinfo.error.missing_production_year');
        if ($productionYear < 2000 || $productionYear > 2099)
            throw new InvalidEntityCodeException('librinfo.error.invalid_production_year');
        // TODO: test if year is too far in the future ?

        $batchNumber = $seedBatch->getBatchNumber();
        if (!$batchNumber)
            throw new InvalidEntityCodeException('librinfo.error.missing_batch_number');
        if ($batchNumber < 1 || $batchNumber > 99)
            throw new InvalidEntityCodeException('librinfo.error.invalid_batch_number');

        return sprintf('%s%s%s%s%02d%02d',
            $seedFarmCode,
            $speciesCode,
            $varietyCode,
            $producerCode,
            $productionYear - 2000,
            $batchNumber
        );
    }

    /**
     * @param SeedBatch $seedBatch
     * @param string    $code
     * @return          boolean
     */
    public static function validate(SeedBatch $seedBatch, $code)
    {
        return true;
    }
}
<?php

namespace Librinfo\SeedBatchBundle\CodeGenerator;

use Doctrine\ORM\EntityManager;
use Librinfo\CoreBundle\CodeGenerator\CodeGeneratorInterface;
use Librinfo\CoreBundle\Exception\InvalidEntityCodeException;
use Librinfo\SeedBatchBundle\Entity\SeedBatch;

class SeedBatchCodeGenerator implements CodeGeneratorInterface
{
    const ENTITY_CLASS = 'Librinfo\SeedBatchBundle\Entity\SeedBatch';
    const ENTITY_FIELD = 'code';

    private static $length = 3;

    /**
     * @var EntityManager
     */
    private static $em;

    public static function setEntityManager(EntityManager $em)
    {
        self::$em = $em;
    }

    /**
     * @param  SeedBatch $seedBatch
     * @return string
     * @throws InvalidEntityCodeException
     */
    public static function generate($seedBatch)
    {
        // TODO...
        $seedFarmCode = 'LIB';

        if (!$seedFarm = $seedBatch->getSeedFarm())
            throw new InvalidEntityCodeException('librinfo.error.missing_seed_farm');
        if (!$seedFarmCode = $seedFarm->getCode())
            throw new InvalidEntityCodeException('librinfo.error.missing_seed_farm_code');

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

        return sprintf('%s-%s%s-%s-%02d-%02d',
            $seedFarmCode,
            $speciesCode,
            $varietyCode,
            $producerCode,
            $productionYear - 2000,
            $batchNumber
        );
    }

    /**
     * @param string    $code
     * @param SeedFarm  $seedBatch
     * @return          boolean
     */
    public static function validate($code, $seedBatch = null)
    {
        return preg_match('/^[A-Z0-9]{'.self::$length.'}$/', $code);
    }

    /**
     * @return string
     */
    public static function getHelp()
    {
        return self::$length . " chars (upper case letters and/or digits)";
    }
}
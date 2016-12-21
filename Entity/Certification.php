<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Blast\BaseEntitiesBundle\Entity\Traits\BaseEntity;
use Blast\BaseEntitiesBundle\Entity\Traits\Descriptible;
use Blast\BaseEntitiesBundle\Entity\Traits\Nameable;
use Blast\BaseEntitiesBundle\Entity\Traits\Timestampable;
use Blast\OuterExtensionBundle\Entity\Traits\OuterExtensible;
use AppBundle\Entity\OuterExtension\LibrinfoSeedBatchBundle\CertificationExtension;

/**
 * Certification
 */
class Certification
{
    use BaseEntity,
        Nameable,
        OuterExtensible,
        CertificationExtension,
        Timestampable,
        Descriptible;
    
    /**
     * @var \DateTime
     */
    private $certificationDate;

    /**
     * @var \DateTime
     */
    private $expiryDate;

    /**
     * @var string
     */
    private $code;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->initCollections();
        $this->initOuterExtendedClasses();
    }

    // implementation of __clone for duplication
    public function __clone()
    {
        $this->id = null;
        $this->code = null;
        $this->initCollections();
    }
    
    public function initCollections()
    {
    }

    /**
     * Set certificationDate
     *
     * @param \DateTime $certificationDate
     * @return Certification
     */
    public function setCertificationDate($certificationDate)
    {
        $this->certificationDate = $certificationDate;

        return $this;
    }

    /**
     * Get certificationDate
     *
     * @return \DateTime 
     */
    public function getCertificationDate()
    {
        return $this->certificationDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     * @return Certification
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Certification
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

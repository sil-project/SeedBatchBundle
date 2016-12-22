<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Blast\BaseEntitiesBundle\Entity\Traits\BaseEntity;
use Blast\BaseEntitiesBundle\Entity\Traits\Timestampable;
use Blast\OuterExtensionBundle\Entity\Traits\OuterExtensible;
use Librinfo\SeedBatchBundle\Entity\CertificationType;
use AppBundle\Entity\OuterExtension\LibrinfoSeedBatchBundle\CertificationExtension;

/**
 * Certification
 */
class Certification
{
    use BaseEntity,
        OuterExtensible,
        CertificationExtension,
        Timestampable
    ;
    
    /**
     * @var string
     */
    private $certificationBody;
    
    /**
     * @var \DateTime
     */
    private $certificationDate;

    /**
     * @var \DateTime
     */
    private $expiryDate;
    
    /**
     * @var \Librinfo\SeedBatchBundle\Entity\CertificationType
     */
    private $certificationType;


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
     * Set certificationBody
     *
     * @param string $certificationBody
     * @return Certification
     */
    public function setCertificationBody($certificationBody)
    {
        $this->certificationBody = $certificationBody;

        return $this;
    }

    /**
     * Get certificationBody
     *
     * @return string 
     */
    public function getCertificationBody()
    {
        return $this->certificationBody;
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
     * Set certificationType
     *
     * @param \Librinfo\SeedBatchBundle\Entity\CertificationType $certificationType
     * @return Certification
     */
    public function setCertificationType(CertificationType $certificationType = null)
    {
        $this->certificationType = $certificationType;

        return $this;
    }

    /**
     * Get certificationType
     *
     * @return \Librinfo\SeedBatchBundle\Entity\CertificationType 
     */
    public function getCertificationType()
    {
        return $this->certificationType;
    }
}

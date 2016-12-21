<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Blast\BaseEntitiesBundle\Entity\Traits\BaseEntity;
use Blast\BaseEntitiesBundle\Entity\Traits\Descriptible;
use Blast\BaseEntitiesBundle\Entity\Traits\Nameable;
use Blast\BaseEntitiesBundle\Entity\Traits\Timestampable;
use Blast\OuterExtensionBundle\Entity\Traits\OuterExtensible;
use Librinfo\MediaBundle\Entity\File;
use AppBundle\Entity\OuterExtension\LibrinfoSeedBatchBundle\CertificationTypeExtension;

/**
 * CertificationType
 */
class CertificationType
{
    use BaseEntity,
        Nameable,
        OuterExtensible,
        CertificationTypeExtension,
        Timestampable,
        Descriptible;
    
    /**
     * @var string
     */
    private $code;
    
    /**
     * @var \Librinfo\MediaBundle\Entity\File
     */
    private $logo;

    
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
     * Set code
     *
     * @param string $code
     * @return CertificationType
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
     * Set logo
     *
     * @param \Librinfo\MediaBundle\Entity\File $logo
     * @return CertificationType
     */
    public function setLogo(File $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Librinfo\MediaBundle\Entity\File 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}

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
     * @var \Librinfo\SeedBatchBundle\Entity\CertifyingBody
     */
    private $certifyingBody;

    /**
     * @var \Librinfo\SeedBatchBundle\Entity\Plot
     */
    private $plot;


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

    /**
     * Set plot
     *
     * @param \Librinfo\SeedBatchBundle\Entity\Plot $plot
     * @return Certification
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

    /**
     * Set certifyingBody
     *
     * @param \Librinfo\SeedBatchBundle\Entity\CertifyingBody $certifyingBody
     * @return Certification
     */
    public function setCertifyingBody(\Librinfo\SeedBatchBundle\Entity\CertifyingBody $certifyingBody = null)
    {
        $this->certifyingBody = $certifyingBody;

        return $this;
    }

    /**
     * Get certifyingBody
     *
     * @return \Librinfo\SeedBatchBundle\Entity\CertifyingBody
     */
    public function getCertifyingBody()
    {
        return $this->certifyingBody;
    }
}

<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Doctrine\ORM\EntityManager;
use Librinfo\SeedBatchBundle\Admin\OrganismAdminConcrete as BaseOrganismAdminConcrete;

class SeedProducerAdmin extends BaseOrganismAdminConcrete
{
    /**
     *
     * @var EntityManager
     */
    private $manager;
    
    protected $baseRouteName = 'admin_librinfo_seedbatch_seedProducer';
    protected $baseRoutePattern = 'librinfo/seedbatch/seed-producer';

    /**
     * {@inheritdoc}
     */
    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);

        $query->andWhere('o.seedProducer = true');
        
        return $query;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getNewInstance()
    {
        $object = parent::getNewInstance();
       
        $object->setSeedProducer(true);
        $object->addCircle($this->manager->getRepository('LibrinfoCRMBundle:Circle')->find('b907691c-963f-4a7c-9098-5a95335cf21d'));
        
        return $object;
    }
    
    /**
     * 
     * @param EntityManager $manager
     */
    public function setManager(EntityManager $manager)
    {
        $this->manager = $manager;
    }

}
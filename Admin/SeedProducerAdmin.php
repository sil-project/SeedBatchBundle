<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\SeedBatchBundle\Admin\OrganismAdminConcrete as BaseOrganismAdminConcrete;

class SeedProducerAdmin extends BaseOrganismAdminConcrete
{
    protected $baseRouteName = 'admin_librinfo_seedbatch_seedProducer';
    protected $baseRoutePattern = 'librinfo/seedbatch/seed-producer';

    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);

        $query->andWhere('o.seedProducer = true');
        
        return $query;
    }
}
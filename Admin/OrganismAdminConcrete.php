<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\CoreBundle\Admin\CoreAdmin;
use Librinfo\EmailCRMBundle\Admin\OrganismAdminConcrete as BaseOrganismAdminConcrete;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrganismAdminConcrete extends BaseOrganismAdminConcrete
{
    protected $baseRouteName = 'admin_librinfo_seedbatch_organism';
    protected $baseRoutePattern = 'librinfo/seedbatch/organism';

    /**
     * @param DatagridMapper $mapper
     */
    protected function configureDatagridFilters(DatagridMapper $mapper)
    {
        CoreAdmin::configureDatagridFilters($mapper);
    }

    /**
     * @param ListMapper $mapper
     */
    protected function configureListFields(ListMapper $mapper)
    {
        CoreAdmin::configureListFields($mapper);
    }

    /**
     * @param FormMapper $mapper
     */
    protected function configureFormFields(FormMapper $mapper)
    {
        CoreAdmin::configureFormFields($mapper);
    }

    /**
     * @param ShowMapper $mapper
     */
    protected function configureShowFields(ShowMapper $mapper)
    {
        CoreAdmin::configureShowFields($mapper);
    }
}
<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Blast\CoreBundle\Admin\CoreAdmin;
use Librinfo\SeedBatchBundle\Entity\Plot;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PlotAdmin extends CoreAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {

    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {

    }

    /**
     *
     * @param Plot $plot
     * @param string $property  (not used)
     * @return string
     */
    public static function autocompleteToString(Plot $plot, $property)
    {
        return sprintf('%s [%s] [%s]', $plot->getName(), $plot->getCode(), $plot->getProducer()->getName());
    }
}

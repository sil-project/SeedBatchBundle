<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\CoreBundle\Admin\CoreAdmin;
use Librinfo\CRMBundle\Entity\Organism;
use Librinfo\EmailCRMBundle\Admin\OrganismAdminConcrete as BaseOrganismAdminConcrete;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;

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

    public function validate(ErrorElement $errorElement, $object)
    {
        parent::validate($errorElement, $object);
        $this->validateSeedProducerCode($errorElement, $object);
    }

    /**
     * Seed producer code validator
     *
     * @param ErrorElement $errorElement
     * @param Organism $object
     */
    public function validateSeedProducerCode(ErrorElement $errorElement, $object) {
        $code = $object->getSeedProducerCode();
        $container = $this->getConfigurationPool()->getContainer();

        if ( empty($code) ) {
            // Check if organism is a seed producer (belongs to the seed_producers app circle)
            $app_circles = $container->get('librinfo_crm.app_circles');
            if ($app_circles->isInCircle($object, 'seed_producers'))
                $errorElement
                    ->with('seedProducerCode')
                        ->addViolation('A seed producer code is required for seed producers')
                    ->end()
                ;
        }

        else {
            $registry = $container->get('librinfo_core.code_generators');
            $codeGenerator = $registry->getCodeGenerator(Organism::class, 'seedProducerCode');
            if ( !$codeGenerator->validate($code) )
                $errorElement
                    ->with('seedProducerCode')
                        ->addViolation('Wrong format for seed producer code. It shoud be: ' . $codeGenerator::getHelp())
                    ->end()
                ;
        }

    }
}
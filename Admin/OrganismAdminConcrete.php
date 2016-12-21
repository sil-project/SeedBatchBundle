<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Blast\CoreBundle\Admin\CoreAdmin;
use Librinfo\CRMBundle\Entity\Organism;
use Librinfo\EmailCRMBundle\Admin\OrganismAdminConcrete as BaseOrganismAdminConcrete;
use Sonata\AdminBundle\Admin\AbstractAdmin;
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
        
        if( $this->subject )
            if( !$this->subject->isSeedProducer() )
            {
                $tabs = $mapper->getadmin()->getFormTabs();
                unset($tabs['form_tab_plots']);
                unset($tabs['form_tab_seedbatches']);
                $mapper->getAdmin()->setFormTabs($tabs);
                $mapper->remove('plots');
                $mapper->remove('seedBatches');
            }
    }

    /**
     * @param ShowMapper $mapper
     */
    protected function configureShowFields(ShowMapper $mapper)
    {
        CoreAdmin::configureShowFields($mapper);
        
        if( $this->subject )
            if( !$this->subject->isSeedProducer() )
            {
                $tabs = $mapper->getadmin()->getShowTabs();
                unset($tabs['show_tab_plots']);
                unset($tabs['show_tab_seedbatches']);
                $mapper->getAdmin()->setShowTabs($tabs);
                $mapper->remove('plots');
                $mapper->remove('seedBatches');
            }
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
    public function validateSeedProducerCode(ErrorElement $errorElement, $object)
    {
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
            $registry = $container->get('blast_core.code_generators');
            $codeGenerator = $registry->getCodeGenerator(Organism::class, 'seedProducerCode');
            if ( !$codeGenerator->validate($code) )
                $errorElement
                    ->with('seedProducerCode')
                        ->addViolation('Wrong format for seed producer code. It shoud be: ' . $codeGenerator::getHelp())
                    ->end()
                ;
        }
    }

    /**
     * This is used as callback in admin autocomplete producer (organism) fields
     * It restricts the query to seed producers
     *
     * @param AbstractAdmin $admin
     * @param string $property
     * @param string $value
     */
    public static function producerAutocompleteCallback(AbstractAdmin $admin, $property, $value)
    {
        $producersCircle = $admin->getConfigurationPool()->getContainer()->get('librinfo_crm.app_circles')->getCircle('seed_producers');

        $datagrid = $admin->getDatagrid();
        $queryBuilder = $datagrid->getQuery();
        $queryBuilder
            ->leftJoin($queryBuilder->getRootAlias() . '.circles',  'cir')
            ->andWhere('cir.id = :producersCircle')
            ->setParameter('producersCircle', $producersCircle['id'])
        ;
        $datagrid->setValue($property, null, $value);
    }
}
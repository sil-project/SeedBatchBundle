<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Blast\CoreBundle\Admin\Traits\Base as BaseAdmin;
use Librinfo\SeedBatchBundle\Entity\Plot;
use Sonata\CoreBundle\Validator\ErrorElement;

class PlotAdminConcrete extends PlotAdmin
{
    use BaseAdmin;


    /**
     * @param ErrorElement $errorElement
     * @param Plot         $object
     *
     * @deprecated this feature cannot be stable, use a custom validator,
     *             the feature will be removed with Symfony 2.2
     */
    public function validate(ErrorElement $errorElement, $object)
    {
        $this->validateCode($errorElement, $object);
    }

    /**
     * Plot code validator
     *
     * @param ErrorElement $errorElement
     * @param Plot $object
     */
    public function validateCode(ErrorElement $errorElement, $object)
    {
        $code = $object->getCode();
        $registry = $this->getConfigurationPool()->getContainer()->get('librinfo_core.code_generators');
        $codeGenerator = $registry->getCodeGenerator(Plot::class);
        if ( !empty($code) && !$codeGenerator->validate($code) ) {
            $msg = 'Wrong format for plot code. It shoud be: ' . $codeGenerator::getHelp();
            $errorElement
                ->with('code')
                    ->addViolation($msg)
                ->end()
            ;
        }
    }
}
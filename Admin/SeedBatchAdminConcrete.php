<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\CoreBundle\Admin\Traits\Base as BaseAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

class SeedBatchAdminConcrete extends SeedBatchAdmin
{
    use BaseAdmin;

    public function getFormTheme()
    {
        return array_merge(
            parent::getFormTheme(),
            array('LibrinfoSeedBatchBundle:SeedBatchAdmin:form_admin_fields.html.twig')
        );
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        // xxxxxxxAction in CRUD controller
        $collection->add('generateSeedBatchCode');
    }
}
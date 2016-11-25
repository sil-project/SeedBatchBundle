<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Blast\CoreBundle\Admin\Traits\EmbeddedAdmin;

class SeedBatchEmbeddedAdmin extends SeedBatchAdmin
{
    use EmbeddedAdmin;

    protected $baseRouteName = 'admin_librinfo_seedbatch_seedbatch_embedded';
    protected $baseRoutePattern = 'librinfo/seedbatch/seedbatch_embedded';

}
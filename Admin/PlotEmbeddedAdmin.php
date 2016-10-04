<?php

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\CoreBundle\Admin\Traits\EmbeddedAdmin;

class PlotEmbeddedAdmin extends PlotAdmin
{
    use EmbeddedAdmin;

    protected $baseRouteName = 'admin_librinfo_seedbatch_plot_embedded';
    protected $baseRoutePattern = 'librinfo/seedbatch/plot_embedded';

}
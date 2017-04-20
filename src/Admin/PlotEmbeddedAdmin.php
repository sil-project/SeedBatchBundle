<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Admin;

//use Blast\CoreBundle\Admin\Traits\EmbeddedAdmin;

class PlotEmbeddedAdmin extends PlotAdmin
{
    //use EmbeddedAdmin;

    protected $baseRouteName = 'admin_librinfo_seedbatch_plot_embedded';
    protected $baseRoutePattern = 'librinfo/seedbatch/plot_embedded';

}
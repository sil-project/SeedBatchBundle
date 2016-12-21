<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Admin;

use Librinfo\SeedBatchBundle\Admin\OrganismAdmin as BaseOrganismAdmin;

class SeedProducerAdmin extends BaseOrganismAdmin
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
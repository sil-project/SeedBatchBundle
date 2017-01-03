<?php

/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Librinfo\SeedBatchBundle\Admin;

use Doctrine\ORM\EntityManager;
use Librinfo\SeedBatchBundle\Admin\OrganismAdmin as BaseOrganismAdmin;

class SeedProducerAdmin extends BaseOrganismAdmin
{
    /**
     *
     * @var EntityManager
     */
    private $manager;

    protected $baseRouteName = 'admin_librinfo_seedbatch_seedProducer';
    protected $baseRoutePattern = 'librinfo/seedbatch/seed-producer';

    /**
     * {@inheritdoc}
     */
    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);

        $query->andWhere('o.seedProducer = true');

        return $query;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewInstance()
    {
        $object = parent::getNewInstance();

        $object->setSeedProducer(true);
        $seed_producers_circle = $this->getConfigurationPool()->getContainer()->get('librinfo_crm.app_circles')->getCircle('seed_producers');
        $object->addCircle($seed_producers_circle);

        return $object;
    }

    /**
     *
     * @param EntityManager $manager
     */
    public function setManager(EntityManager $manager)
    {
        $this->manager = $manager;
    }

}
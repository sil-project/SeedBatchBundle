<?php

namespace Librinfo\SeedBatchBundle\Entity;

use Librinfo\DoctrineBundle\Entity\SearchIndexEntity;

class SeedBatchSearchIndex extends SearchIndexEntity
{
    // TODO: this should go in the contact.orm.yml mapping file :
    //       find a way to override Doctrine ORM YamlDriver and ClassMetadata classes

    public static $fields = []; // TODO...
}
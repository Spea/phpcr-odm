<?php

namespace Doctrine\Tests\Models\References;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * @PHPCRODM\Document()
 */
class RefManyTestObj
{
    /** @PHPCRODM\Id */
    public $id;
    /** @PHPCRODM\ReferenceMany(targetDocument="RefRefTestObj") */
    public $references;
    /** @PHPCRODM\String */
    public $name;

    public function __construct()
    {
       $references = new \Doctrine\Common\Collections\ArrayCollection();
    }
}

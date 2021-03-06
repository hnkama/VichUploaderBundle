<?php

namespace Vich\UploaderBundle\Tests\Mapping\Annotation;

use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

/**
 * UploadableFieldTest.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class UploadableFieldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionThrownWhenNoMappingAttribute()
    {
        new UploadableField(array(
            'fileNameProperty' => 'fileName'
        ));
    }
}

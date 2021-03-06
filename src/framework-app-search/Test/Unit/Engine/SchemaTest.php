<?php
/*
 * This file is part of the App Search Magento module.
 *
 * (c) Elastic
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\AppSearch\Framework\AppSearch\Test\Unit\Engine;

use Elastic\AppSearch\Framework\AppSearch\Engine\Schema;

/**
 * Unit test for the Schema class.
 *
 * @package   Elastic\AppSearch\Framework\AppSearch\Test\Unit\Engine
 * @copyright 2019 Elastic
 * @license   Open Software License ("OSL") v. 3.0
 */
class SchemaTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test expected language mapping.
     *
     * @param array $fields
     *
     * @testWith [{"foo": "text", "bar": "number"}]
     */
    public function testCreateSchema($fields)
    {
        $schema = new Schema($fields);

        $this->assertEquals($fields, $schema->getFields());
    }
}

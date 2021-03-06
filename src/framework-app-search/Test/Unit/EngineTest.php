<?php
/*
 * This file is part of the App Search Magento module.
 *
 * (c) Elastic
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\AppSearch\Framework\AppSearch\Test\Unit;

use Elastic\AppSearch\Framework\AppSearch\Engine;

/**
 * Unit test for the Engine class.
 *
 * @package   Elastic\AppSearch\Framework\AppSearch\Test\Unit
 * @copyright 2019 Elastic
 * @license   Open Software License ("OSL") v. 3.0
 */
class EngineTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test expected language mapping.
     *
     * @param string $identifier
     * @param int    $storeId
     * @param string $name
     * @param string $name
     *
     * @testWith ["engine_identifier", 1, "engine-name", null]
     *           ["engine_identifier", 1, "engine-name", "en"]
     */
    public function testCreateEngine($identifier, $storeId, $name, $language)
    {
        $engine = new Engine($identifier, $storeId, $name, $language);

        $this->assertEquals($identifier, $engine->getIdentifier());
        $this->assertEquals($storeId, $engine->getStoreId());
        $this->assertEquals($name, $engine->getName());
        $this->assertEquals($language, $engine->getLanguage());
    }
}

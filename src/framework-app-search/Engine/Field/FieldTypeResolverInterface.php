<?php
/*
 * This file is part of the App Search Magento module.
 *
 * (c) Elastic
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\AppSearch\Framework\AppSearch\Engine\Field;

/**
 * Used to retrieve field type.
 *
 * @package   Elastic\AppSearch\Framework\AppSearch\Engine\Field
 * @copyright 2019 Elastic
 * @license   Open Software License ("OSL") v. 3.0
 */
interface FieldTypeResolverInterface
{
    /**
     * Return field type.
     *
     * @param FieldInterface $field
     *
     * @return string|NULL
     */
    public function getFieldType(FieldInterface $field): string;
}

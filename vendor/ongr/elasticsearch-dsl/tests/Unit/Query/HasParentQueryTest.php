<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ElasticsearchDSL\Tests\Unit\Query;

use ONGR\ElasticsearchDSL\Query\HasParentQuery;

class HasParentQueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests whether __constructor calls setParameters method.
     */
    public function testConstructor()
    {
        $parentQuery = $this->getMockBuilder('ONGR\ElasticsearchDSL\BuilderInterface')->getMock();
        $query = new HasParentQuery('test_type', $parentQuery, ['test_parameter1']);
        $this->assertEquals(['test_parameter1'], $query->getParameters());
    }
}
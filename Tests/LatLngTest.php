<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\GeoBundle\Tests;

use HarvestCloud\GeoBundle\LatLng;

/**
 * LatLngTest
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2014-04-02
 */
class LatLngTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testConstructor()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2014-04-02
     */
    public function testConstructor()
    {
        $latLng = new LatLng(5,10);

        $this->assertEquals(5, $latLng->getLatitude());
        $this->assertEquals(10, $latLng->getLongitude());
    }

    /**
     * testToString()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2014-04-02
     */
    public function testToString()
    {
        $latLng = new LatLng(5,10);

        $this->assertEquals('5, 10', (string) $latLng);
    }
}

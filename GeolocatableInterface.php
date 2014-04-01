<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\GeoBundle;

/**
 * A class that can be located on a map
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-04-07
 */
interface GeolocatableInterface
{
    /**
     * getLatitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com
     * @since  2012-04-07
     *
     * @return float
     */
    public function getLatitude();

    /**
     * getLongitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com
     * @since  2012-04-07
     *
     * @return float
     */
    public function getLongitude();

    /**
     * getMapLabel - text to be displayed next to a marker on a map
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com
     * @since  2012-04-07
     *
     * @return string
     */
    public function getMapLabel();
}

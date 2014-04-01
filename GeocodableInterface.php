<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\GeoBundle;

/**
 * A class that has its latitude and longitude set, normally after having
 * been through a Geocoder
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-04-07
 */
interface GeocodableInterface
{
    /**
     * setLatitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com
     * @since  2012-04-07
     *
     * @param  float  $latitude
     */
    public function setLatitude($latitude);

    /**
     * setLongitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com
     * @since  2012-04-07
     *
     * @param  float  $longitude
     */
    public function setLongitude($longitude);
}

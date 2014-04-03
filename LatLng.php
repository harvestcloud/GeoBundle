<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\GeoBundle;

/**
 * A simple class to represent some coordinates
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since  2012-05-02
 */
class LatLng implements GeolocatableInterface
{
    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * __construct()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-05-02
     *
     * @param  float  $latitude
     * @param  float  $longitude
     */
    public function __construct($latitude, $longitude)
    {
        if ((float) $latitude > 90) {
            throw new \InvalidArgumentException('Latitude must not be greater than 90');
        }

        if ((float) $latitude < -90) {
            throw new \InvalidArgumentException('Latitude must not be less than -90');
        }

        if ((float) $longitude > 180) {
            throw new \InvalidArgumentException('Longitude must not be greater than 180');
        }

        if ((float) $longitude < -180) {
            throw new \InvalidArgumentException('Longitude must not be less than -180');
        }

        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * __toString()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-11-30
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getLatitude().', '.$this->getLongitude();
    }

    /**
     * Get latitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-05-02
     *
     * @return decimal
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Get longitude
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-05-02
     *
     * @return decimal
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * getMapLabel (needed for Geolocatable interface)
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2012-05-02
     *
     * @return string
     */
    public function getMapLabel()
    {
        return $this->__toString();
    }
}

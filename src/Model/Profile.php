<?php
/**
 * Profile.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Model;

/**
 * Class Profile.
 *
 * @package   SohelZ\FacebookWrapper
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
class Profile
{
    /**
     * Facebook ID
     *
     * @var string
     */
    public $fbid;

    /**
     * Profile name
     *
     * @var string
     */
    public $name;

    /**
     * Gender
     *  0 :unkownn
     *  1 :female
     *  2 :male
     * @var integer
     */
    public $gender;

    /**
     * @var string
     */
    public $imageSrc;
}
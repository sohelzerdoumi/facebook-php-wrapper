<?php
/**
 * LoginPasswordSession.php.
 *
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */

namespace SohelZ\FacebookWrapper\Authentication;

/**
 * Class LoginPasswordSession.
 *
 * Start a Facebook Wrapper with cookie.
 *
 * You must provive xs and c_user cookies.
 *
 * @package   SohelZ\FacebookWrapper\Authentication
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */
class CookieSession implements ISession
{

    protected $cookies = null;

    protected $cUser;

    /**
     * CookieSession constructor.
     *
     * @param $cookieCUser
     * @param $cookieXs
     */
    public function __construct($cookieCUser, $cookieXs)
    {
        $this->cUser = $cookieCUser;

        $this->cookies = [
            'c_user' => $cookieCUser,
            'xs'     => $cookieXs,
            '_ga'      => 'GA1.3.918981689.1460310192',
            'datr'     => '8UkJV3PX413p55P7lbsOwoUl',
            'act'     => '1460580708318%2F5',
            'fr'       => '0Ef2vRhTakxgWWhlC.AWWGRG8i0am2C4_HsbA0BaWCing.BXCVhP.8g.AAA.0.AWWRvoto',
            'sb'       => 'TlgJVwpAPFDnsG1CTUkbIFY5',
            's'        => 'Aa6_xqmR71J1MUpt.BXCj69',
            'p'        => '-2',
            'wd' => '1835x560'
        ];
    }

    /**
     * @return array|null
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * @return mixed
     */
    public function getCUser()
    {
        return $this->cUser;
    }

    /**
     * @param mixed $cUser
     *
     * @return CookieSession
     */
    public function setCUser($cUser)
    {
        $this->cUser = $cUser;

        return $this;
    }

}
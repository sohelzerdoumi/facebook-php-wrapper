<?php
/**
 * LoginPasswordSession.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Authentication;

/**
 * Class LoginPasswordSession.
 *
 * @package   SohelZ\FacebookWrapper\Authentication
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
class LoginPasswordSession implements ISession
{

    protected $cookies = null;

    private $login = null;

    private $password = null;

    public function __construct($login, $password)
    {
        $this->login    = $login;
        $this->password = $password;
    }

    public function getCookies()
    {
        // TODO: Implement getCookies() method.
    }
}
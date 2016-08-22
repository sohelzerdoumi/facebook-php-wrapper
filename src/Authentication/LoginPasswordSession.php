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
 * @package   SohelZ\FacebookWrapper\Authentication
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
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
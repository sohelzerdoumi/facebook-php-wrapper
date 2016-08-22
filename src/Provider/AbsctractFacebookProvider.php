<?php
/**
 * IFacebookProvider.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Provider;

use GuzzleHttp\Client;
use SohelZ\FacebookWrapper\Authentication\ISession;
use SohelZ\FacebookWrapper\Util\RegexUtil;

/**
 * Class AbsctractFacebookProvider.
 *
 * @package   SohelZ\FacebookWrapper\Provider
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
abstract class AbsctractFacebookProvider
{
    /**
     * This a CSRF token
     *
     * @return string
     */
    public function getFbDtsg() {
        if(!self::$fb_dtsg) {
            $response = $this->requestGet('https://www.facebook.com');
            self::$fb_dtsg = RegexUtil::extractSingle("/.*fb_dtsg.*? value=\"(.*?)\" .*/", $response);
        }

        return self::$fb_dtsg;
    }

    /**
     * @param $uri
     *
     * @return string
     */
    public function requestGet($uri) {
        $client = new Client();
        return $client->get($uri, [
            'cookies' => $this->facebookSession->getCookies()
        ])->getBody()->getContents();
    }

    /**
     * @param $uri
     * @param $data
     *
     * @return string
     */
    public function requestPost($uri, $data)
    {
        $body = $data;
        $body['fb_dtsg'] = $this->getFbDtsg();
        $body['__a'] = 1;

        $client = new Client();
        $response =  $client->post($uri, [
            'cookies' => $this->facebookSession->getCookies(),
            'body' => $body
        ]);
        return $response->getBody()->getContents();
    }

    /**
     * @param $uri
     * @param $data
     *
     * @return array
     */
    public function requestPostAjax($uri, $data)
    {
        $response      = $this->requestPost($uri, $data);
        $cleanResponse = str_replace("for (;;);", "", $response);

        return json_decode($cleanResponse, true);
    }

    /**
     * AbsctractFacebookProvider constructor.
     *
     * @param ISession $session
     */
    public function __construct(ISession $session)
    {
        $this->facebookSession = $session;
    }

    /**
     * Facebook CSRF token
     * @var null
     */
    protected static $fb_dtsg = null;

    /**
     * @var ISession
     */
    protected $facebookSession;
}
<?php

namespace SohelZ\FacebookWrapper\Provider;

use SohelZ\FacebookWrapper\Authentication\ISession;

/**
 * FacebookProvider.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
class FacebookProvider
{
    /**
     * @var MessageProvider
     */
    protected $messageProvider;

    /**
     * @var ISession
     */
    protected $session;

    public function __construct()
    {
    }

    /**
     * @param ISession $session
     *
     * @return FacebookProvider
     */
    public function setSession(ISession $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * @return MessageProvider
     */
    public function getMessageProvider()
    {
        if(!$this->messageProvider) {
            $this->messageProvider = new MessageProvider($this->session);
        }
        return $this->messageProvider;
    }
}
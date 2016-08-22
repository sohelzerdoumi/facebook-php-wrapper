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
class Message
{
    /**
     * Facebook message ID
     *
     * @var string
     */
    public $facebookMessageId;

    /**
     * Profile
     *
     * @var Profile
     */
    public $author;

    /**
     * Post date
     *
     * @var integer
     */
    public $timestamp;

    /**
     * @var boolean
     */
    public $isUnread;

    /**
     * @var string
     */
    public $body;

    /**
     * @return string
     */
    public function getFacebookMessageId()
    {
        return $this->facebookMessageId;
    }

    /**
     * @param string $facebookMessageId
     *
     * @return Message
     */
    public function setFacebookMessageId($facebookMessageId)
    {
        $this->facebookMessageId = $facebookMessageId;

        return $this;
    }

    /**
     * @return Profile
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Profile $author
     *
     * @return Message
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     *
     * @return Message
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isUnread()
    {
        return $this->isUnread;
    }

    /**
     * @param boolean $isUnread
     *
     * @return Message
     */
    public function setIsUnread($isUnread)
    {
        $this->isUnread = $isUnread;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return Message
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
}
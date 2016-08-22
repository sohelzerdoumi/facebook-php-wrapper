<?php
/**
 * Thread.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Model;

/**
 * Class Thread.
 *
 * A Thread is a facebook conversation.
 *
 *
 * @package   SohelZ\FacebookWrapper\Model
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
class Thread
{
    /**
     * @var Profile
     */
    public $participants = [];

    /**
     * @var Message
     */
    public $messages = [];

    /**
     * @var string
     */
    public $threadId;
    /**
     * @var string
     */
    public $threadFbId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $snippet;
    /**
     * @var integer
     */
    public $messageCount;
    /**
     * @var integer
     */
    public $lastMessageTimestamp;

    /**
     * @return Profile[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param Profile $participants
     *
     * @return Thread
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @param Profile $participant
     *
     * @return Thread
     */
    public function addParticipant(Profile $participant)
    {
        $this->participants []= $participant;

        return $this;
    }

    /**
     * @return Message
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param Message $messages
     *
     * @return Thread
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return string
     */
    public function getThreadId()
    {
        return $this->threadId;
    }

    /**
     * @param string $threadId
     *
     * @return Thread
     */
    public function setThreadId($threadId)
    {
        $this->threadId = $threadId;

        return $this;
    }

    /**
     * @return string
     */
    public function getThreadFbId()
    {
        return $this->threadFbId;
    }

    /**
     * @param string $threadFbId
     *
     * @return Thread
     */
    public function setThreadFbId($threadFbId)
    {
        $this->threadFbId = $threadFbId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Thread
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     *
     * @return Thread
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return int
     */
    public function getMessageCount()
    {
        return $this->messageCount;
    }

    /**
     * @param int $messageCount
     *
     * @return Thread
     */
    public function setMessageCount($messageCount)
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastMessageTimestamp()
    {
        return $this->lastMessageTimestamp;
    }

    /**
     * @param int $lastMessageTimestamp
     *
     * @return Thread
     */
    public function setLastMessageTimestamp($lastMessageTimestamp)
    {
        $this->lastMessageTimestamp = $lastMessageTimestamp;

        return $this;
    }

}
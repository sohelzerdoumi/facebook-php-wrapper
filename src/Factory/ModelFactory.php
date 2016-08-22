<?php
/**
 * ModelFactory.php.
 *
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */

namespace SohelZ\FacebookWrapper\Factory;

use SohelZ\FacebookWrapper\Model\Message;
use SohelZ\FacebookWrapper\Model\Profile;
use SohelZ\FacebookWrapper\Model\Thread;

/**
 * Class ModelFactory.
 *
 * @package   SohelZ\FacebookWrapper\Factory
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */
class ModelFactory
{
    /**
     * @param array $row Row received from facebook API.
     *
     * @return Profile
     */
    public static function profileFromRow($row)
    {
        $profile           = new Profile();
        $profile->fbid     = $row['fbid'];
        $profile->name     = $row['name'];
        $profile->gender   = $row['gender'];
        $profile->imageSrc = $row['image_src'];

        return $profile;
    }

    /**
     * @param array $row Row received from facebook API.
     *
     * @return Thread
     */
    public static function threadFromRow($row)
    {
        $thread                       = new Thread();
        $thread->threadId             = $row['thread_id'];
        $thread->threadFbId           = $row['thread_fbid'];
        $thread->name                 = $row['name'] ? $row['name'] : null;
        $thread->snippet              = $row['snippet'];
        $thread->messageCount         = $row['message_count'];
        $thread->lastMessageTimestamp = $row['last_message_timestamp'];

        return $thread;
    }

    /**
     * @param array $row Row received from facebook API.
     *
     * @return Message
     * @return Message
     */
    public static function messageFromRow($row)
    {
        $message                    = new Message();
        $message->facebookMessageId = $row['message_id'];
        $message->author            = $row['author'];
        $message->timestamp         = $row['timestamp'];
        $message->isUnread          = $row['is_unread'];
        $message->body              = $row['body'];

        return $message;
    }
}
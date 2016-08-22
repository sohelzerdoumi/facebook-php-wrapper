<?php
/**
 * MessageProvider.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Provider;

use SohelZ\FacebookWrapper\Factory\ModelFactory;
use SohelZ\FacebookWrapper\Model\Message;
use SohelZ\FacebookWrapper\Model\Thread;

/**
 * Class MessageProvider.
 *
 * @package   SohelZ\Provider
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */
class MessageProvider extends AbsctractFacebookProvider
{

    /**
     * List threads
     *
     * @param int $offset
     * @param int $limit
     *
     * @return Thread[]
     */
    public function getThreads($offset = 0, $limit = 20)
    {
        $response = $this->requestPostAjax("https://www.facebook.com/ajax/mercury/threadlist_info.php?dpr=1.5", [
            'client'        => 'web_messenger',
            'inbox[offset]' => $offset,
            'inbox[limit]'  => $limit,
            'inbox[filter]' => ''
        ]);

        $profiles = [];
        foreach($response['payload']['participants'] as $rowParticipant) {
            $profile = ModelFactory::profileFromRow($rowParticipant);
            $profiles ['fbid:' . $profile->fbid ]= $profile;
        }

        $threads = [];
        foreach($response['payload']['threads'] as $rowThread) {
            $thread = ModelFactory::threadFromRow($rowThread);
            foreach($rowThread['participants'] as $participantFbid) {
                if(array_key_exists($participantFbid, $profiles)) {
                    $thread->addParticipant($profiles[$participantFbid]);
                }
            }

            $threads []= $thread;
        }

        return $threads;
    }

    /**
     * List messages from thread/conversation
     *
     * @return Message[]
     */
    public function getMessages(Thread $thread, $offset = 0, $limit = 20)
    {
        $response = $this->requestPostAjax("https://www.facebook.com/ajax/mercury/thread_info.php?dpr=1.5", [
            'client'                                       => 'web_messenger',
            "messages[thread_fbids][$thread->threadFbId][offset]"    => $offset,
            "messages[thread_fbids][$thread->threadFbId][timestamp]" => '',
            "messages[thread_fbids][$thread->threadFbId][limit]"     => $limit,
        ]);

        $messages = [];
        foreach($response['payload']['actions'] as $rowMessage) {
            $message = ModelFactory::messageFromRow($rowMessage);
            $messages []= $message;
        }

        return $messages;
    }

}
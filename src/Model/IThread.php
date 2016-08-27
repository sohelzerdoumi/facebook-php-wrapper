<?php
/**
 * IThread.php.
 *
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */

namespace SohelZ\FacebookWrapper\Model;

/**
 * Interface IThread.
 *
 * @package   SohelZ\FacebookWrapper\Model
 * @author    Sohel Zerdoumi <sohel.zerdoumi@gmail.com>
 */
interface IThread
{
    /**
     * @return string
     */
    function getFacebookId();

    /**
     * @return string
     */
    function getThreadId();

    /**
     * @return string
     */
    function getName();

    /**
     * @return string
     */
    function getSnippet();

    /**
     * @return integer
     */
    function getMessageCount();

    /**
     * @return \DateTime
     */
    function getLastMessageTimestamp();
}
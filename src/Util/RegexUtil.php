<?php
/**
 * RegexUtil.php.
 *
 * @author    Sohel Zerdoumi <http://goo.gl/ymyryF>
 */

namespace SohelZ\FacebookWrapper\Util;

class RegexUtil
{
    /**
     * @param $pattern
     * @param $source
     *
     * @return string
     */
    public static function extractSingle($pattern, $source) {
        preg_match($pattern, $source, $matchs);
        return $matchs[1];
    }
}
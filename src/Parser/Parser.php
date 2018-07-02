<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 20:08
 */

namespace ShortcodeSystem\Parser;


interface Parser
{
    public function setRegexConfig(RegexConfig $regexConfig);

    /**
     * Parse text
     *
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string;

}
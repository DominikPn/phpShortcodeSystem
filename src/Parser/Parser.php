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
     * Call $closure when find shortcode
     *
     * $closure function should return string;
     *
     * @param string $text
     * @param \Closure $closure
     * @return string
     */
    public function advencedParser(string $text,\Closure $closure): string;

    /**
     * Parse text
     *
     * @param string $text
     * @return string
     */
    public function parse(string $text) : string;

}
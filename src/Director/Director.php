<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-07-02
 * Time: 20:27
 */

namespace ShortcodeSystem\Director;


use ShortcodeSystem\Shortcode\Shortcode;

interface Director
{
    /**
     * Execute shortcode
     *
     * @param Shortcode $shortcode
     * @return string
     */
    public function run(Shortcode $shortcode): string;

}
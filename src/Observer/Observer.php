<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-06-29
 * Time: 20:21
 */

namespace ShortcodeSystem\Observer;


use ShortcodeSystem\Shortcode\Shortcode;

interface Observer
{
    /**
     * Return assigned shortcode ID
     *
     * @return string
     */
    public function ID():string;

    /**
     * This method is called when parser find shortcode
     *
     * Example
     *
     * @param Shortcode $shortcode
     * @return string
     */
    public function update(Shortcode $shortcode): string;
}
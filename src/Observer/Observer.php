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
     * This method is called when parser find shortcode
     *
     * Returned text will be inserted instead shortcode TEXT
     * Example:
     * [span name="exampleName"] test [/span]  ---->>>> <span> test exampleName</span>
     *
     * @param Shortcode $shortcode
     * @return string
     */
    public function handle(Shortcode $shortcode): string;
}
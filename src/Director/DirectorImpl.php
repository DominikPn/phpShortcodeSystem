<?php
/**
 * Created by PhpStorm.
 * User: DesktopHome
 * Date: 2018-07-02
 * Time: 20:36
 */

namespace ShortcodeSystem\Director;


use ShortcodeSystem\Registry\Registry;
use ShortcodeSystem\Shortcode\Shortcode;

class DirectorImpl implements Director
{
    protected $registry;

    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @param Shortcode $shortcode
     * @return string
     */
    public function run(Shortcode $shortcode): string
    {
       $observer = $this->registry->findObserverByShortcodeID($shortcode->ID());
       return $observer->handle($shortcode);
    }

}
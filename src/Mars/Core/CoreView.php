<?php

/**
 * This file contains the core view class.
 *
 * PHP Version 5.4
 *
 * @category   Library
 * @package    Core
 * @subpackage View
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @copyright  2013-2014, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Mars\Core;

use Lunr\Corona\HTMLView;

/**
 * View class for displaying 'Hello World'.
 *
 * @category   Library
 * @package    Core
 * @subpackage View
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 */
class CoreView extends HTMLView
{

    /**
     * Constructor.
     *
     * @param \Lunr\Core\ConfigServiceLocator $locator Shared instance of a Service Locator class.
     */
    public function __construct($locator)
    {
        parent::__construct($locator->request(), $locator->response(), $locator->config());
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * Build display for Fatal Error output.
     *
     * @return void
     */
    public function print_fatal_error()
    {
        $error = error_get_last();

        if (($error === NULL) || ($error['type'] !== E_ERROR))
        {
            return;
        }

        $this->print_header();
        $this->print_top();

        include __DIR__ . '/Html/fatal_error.php';

        $this->print_bottom();
    }

    public function print_page()
    {
        include __DIR__ . '/Html/index.php';
    }

}

?>

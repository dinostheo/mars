<?php

/**
 * This file contains a planets controller class.
 *
 * PHP Version 5.4
 *
 * @category   Controller
 * @package    Mars
 * @subpackage Planets
 * @author     Dinos Theodorou <dinos@m2mobi.com>
 * @copyright  2014, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Mars\Planets;

use Lunr\Corona\Controller;
use Lunr\Corona\HttpCode;

/**
 * Planets controller class
 *
 * @category   Controller
 * @package    Mars
 * @subpackage Planets
 * @author     Dinos Theodorou <dinos@m2mobi.com>
 */
class PlanetsController extends Controller
{

    /**
     * Constructor.
     *
     * @param \Lunr\Core\ConfigServiceLocator $locator Shared instance of the Service Locator
     */
    public function __construct($locator)
    {
        parent::__construct($locator->request(), $locator->response());
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * Default method.
     *
     * @return void
     */
    public function index()
    {
        $this->set_result(HttpCode::OK);

        $planets = [
            'Mercury',
            'Venus',
            'Earth',
            'Mars',
            'Ceres',
            'Jupiter',
            'Saturn',
            'Uranus',
            'Neptune'
        ];

        $this->response->add_response_data('planets', $planets);

        $this->response->view = 'jsonview';
    }

}

?>

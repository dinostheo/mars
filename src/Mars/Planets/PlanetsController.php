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

    public function systems()
    {
        $systems = [
            ['name' => 'Solar', 'img' => 'http://upload.wikimedia.org/wikipedia/commons/a/a9/Planets2013.jpg'],
            ['name' => 'Gliese 581', 'img' => 'http://upload.wikimedia.org/wikipedia/commons/c/cd/SunGliese581.png']
        ];

        $this->response->add_response_data('systems', $systems);

        $this->response->view = 'jsonview';

        $this->set_result(HttpCode::OK);
    }

    public function planets($system)
    {
        $this->response->view = 'jsonview';

        $system = strtolower($system);

        $planets = [];

        switch($system)
        {
            case 'solar':
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
                break;
            case 'gliese 581':
                $planets = [
                    'Gliese 581 b',
                    'Gliese 581 c',
                    'Gliese 581 d',
                    'Gliese 581 e',
                    'Gliese 581 f',
                    'Gliese 581 g'
                ];
                break;
            default:
        }

        $this->response->add_response_data('planets', $planets);

        $this->set_result(HttpCode::OK);
    }

}

?>

<?php
/**
 * Created by PhpStorm.
 * User: Kobit-Aymn
 * Date: 5/12/2015
 * Time: 12:59 PM
 */

namespace WebService\Routing\Filter;

use Cake\Event\Event;
use Cake\Network\Request;
use Cake\Routing\DispatcherFilter;

// Add a callback detector. For the service of ours.
Request::addDetector('service',
    function ($request) {
        if (!empty($_GET['service']) && $_GET['service'] == true) {
            return true;
        }

        if ($request->is('ajax') || $request->is('json')) {
            return true;
        }

        if (!empty($request->params['_ext'])) {
            if (in_array($request->params['_ext'], ['json', 'api', 'service', 'rest'])) {
                return true;
            }
        }
        return false;
    }
);

class ServiceFilter extends DispatcherFilter
{

    public function beforeDispatch(Event $event)
    {
        $request  = $event->data['request'];
        $response = $event->data['response'];

        if ($request->is('service')) {
            if ($request->is('options')) {
                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization');
                header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
                echo(json_encode([
                    'success' => true,
                    'message' => 'OPTIONS_OK',
                    'code'    => 'OPTIONS'
                ]));
                exit;
            }
            $response->header([
                'Access-Control-Allow-Origin'  => '*',
                'Access-Control-Allow-Headers' => 'Origin, Content-Type, Accept, Authorization',
                'Access-Control-Allow-Methods' => 'POST, GET, PUT, DELETE',
                'X-Company' => 'Kobit Bilisim'
            ]);
        }
    }

    //public function afterDispatch(Event $event) {}
}

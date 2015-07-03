<?php
namespace WebService\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Cake\Network\Response;


/**
 * Service component
 */
class ServiceComponent extends Component
{
    const ENABLE_KEY  = 'enable';
    const MESSAGE_KEY = 'message';
    const SUCCESS_KEY = 'success';
    const CODE_KEY    = 'code';

    public $Controller;

    public $service = false; //force the service mode

    public $manualMessage = false;

    public $data = [
        self::SUCCESS_KEY => false,
        self::ENABLE_KEY  => false,
        self::CODE_KEY    => 0
    ];

    /**
     * Default configuration.
     *
     * @var array
     */

    protected $_defaultConfig = [];

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->Controller = $this->_registry->getController();

        if ($this->request->is('service')) {

            $this->service = true;

            $this->Controller->viewClass = 'json';
            $this->data                  = [
                self::SUCCESS_KEY => false,
                self::CODE_KEY    => 0,
                self::MESSAGE_KEY => 'Default message'
            ];
        }
    }

    public function setMessage($message = '')
    {
        $this->manualMessage = true;
        $this->enableServiceData(null, $message);
    }

    public function setSuccess($success = false)
    {
        $this->enableServiceData($success, null);
    }

    public function enableServiceData($success = null, $message = null)
    {
        $this->data[ self::ENABLE_KEY ] = true;
        if (!is_null($message)) {
            $this->setMessage($message);
        }
        if (!is_null($success)) {
            $this->data[ self::SUCCESS_KEY ] = $success;
        }
    }

    public function beforeRender(Event $event)
    {

        if ($this->service) {
            //set the flash message
            $flash = $this->Controller->request->session()->read('Flash');
            if (!$this->manualMessage && is_array($flash) && !empty($flash['flash']['message'])) {
                $this->data[ self::MESSAGE_KEY ] = $flash['flash']['message'];
            }

            $_serialize = (array)@$this->Controller->viewVars['_serialize'];

            //Debugging information
            $this->dumbDebugInfos($_serialize);

            $this->Controller->request->session()->delete('Flash');

            if (@$this->data[ self::ENABLE_KEY ]) {
                $this->Controller->viewClass = 'json'; //Forcing json view even if it is not service
                $this->Controller->set($this->data);
                $_serialize = array_merge(array_keys($this->data), $_serialize);

                //removing the ENABLE_KEY value from the result
                if (($key = array_search(self::ENABLE_KEY, $_serialize)) !== false) {
                    unset($_serialize[ $key ]);
                }
            }

            $this->Controller->set('_serialize', $_serialize);
            //$this->Controller->set('_jsonp', true);
        }
        if ($this->request->param('action') != 'startSession') {
            //header('Content-Type:application/json; charset=UTF-8');
            //die('{"success":"true"}');
        }

    }

    private function dumbDebugInfos(&$_serialize)
    {
        $this->Controller->set('Debug', [
            //'session_id' => session_id(),
            //'headers' => getallheaders(),
            'Session' => $this->Controller->request->session()->read(),
            //'flash'   => $this->Controller->request->session()->read('Flash'),
            //'server_info'   => $_SERVER,
            'request' => $this->request
        ]);
        $_serialize[] = 'Debug';
    }

    public function beforeRedirect(Event $event, $url, Response $response)
    {
        //
        $logged_in    = is_int($this->Controller->Auth->user('id'));
        $login_action = false;
        if (is_string($url)) {
            if (stripos($url, 'login') !== false) {
                $login_action = true;
            }
        } elseif (is_array($url)) {
            if ($url['action'] == 'login') {
                $login_action = true;
            }
        }

        if ($this->request->is('service') && !$logged_in && $login_action) {
            $this->data = [
                self::SUCCESS_KEY => false,
                self::ENABLE_KEY  => true,
                self::CODE_KEY    => 401,
                self::MESSAGE_KEY => __('You are not logged in!')
            ];

            $this->Controller->render();
            $response->statusCode(201);
            $response->send();
            $response->stop();
            if (session_id()) session_write_close();
        }
    }
}

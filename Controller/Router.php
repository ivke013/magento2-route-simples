<?php
/**
 * File: Router.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 17:11
 */

namespace Learing\RouteSamples\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;
/**
 * Class Router
 *
 * @package Learing\RouteSamples\Controller
 */
class Router implements RouterInterface
{
    /**
     * @var
     */
    protected $actionFactory;

    /**
     * @var
     */
    protected $response;

    /**
     * Constructor
     *
     * @param ActionFactory $actionFactory
     * @param ResponseInterface $response
     */
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }

    /**
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {
        $identifier = trim($request->getPathInfo(), '/');

        // If we type /customroute we will go to
        // http://localhost/customroute
        // $request->setModuleName('route') must contain @ID value from the /etc/routes.xml node

        if (strpos($identifier, 'customroute') !== false) {
            $request->setModuleName('route');
            $request->setControllerName('result');
            $request->setActionName('custom');


            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }

        if (strpos($identifier, 'params') !== false) {
            $request->setModuleName('route');
            $request->setControllerName('result');
            $request->setActionName('params');
            $request->setPostValue(['slug']);

            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }

            return null;
        }
}
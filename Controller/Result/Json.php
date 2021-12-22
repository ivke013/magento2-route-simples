<?php
/**
 * Created by PhpStorm.
 * User: Ivan Stojmenovic
 * Date: 22.12.21.
 * Time: 10:54
 */

namespace Learing\RouteSamples\Controller\Result;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Class View
 * @package Learing\RouteSamples\Controller\Page
 */
class Json implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $jsonResult;

    /**
     * View class constructor
     *
     * @param JsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonResult = $jsonFactory;
    }
    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->jsonResult->create();

        $data = [
            'message' => 'Hello JSON.'
        ];

        $result->setData($data);

        return $result;
    }
}
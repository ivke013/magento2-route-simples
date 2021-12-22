<?php
/**
 * File: Forward.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 15:59
 */

namespace Learing\RouteSamples\Controller\Result;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;

/**
 * Class Forward
 *
 * @package Learing\RouteSamples\Controller\Result
 */
class Forward implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    protected $resultFactory;

    /**
     * Forward constructor
     *
     * @param ForwardFactory $factory
     */
    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->resultFactory = $forwardFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->resultFactory->create();
        $result->setController('result');
        $result->forward('raw');

        return $result;
    }
}
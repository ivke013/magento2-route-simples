<?php
/**
 * File: Redirect.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 13:31
 */

namespace Learing\RouteSamples\Controller\Result;


use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Redirect
 *
 * @package Learing\RouteSamples\Controller\Result
 */
class Redirect implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\ResultFactory
     */
    protected $resultFactory;

    /**
     * Raw constructor
     *
     * @param RawFactory $rawFactory
     */
    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }


    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        $result->setUrl('http://www.google.com');

        return $result;
    }
}
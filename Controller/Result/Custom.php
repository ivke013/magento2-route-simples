<?php
/**
 * File: Custom.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 16:53
 */

namespace Learing\RouteSamples\Controller\Result;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;

/**
 * Class Custom
 *
 * @package Learing\RouteSamples\Controller\Result
 */
class Custom implements HttpGetActionInterface
{

    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $raw;

    /**
     * Raw constructor
     *
     * @param RawFactory $rawFactory
     */
    public function __construct(RawFactory $raw)
    {
        $this->raw = $raw;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->raw->create();
        $result->setContents('<strong>Hello this is CUSTOM ROUTE.</strong>');

        return $result;
    }
}
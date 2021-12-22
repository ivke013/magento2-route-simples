<?php
/**
 * File: Raw.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 12:49
 */

namespace Learing\RouteSamples\Controller\Result;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;
/**
 * Class Raw
 *
 * @package Learing\RouteSamples\Controller\Raw
 */
class Raw implements HttpGetActionInterface
{

    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $rawResult;

    /**
     * Raw constructor
     *
     * @param RawFactory $rawFactory
     */
    public function __construct(RawFactory $raw)
    {
        $this->rawResult = $raw;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->rawResult->create();
        $result->setContents('<strong>Hello this is RAW result object.</strong>');

        return $result;
    }

}
<?php
/**
 * File: Params.php
 * User: Ivan Stojmenovic
 * Email: office.stojmenovic@gmail.com
 * Date: 22.12.21.
 * Time: 17:34
 */

namespace Learing\RouteSamples\Controller\Result;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;
/**
 * Class Params
 *
 * @package Learing\RouteSamples\Controller\Result
 */
class Params implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $rawResult;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * Params constructor
     *
     * @param RawFactory $rawFactory
     */
    public function __construct(RawFactory $rawFactory, \Magento\Framework\App\Request\Http $request)
    {
        $this->rawResult = $rawFactory;
        $this->request = $request;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        // This is not done.

        // TO DO
        // Finish this method


        $param = $this->request->getPostValue('slug');

        $result = $this->rawResult->create();
        $result->setContents('<strong>Router with params called with parameter value ='.$param.'</strong>');
        return $result;
    }
}
<?php

declare(strict_types= 1);

namespace Training\Example\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface
{
    private $resultJsonFactory;
    
    public function __construct(JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        return $this->resultJsonFactory->create()->setHeader("Content-Type","application/json")
        ->setData([
            "success"=> true,
            'name'=>'Shubham Barwad',
            'job'=> 'Web Developer',
        ]);
    }
}
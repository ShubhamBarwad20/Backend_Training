<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\Raw;

class Index implements ActionInterface
{
    protected $resultFactory;

    public function __construct(Context $context ,Raw $resultFactory)
    {
        // parent::__construct($context);
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        return $this->resultFactory->setContents('Example');
    }
}
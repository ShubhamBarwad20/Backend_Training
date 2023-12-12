<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

class Forward implements ActionInterface{

    private $forwardFactory;

    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        return $this->forwardFactory->create()->forward('page');
    }
}
<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{
    private $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory){
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        $page->getConfig()->getTitle()->set("Example Title");
        return $page;
    
    }
}

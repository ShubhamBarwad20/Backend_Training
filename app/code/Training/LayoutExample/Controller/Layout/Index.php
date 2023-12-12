<?php

declare(strict_types= 1);

namespace Training\LayoutExample\Controller\Layout;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    private $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $result = $this->resultPageFactory->create();
        // $result->getConfig()->getTitle()->set("Shubham Barwad");
        // $result->getLayout()->getBlock('page.main.title')->setPageTitle('Full-Stack Developer');
        return $result;
    }
}
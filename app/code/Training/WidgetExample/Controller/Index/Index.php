<?php

declare(strict_types= 1);

namespace Training\WidgetExample\Index\Index;
use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
    protected $resultPageFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $this->resultPageFactory->create();
    }
}

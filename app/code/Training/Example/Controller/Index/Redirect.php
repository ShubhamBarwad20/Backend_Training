<?php

declare(strict_types= 1);

namespace Training\Example\Controller\Index;

use Magento\Backend\Model\View\Result\RedirectFactory;
use Magento\Framework\App\ActionInterface;

class Redirect implements ActionInterface
{
    private $redirectFactory;

    public function __construct(RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }


    public function execute()
    {
        return $this->redirectFactory->create()->setUrl("/example/index/page");
    }
}
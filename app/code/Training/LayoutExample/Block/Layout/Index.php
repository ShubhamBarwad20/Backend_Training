<?php

declare(strict_types= 1);

namespace Training\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock("page.main.title");
        if( $pageMainTitle ) {
            $pageMainTitle->setPageTitle('Full-stack Developer');
        }
        return $this;
    }

    public function getSubitile(): string
    {
        return 'Learn Magneto2 Development';
    }

    public function getNodeHtml() :string
    {
        return $this->getLayout()->createBlock(Note::class)->toHtml();
    }
}
<?php

namespace KAZEcom\All\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Easy email capture for Newsletter and Checkout.
     *
     * @return mixed
     */
    public function execute()
    {
        $this->_view->loadLayout();

        $this->_view->getPage()->getConfig()->getTitle()->set(__('Kevin Document'));

        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPageFactory  = $this->resultPageFactory->create();
        $breadcrumbs = $resultPageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home', [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('kec_document', [
                'label' => __('Document'),
                'title' => __('Document')
            ]
        );

        return $resultPageFactory;
    }
}

<?php
namespace KAZEcom\All\Controller\Index;

/**
 * Kevin E-commerce
 *
 * @api
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
    */
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

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

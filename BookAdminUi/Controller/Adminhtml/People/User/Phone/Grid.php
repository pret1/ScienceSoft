<?php

declare(strict_types=1);

namespace ScienceSoft\BookAdminUi\Controller\Adminhtml\People\User\Phone;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Grid extends Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context     $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return Page
     */
    public function execute(): Page
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('ScienceSoft_BookAdminUi::menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Book Menu'));
        return $resultPage;
    }

    //    /**
    //     * @return bool
    //     */
    //    protected function _isAllowed(): bool
    //    {
    //        return $this->_authorization->isAllowed('ScienceSoft_BookAdminUi::menu');
    //    }
}

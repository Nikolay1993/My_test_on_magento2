<?php

namespace My\Working\Controller\Adminhtml\Phone;

use Magento\Backend\App\Action;

class Delete extends Action
{
    protected $_model;

    public function __construct(
        Action\Context $context,
        \My\Working\Model\Phone $model
    ) {
        parent::__construct($context);
        $this->_model = $model;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_model;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('User deleted'));
                return $resultRedirect->setPath('working/phone/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('working/phone/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('User does not exist'));
        return $resultRedirect->setPath('working/phone/');
    }
}
<?php

namespace My\Working\Controller\Phone;

use Magento\Framework\App\Action\Context;

class User extends \Magento\Framework\App\Action\Action
{

    protected $_model;

    public function __construct(Context $context, \My\Working\Model\Phone $model)
    {
        parent::__construct($context);
        $this->_model = $model;
    }

    public function execute()
    {
        $name = $this->getRequest()->getPost('name');
        $phone = $this->getRequest()->getPost('phone');

        if(isset($name) && ($name!='')  && isset($phone) && ($phone!='') ) {
            $model = $this->_model;
            $model->setName($name);
            $model->setPhone($phone);
            $model->setSatus(0);
            if($model->save() == true){
                $this->messageManager->addSuccess(__('User saved'));
            }
            if($model->save() != true){
                $this->messageManager->addSuccess(__('User saved error'));
            }
        }


        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
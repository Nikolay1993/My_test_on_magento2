<?php

namespace My\Working\Controller\Adminhtml\Phone;

use Magento\Backend\App\Action;

class NewAction extends Action
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
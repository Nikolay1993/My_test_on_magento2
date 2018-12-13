<?php
namespace My\Working\Block\Adminhtml\Phone;

use Magento\Backend\Block\Widget\Form\Container;

class Edit extends Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }



    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_phone';
        $this->_blockGroup = 'My_Working';

        parent::_construct();


    }

    /**
     * Get header with Department name
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
        if ($this->_coreRegistry->registry('phone')->getId()) {
            return __("Edit Users '%1'", $this->escapeHtml($this->_coreRegistry->registry('phone')->getName()));
        } else {
            return __('Add Users');
        }
    }


}
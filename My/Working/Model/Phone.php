<?php

namespace My\Working\Model;

class Phone extends \Magento\Framework\Model\AbstractModel //implements \Magento\Framework\DataObject\IdentityInterface
{
   // const CACHE_TAG = 'my_working_link';

//    protected $_cacheTag = 'my_working_link';
//
//    protected $_eventPrefix = 'my_working_link';

    protected function _construct()
    {
        $this->_init('My\Working\Model\ResourceModel\Phone');
    }

//    public function getIdentities()
//    {
//        return [self::CACHE_TAG . '_' . $this->getId()];
//    }
//
//    public function getDefaultValues()
//    {
//        $values = [];
//
//        return $values;
//    }
}
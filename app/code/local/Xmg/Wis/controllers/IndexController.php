<?php

class Xmg_Wis_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();

        $orders = Mage::getModel('sales/order')->getCollection()
            ->setOrder('created_at', 'DESC')->setPageSize(5)->load();

        $block = $this->getLayout()->getBlock('wis');
        $block->setData('orders', $orders);

        $this->renderLayout();


    }
}

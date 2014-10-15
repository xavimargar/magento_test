<?php

class Xmg_Wis_Model_Observer
{
    public function checkPayment($event)
    {
        $order = $event->getOrder(); // Mage_Sales_Model_Order

        Mage::log('Order id: '.$order->getEntityId() . ' Time:' . $order->getPayment()->getMethodInstance()->getAmountPaid() . ' - Total amount: ' . $order->getGrandTotal());
    }
}
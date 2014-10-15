<?php

class Xmg_Wis_Model_Observer
{
    public function checkPayment($event)
    {
        $order = $event->getInvoice()->getOrder(); // Mage_Sales_Model_Order

        echo 'entra';
        //exit;
        //return $this;
    }

}
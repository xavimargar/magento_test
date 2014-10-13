<?php
class Xmg_Wis_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//echo 'Hello Index!';
  //$this->loadLayout(array('default'));

    $this->loadLayout();
  $this->renderLayout();
    }
}

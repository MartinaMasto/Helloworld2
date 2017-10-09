<?php
/**
 *  Hello World 2
 */

/**
 * Class Masto_Helloworld_IndexController
 *
 * @version 0.1.0
 * @author Martina Masto <martina.masto@thinkopen.it>
 */
class Masto_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * IndexAction
     *
     */
    public function indexAction()
    {
    $this->loadLayout();
    $this->renderLayout();
    }
}
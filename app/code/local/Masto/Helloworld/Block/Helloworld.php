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
class Masto_HelloWorld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * getMessage()
     *
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper("masto_helloworld")->getConfig("configuration/message");
    }

    /**
     * isEnabled()
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper("masto_helloworld")->isEnabled("configuration/enabled");
    }
}

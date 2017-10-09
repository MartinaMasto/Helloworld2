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
class Masto_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig()
     *
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig("masto_helloworld/".config);
    }

    /**
     * isEnabled()
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->getConfig("configuration/enabled");
    }
}
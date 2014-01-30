<?php
/**
 * Solvingmagento_OneStepCheckout link block class
 *
 * PHP version 5.3
 *
 * @category  Solvingmagento
 * @package   Solvingmagento_OneStepCheckout
 * @author    Oleg Ishenko <oleg.ishenko@solvingmagento.com>
 * @copyright 2014 Oleg Ishenko
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   GIT: <0.1.0>
 * @link      http://www.solvingmagento.com/
 *
 */

/** Solvingmagento_OneStepCheckout_Block_Link
 *
 * @category Solvingmagento
 * @package  Solvingmagento_OneStepCheckout
 *
 * @author  Oleg Ishenko <oleg.ishenko@solvingmagento.com>
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version Release: <package_version>
 * @link    http://www.solvingmagento.com/
 */

class Solvingmagento_OneStepCheckout_Block_Link extends Mage_Core_Block_Template
{


    /**
     * Adds a link to the one step checkout
     *
     * @return Solvingmagento_OneStepCheckout_Block_Link
     */
    public function addOnestepCheckoutLink()
    {
        if (!$this->helper('solvingmagento_onestepcheckout')->oneStepCheckoutEnabled()) {
            return $this;
        }

        $parentBlock = $this->getParentBlock();
        if ($parentBlock && Mage::helper('core')->isModuleOutputEnabled('Solvingmagento_OneStepCheckout')) {
            $text = $this->__('Checkout in One Step');
            $parentBlock->addLink(
                $text,
                'checkout',
                $text,
                true,
                array('_secure' => true),
                60,
                null,
                'class="top-link-checkout"'
            );
        }
        return $this;
    }
}

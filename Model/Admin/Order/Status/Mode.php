<?php
/**
 * Paybox Epayment module for Magento
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * available at : http://opensource.org/licenses/osl-3.0.php
 *
 * @package    Paybox_Epayment
 * @copyright  Copyright (c) 2013-2014 Paybox
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Order Statuses source model
 */

namespace Paybox\Epayment\Model\Admin\Order\Status;

class Mode extends \Paybox\Epayment\Model\Admin\Order\Status
{
//	protected $_stateStatuses = array(
//		\Magento\Sales\Model\Order::STATE_NEW,
//		\Magento\Sales\Model\Order::STATE_PENDING_PAYMENT,
//	);
        
        public function toOptionArray() {
    	$options = parent::toOptionArray();
    	$options[0] = array(
    		'value' => 'manual',
    		'label' => __('Manual capture only'),
    	);
//    	$options[1] = array(
//    		'value' => 'state',
//    		'label' => __('On order state change'),
//    	);
        $options[2] = array(
    		'value' => 'shipment',
    		'label' => __('On order shipment'),
    	);
    	return $options;
    }
}

<?php

namespace Foggyline\Office\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogCustomerEmail implements ObserverInterface
{
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    /* Magento core event:

        $this->eventManager->dispatch(
            'customer_customer_authenticated',
            ['model' => $this->getFullCustomerObject($customer), 'password'=>$password]
        );
    */

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return self
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //$password = $observer->getEvent()->getPassword();
        $customer = $observer->getEvent()->getModel();
        $this->logger->info('Foggyline\Office: ' . $customer->getEmail());
        return $this;
    }
}
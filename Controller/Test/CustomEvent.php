<?php

namespace Foggyline\Office\Controller\Test;

class CustomEvent extends \Foggyline\Office\Controller\Test
{
    protected $eventManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Event\ManagerInterface $eventManager
    )
    {
        $this->eventManager = $eventManager;
        return parent::__construct($context);
    }
    
    public function execute()
    {
        //dispatch our own events
        //$this->eventManager->dispatch('foggyline_office_foo');
        // or
        $this->eventManager->dispatch(
            'foggyline_office_bar',
            ['var_one'=>'Val 1', 'var_two'=>'Val 2']
        );

        echo "foggyline_office_bar event has been dispatched!";
    } 
}       
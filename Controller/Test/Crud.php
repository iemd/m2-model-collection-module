<?php

namespace Foggyline\Office\Controller\Test;

class Crud extends \Foggyline\Office\Controller\Test
{
    protected $employeeFactory;
    protected $departmentFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory,
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory
    )
    {
        $this->employeeFactory = $employeeFactory;
        $this->departmentFactory = $departmentFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        /* 
         * CRUD Code Here
         * Creating new entities
        */

        //Simple model, creating new entities, flavour #1
        /* $department1 = $this->departmentFactory->create();
        $department1->setName('Finance');
        $department1->save(); */

        //Simple model, creating new entities, flavour #2
       /*  $department2 = $this->departmentFactory->create();
        $department2->setData('name', 'Research');
        $department2->save(); */

        //Simple model, creating new entities, flavour #3
        /* $department3 = $this->departmentFactory->create();
        $department3->setData(['name' => 'Support']);
        $department3->save(); */
        
        //EAV model, creating new entities, flavour #1
        /* $employee1 = $this->employeeFactory->create();
        $employee1->setDepartment_id($department1->getId());
        $employee1->setEmail('goran@mail.loc');
        $employee1->setFirstName('Goran');
        $employee1->setLastName('Gorvat');
        $employee1->setServiceYears(3);
        $employee1->setDob('1984-04-18');
        $employee1->setSalary(3800.00);
        $employee1->setVatNumber('GB123451234');
        $employee1->setNote('Note #1');
        $employee1->save(); */

        //EAV model, creating new entities, flavour #2
       /*  $employee2 = $this->employeeFactory->create();
        $employee2->setData('department_id', $department2->getId());
        $employee2->setData('email', 'marko@mail.loc');
        $employee2->setData('first_name', 'Marko');
        $employee2->setData('last_name', 'Tunukovic');
        $employee2->setData('service_years', 3);
        $employee2->setData('dob', '1984-04-18');
        $employee2->setData('salary', 3800.00);
        $employee2->setData('vat_number', 'GB123451234');
        $employee2->setData('note', 'Note #2');
        $employee2->save(); */
        
        //EAV model, creating new entities, flavour #3
        /* $employee3 = $this->employeeFactory->create();
        $employee3->setData([
            'department_id' => $department3->getId(),
            'email' => 'ivan@mail.loc',
            'first_name' => 'Ivan',
            'last_name' => 'Telebar',
            'service_years' => 2,
            'dob' => '1986-08-22',
            'salary' => 2400.00,
            'vat_number' => 'GB123454321',
            'note' => 'Note #3'
        ]);
        $employee3->save(); */

        /*
         * Reading existing entities
         * Simple model
        */
        /* $department = $this->departmentFactory->create();
        $department->load(2);
        echo "<pre>"; print_r($department->debug()); */   
        
        /*
         * Reading existing entities
         * EAV model
        */
        /* $employee = $this->employeeFactory->create();
        $employee->load(2);
        echo "<pre>"; print_r($employee->debug()); */ 

        /*
         * Updating existing entities
         * Simple model
        */
        /* $department = $this->departmentFactory->create();
        $department->load(2);
        $department->setName('Finance #2');
        $department->save();
        echo "<pre>"; print_r($department->debug()); */

        /*
         * Updating existing entities
         * EAV model
        */
        /* $employee = $this->employeeFactory->create();
        $employee->load(2);
        $employee->setFirstName("Goran #2");
        $employee->setLastName("Gorvat #2");
        $employee->save();
        echo "<pre>"; print_r($employee->debug()); */

        /*
         * Deleting existing entities
         * Simple model
        */
        /* $department = $this->departmentFactory->create();
        $department->load(13);
        $department->delete(); */

        /*
         * Deleting existing entities
         * EAV model
        */
        /* $employee = $this->employeeFactory->create();
        $employee->load(3);
        $employee->delete(); */

        /*
         * Managing collections
         * Simple model 
         * (factory class / object manager)
        */
        /* $collection = $this->departmentFactory->create()->getCollection();
        $collection = $this->_objectManager->create('Foggyline\Office\Model\ResourceModel\Department\Collection');
        echo "<pre>"; print_r($collection->toArray()); */

        /*
         * Managing collections
         * EAV model
         * (factory class / object manager)
        */
        $collection = $this->employeeFactory->create()->getCollection();
        //$collection = $this->_objectManager->create('Foggyline\Office\Model\ResourceModel\Employee\Collection');
        echo "<pre>"; print_r($collection->toArray());

        /*
         * Collection filters
        */

    }
}
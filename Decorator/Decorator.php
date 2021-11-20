<?php

// base service interface 
interface IBaseService
{
    public function get_cost(): int;
}


// base service
class baseService implements IBaseService
{
    public function get_cost(): int
    {
        return 2000;
    }
}


// service one 
class serviceOne implements IBaseService
{
    private IBaseService $Service;

    public function __construct(IBaseService $Service)
    {
        $this->Service = $Service;
    }

    public function get_cost(): int
    {
        return $this->Service->get_cost() + 1500;
    }
}


// service two 
class serviceTwo implements IBaseService
{
    private IBaseService $Service;

    public function __construct(IBaseService $Service)
    {
        $this->Service = $Service;
    }

    public function get_cost(): int
    {
        return $this->Service->get_cost() + 2000;
    }
}


// order base service cost :
echo (new baseService)->get_cost() . "\n"; // output : 2000

// order base service and serviceOne;
echo (new serviceOne((new baseService)))->get_cost() . "\n"; //output : 3500

// order base service and serviceTwo:
echo (new serviceTwo((new baseService)))->get_cost() . "\n"; // output : 4000

// order base service and service one and service two :
echo (new serviceOne(new serviceTwo(new baseService)))->get_cost(); // output : 5500

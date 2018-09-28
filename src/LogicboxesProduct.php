<?php

namespace Dhawton\LaravelLb;

class LogicBoxesProduct extends LogicBoxes {

	public $resource;

    public function __construct()
    {
        parent::__construct();
        
    	$this->resource = "products";
    }

    public function getPlanDetails()
    {
    	$method = "plan-details";
    	$response = $this->get($this->resource, $method);
    	return $this;
    }

    public function move($domainName, $customerIdFrom, $customerIdTo, $defaultContact = 'oldcontact') {
        $variables = [
            'domain-name' => $domainName,
            'existing-customer-id' => $customerIdFrom,
            'new-customer-id' => $customerIdTo,
            'default-contact' => $defaultContact
        ];
        $method="move";
        return $this->post($this->resource, $method, $variables);
    }

    public function getResellerCost()
    {
        $method = "reseller-cost-price";
        $response = $this->get($this->resource, $method);
        return $this;
    }
}

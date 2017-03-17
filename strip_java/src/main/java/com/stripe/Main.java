package com.stripe;

import java.util.HashMap;
import java.util.Map;

import com.stripe.Stripe;
import com.stripe.model.Charge;
import com.stripe.model.Customer;


public class Main {

    public static void main(String[] args) throws Exception
    {

    	// createCustomer();
    	chargeCustomer();
    }
    
    public static void createCustomer() throws Exception
    {
    	// Set your secret key: remember to change this to your live secret key in production
    	// See your keys here: https://dashboard.stripe.com/account/apikeys
    	Stripe.apiKey = "sk_test_mOnLXjlJxHHd48z5pIKOaJxO";

    	// Token is created using Stripe.js or Checkout!
    	// Get the payment token submitted by the form:
    	String token = "tok_19yRLqFjX0PMgDEU6UEMUNkG";

    	// Create a Customer:
    	Map<String, Object> customerParams = new HashMap<String, Object>();
    	customerParams.put("email", "paying.user@example.com");
    	customerParams.put("source", token);
    	Customer customer = Customer.create(customerParams);

    	
    	System.out.println("Customer ID: " + customer.getId());


    }
    
    
    public static void chargeCustomer() throws Exception
    {
    	Stripe.apiKey = "sk_test_mOnLXjlJxHHd48z5pIKOaJxO";
    	String customerId = "cus_AJ3TU7KTceUBbU";
    	
    	Map<String, Object> chargeParams = new HashMap<String, Object>();
    	chargeParams.put("amount", 1000); 
    	chargeParams.put("currency", "usd");
    	chargeParams.put("customer", customerId);
    	Charge charge = Charge.create(chargeParams);
    }
    
}
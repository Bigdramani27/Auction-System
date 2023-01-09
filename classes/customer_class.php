<?php
include_once(dirname(__FILE__)).'../../settings/connection.php';

class Customer extends Connection{
    function inputing_user_info($name, $email, $city, $phone, $password, $code){
        return $this->query("insert into customer(customer_name, customer_email, customer_city, customer_contact, customer_pass, code, status, user_role) values ('$name', '$email', '$city', '$phone','$password', '$code', 'notverified', 2)");
    }





}



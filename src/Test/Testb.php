<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 04.10.18
 * Time: 15:28
 */

namespace App\Test;

class Testb
{
    const SERIALIZABLE_FORMAT = "Yaml";
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
}

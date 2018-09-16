<?php

include_once '..\user_registration_app\functions.php';

class test_Phone_Validation {
    


public function validatorTest()
{
    
  $phone = '+37068789569';
  $expectedOutput = TRUE;
  $output = validateNames($phone);
  $this->assertEquals($expectedOutput, $output);
}

}


<?php

include_once '..\user_registration_app\functions.php';

class test_Email_Validation {
    


public function validatorTest()
{
    
  $email = 'norbertas@grybauskas.com';
  $expectedOutput = TRUE;
  $output = validateEmail($email);
  $this->assertEquals($expectedOutput, $output);
}

}


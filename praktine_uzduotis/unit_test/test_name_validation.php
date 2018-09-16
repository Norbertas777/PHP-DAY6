<?php

include_once '..\user_registration_app\functions.php';

class test_Name_Validation {
    


public function validatorTest()
{
    
  $names = ['Norb' , 'Joe' , 'Ken'];
  $expectedOutput = TRUE;
  $output = validateNames($names);
  $this->assertEquals($expectedOutput, $output);
}

}

validatorTest();
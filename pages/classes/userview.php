<?php

class UserView extends User
{

    //construct is inherited from User


    //messages for form errors
    public function getMainErrorMessage ($errorType, $message)
    {

        if(isset($_GET['error']) && $_GET['error']==$errorType)
            echo $message;
          
    }

    public function getSecondErrorMessage ($errorType, $message) 
    {

        if(isset($_GET['error']) && $_GET['error']==$errorType)
          echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';
          
    }

    //succes messages for forms
    public function getSuccesMessage ($succesType, $message) 
    {
      
        if(isset($_GET['succes']) && $_GET['succes']==$succesType)
          echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
          
    }

    //echo all the colleges
    protected function allCollegesWithCompability() :array
    {

        $colleges = $this->getAllColleges();
        $collegesWithNewValues = array();

        foreach($colleges as $college)
        {

            $newCollege = new College($college['index_college'],$college['name_college'],$college['university_college'],
                                      $college['county_college'],$college);

        }

    }


}
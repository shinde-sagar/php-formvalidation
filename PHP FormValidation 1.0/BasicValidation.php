<?php
/**
 * Created by Knicklab.com.
 * User: Sagar Shinde
 * Date: 02/11/17
 * Time: 3:37 PM
 */

require 'BasicValidation_interface.php';


class BasicValidation implements BasicValidation_interface
{
    const datatype_error = "<b>Datatype error :</b>";
    const length_error = "<b>Length error :</b>";


    private function string_datatype($data,$function_name)
    {

        try
        {

            if(is_string($data))
            {

                return true;
            }
            else
            {

                throw new Exception(self::datatype_error."required string datatype for ".$function_name." function<br/>");
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    private function array_datatype($data,$function_name)
    {
        try
        {
            if(is_array($data))
                return true;
            else
                throw new Exception(self::datatype_error."required array datatype for ".$function_name." function<br/>");
        }
        catch(Exception $e)
        {
            $e->getMessage();
        }
    }

    public function email($data)
    {
        if($this->string_datatype($data,"email") && filter_var($data,FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }

    public function password($data,$type,$required=false,$min = 0,$max = 20)
    {
        if($this->string_datatype($data,"password"))
        {
            switch($type)
            {
                case 'alphanumeric':
                    if($this->alphanumericOnlywithspace($data,$required,$min,$max))
                        return true;
                    break;
                case 'numeric':
                    if($this->numericOnlywithspace($data,$required,$min,$max))
                        return true;
                    break;
                case 'alphabet':
                    if($this->alphabetOnlywithspace($data,$required,$min,$max))
                        return true;
                    break;
                case 'special':
                    if($this->length($data,$min,$max) && preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/', $data)) {
                            return true;
                    }
                    break;
                default :
                    return false;
            }
            return false;

        }
    }


    /*
     * date function check formate given in argument and third required or not
     *
     * */
    public function date($data,$between)
    {

        if(strlen($data) != 10)
        {
            echo self::length_error." error in date format eg. 12-12-2013<br/>";    //comment these line if don't want to show error
            return false;
        }
        if($this->string_datatype($data,"Date") && $this->array_datatype($between,"Date"))
        {
            $user = date('Y-m-d',strtotime($data));
            $to = date('Y-m-d',strtotime($between[1]));
            $from = date('Y-m-d',strtotime($between[0]));
            if($user >= $from && $user <= $to)
                return true;
        }
        return false;
    }



    public function url($data,$min = NULL,$max = NULL)
    {
        if($this->string_datatype($data,"url") && $this->length($data,$min,$max) && filter_var($data,FILTER_VALIDATE_URL))
        {
            return true;
        }
        return false;
    }

    public function ip($data, $type = NULL)
    {
        if($this->string_datatype($data,"ip"))
        {
            if(($type == "ipv4" && filter_var($data,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)))
                return true;
            else if($type == "ipv6" && filter_var($data,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6))
                return true;
            else if($type == NULL && filter_var($data,FILTER_VALIDATE_IP))
                return true;
            return false;

        }
        return false;
    }

    public function required($data,$space = false)
    {
        if($space === false)
            $data = ltrim($data);       // if you want to allow starting spaces then comment this line
        if($data != "" || $data != NULL)
            return true;
        return false;

    }




    public function alphabetOnlywithspace($data, $required=false, $min= NULL, $max = NULL)
    {
        if($this->string_datatype($data,"aphabetOnlywithspace") && $this->length($data,$min,$max))
        {
            $data = str_replace(" ","",$data);
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_alpha($data))
                return true;
            return false;
        }
        return false;
    }

    public function numericOnlywithspace($data, $required = false, $min=NULL, $max=NULL)
    {
        // TODO : numericonlywithspace function

        if($this->string_datatype($data,"numericOnlywithspace") && $this->length($data,$min,$max))
        {
            $data = str_replace(" ","",$data);
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_digit($data))
                return true;
            return false;
        }
        return false;
    }


    public function alphanumericOnlywithspace($data, $required=false, $min=NULL, $max=NULL)
    {
        // TODO: Implement alphanumericOnlywithspace() method.

        if($this->string_datatype($data,"alphanumericOnlywithspace") && $this->length($data,$min,$max))
        {
            $data = str_replace(" ","",$data);
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_alnum($data))
                return true;
            return false;
        }
        return false;
    }

    public function alphanumericOnly($data,$required=true,$min = NULL,$max = NULL)
    {
        if($this->string_datatype($data,"alphanumericOnly") && $this->length($data,$min,$max))
        {
            /*
             * check required false or not
             * */

            //same code for three function alphabetonly,alphanumeric,numeric
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_alnum($data))
                return true;
            return false;
        }
        return false;
    }

    public function numericOnly($data,$required=true,$min=NULL,$max=NULL)
    {
        if($this->string_datatype($data,"numericOnly") && $this->length($data,$min,$max))
        {
            /*
             * check required false or not
             * */

            //same code for three function alphabetonly,alphanumeric,numeric
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_digit($data))
                return true;

            return false;
        }
        return false;
    }

    public function alphabetOnly($data,$required=true,$min=NULL,$max=NULL)
    {
        if($this->string_datatype($data,"alphabetOnly") && $this->length($data,$min,$max))
        {
            /*
             * check required false or not
             * */

            //same code for three function alphabetonly,alphanumeric,numeric
            if($required === false && $this->check_empty($data))
                return true;
            if(ctype_alpha($data))
                return true;

            return false;
        }
        return false;
    }

    public function length($data,$min, $max)
    {
        try
        {
            if ($min !== NULL && $max !== NULL) {
                if(is_integer($min) && is_integer($max)) {
                    $len = strlen($data);
                    if ($len >= $min && $len <= $max)
                        return true;
                    return false;
                }
                else
                {
                    throw new Exception(self::datatype_error."required integer datatype for min and max argument");
                }

            }
            return true;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }



    }

    private function check_empty($data)
    {
        $data = ltrim($data);       // if you want to allow starting spaces then comment this line
        if($data != "" || $data != NULL)
            return false;
        return true;
    }


}
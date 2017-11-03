<?php
/**
 * Created by Knicklab.com.
 * User: Sagar Shinde
 * Date: 02/11/17
 * Time: 3:37 PM
 */

/*
 * $min : min length of string
 * $max : length of string
 * */
interface BasicValidation_interface
{
    public function email($data);


    /*
     * #date function
     * data : define user data;
     * $formate : define type of formate eg. d/m/y or m/d/y or m-d-y
     * $between : date between input type array ['02-02-2012','03-12-2016']
     *
     *  note : min and max are
     *
     * function call eg date()
     * */
    public function date($data,$between);


    /*
     * #function url validation
     * $data : user input
     *
     * */
    public function url($data,$min,$max);
    public function ip($data,$type);

    /*
     * Basic validation with space
     * */

    public function alphabetOnlywithspace($data,$required,$min,$max);

    public function numericOnlywithspace($data,$required,$min,$max);

    public function alphanumericOnlywithspace($data,$required,$min,$max);

    /*
     * Basic validation
     * */
    public function alphanumericOnly($data,$required,$min,$max);

    public function numericOnly($data,$required,$min,$max);

    public function alphabetOnly($data,$required,$min,$max);

    /*
     * Data required clauses
     * */

    public function required($data,$space);


    /*
     * Length clasues to set specfic length to string
     *
     * */
    public function length($data,$min,$max);


}
<?php

namespace app\models;

require_once "app/models/BaseModel.php";
// use app\models\Model;

class Family extends Model
{
    private $fname, $mname, $lname, $phone, $state, $num_of_members, $address;


    public function get_fname()
    {
        return $this->fname;
    }

    public function set_fname($fname)
    {
        $this->fname = $fname;
    }

    public function get_lname()
    {
        return $this->lname;
    }

    public function set_lname($lname)
    {
        $this->lname = $lname;
    }
    public function get_mname()
    {
        return $this->mname;
    }

    public function set_mname($mname)
    {
        $this->mname = $mname;
    }

    public function get_phone()
    {
        return $this->phone;
    }

    public function set_phone($phone)
    {
        $this->phone = $phone;
    }

    public function get_state()
    {
        return $this->state;
    }

    public function set_state($state)
    {
        $this->state = $state;
    }

    public function get_num_of_members()
    {
        return $this->num_of_members;
    }

    public function set_num_of_members($num_of_members)
    {
        $this->num_of_members = $num_of_members;
    }

    public function get_address()
    {
        return $this->address;
    }

    public function set_address($address)
    {
        $this->address = $address;
    }
}

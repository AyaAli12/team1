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


    public static function found($address){
        $found="SELECT * FROM families WHERE address='$address'";
        $model=new Model();
        $conn=$model->get_conn();
        $found_query=mysqli_query($conn,$found);
        $familys=array();
        while ($row=mysqli_fetch_assoc($found_query)) {
    
            $Family=new Family();
            $Family->set_id($row['id']);
            $Family->set_fname($row['fname']);
            $Family->set_mname($row['mname']);
           $Family->set_lname($row['lname']);
           $Family->set_num_of_members($row['num_of_members']);
           $Family->set_state($row['functional_state']);
           $Family->set_phone($row['phone']);
           $Family->set_address($row['address']);
           $familys[]=$Family;
        }
            return $familys;
    }
    public function update(){
        $update="UPDATE families SET fname='$this->fname', mname='$this->mname', lname='$this->lname', num_of_members='$this->num_of_members',
       functional_state='$this->state', phone='$this->phone', address='$this->address' WHERE id='$this->id'";
       $query_up=mysqli_query($this->conn,$update);
    }
            
    public function create(){ 
       $add="INSERT INTO families(fname,mname,lname,num_of_members,functional_state,phone,address) VALUES ('$this->fname','$this->mname',
       '$this->lname','$this->num_of_members','$this->state','$this->phone','$this->address')";
       $query_add=mysqli_query($this->conn,$add);
       $this->id = mysqli_insert_id($conn);
    }
    
     public static function delete($id)
     {
        $model=new Model();
        $conn=$model->get_conn();
        $delete=" DELETE FROM families WHERE id='$id' ";
        $query_add=mysqli_query($conn,$delete);
     }
     }


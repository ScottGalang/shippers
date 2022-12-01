<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'phone',
        'email'
    ];

    public function getId(){
        return $this->id;
    }

    public function getCompanyName(){
        return $this->company_name;
    }

    public function setCompanyName($value){
        $this->company_name = $value;
        return $this->save();
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($value){
        $this->address = $value;
        return $this->save();
    }

    public function getPhone(){
        return $this->company_name;
    }

    public function setPhone($value){
        $this->company_name = $value;
        return $this->save();
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($value){
        $this->email = $value;
        return $this->save();
    }
    
}
?>
<?php

namespace App\Entity;

use App\Application\Database;

class Produit extends Database
{
    /**
     *@var int
    */
    private $id;

    /**
     *@var string
    */
    private $designation;
    /**
     * @var float
    * 
    */
    private $price;



    /**
     * Get *@var int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set *@var int
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get *@var string
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set *@var string
     *
     * @return  self
     */ 
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }
    public function add (string $designation,float $price){
        $sql = 'insert into produit(designation, price) values(:designation, :price)';

        $this->prepare($sql);
        $this->bindParam(':designation', $designation, \PDO::PARAM_STR);
        $this->bindParam(':price', $price, \PDO::PARAM_STR);
        $this->execute();
    }
    public function delete (int $id)
    {
        $sql = 'delete from produit where id=:id';
        $this->prepare($sql);
        $this->bindParam(':id' ,$id, \PDO::PARAM_INT);
        $this->execute();
    }
    public function edit (int $id, string $designation, float $price){

    $sql ='update produit set designation=:designation, price=:price where id=:id';

    $this->prepare($sql);
    $this->bindParam(':id', $id, \PDO::PARAM_INT);
    $this->bindParam(':designation' , $designation, \PDO::PARAM_STR);
    $this->bindParam(':price' , $price, \PDO::PARAM_STR);
    $this->execute();


}
    public function getAll()
    {
        $sql = 'select id, designation,price from produit';
        $this->prepare($sql);
        $this->execute();
        return $this->fetchAll();
    }
public function getOne(int $id)
{
    $sql = 'select id, designation,price from produit where id=:id';
    $this->prepare($sql);
    $this->bindParam(':id ',$id,\PDO::PARAM_INT);
    $this->execute;
    return $this->fetch();
}
    

}

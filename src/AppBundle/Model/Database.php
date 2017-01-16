<?php
namespace AppBundle\Model;

use Doctrine\ORM\Mapping as ORM;

class Database
{
    
    public static function getInstance()
    {
      $host="dwarves.iut-fbleau.fr";
      $servername="brassele";
      $username="brassele";
      $password;
      return new \PDO("mysql:host=$host;dbname=$servername",$username,$password);  
    }
  
}
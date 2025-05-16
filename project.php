<?php
   class ConnDb{
    //成员属性
    private $host;
    private $user;
    private $password;
    private $database;

    //成员方法
    function _construct($host,$user,$password,$database){
      $this->host=$host;
      $this->user=$user;
      $this->password=$password;
      $this->database=$database;
    }
    function getConnection(){
      $connHandle=mysqli_connect($this->host,$this->user,$this->password,$this->database);
      return $connHandle;
    }
   }
   $conn= new ConnDb('localhost','root','123456','mysql');
   $connHandle = $conn->getConnection();
   if($connHandle){
      echo '连接成功';
   }else{
         echo '连接失败';
      }
   
?>

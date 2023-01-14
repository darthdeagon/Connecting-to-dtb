<?php



class Test extends Dbh {

  public function getUsers(){
    $sql = "SELECT * FROM dboop";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
       echo $row['user_name'] . '<br>';
    
    }
  }

  public function getUsersStmt($user_name, $surname){
    $sql = "SELECT * FROM dboop WHERE user_name = ? AND surname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_name, $surname]);
    $names = $stmt->fetchAll();

    foreach ($names as $name){
      echo $name['user_name'];
    }


  }

  ublic function setUsersStmt($user_name, $surname){
    $sql = "SELECT * FROM dboop WHERE user_name = ? AND surname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_name, $surname]);
    $names = $stmt->fetchAll();

    foreach ($names as $name){
      echo $name['user_name'];
    }


  }

}
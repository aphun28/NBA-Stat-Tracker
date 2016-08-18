<?php
require "player.php";

class playerData {

public $players;

public $sql;
public $result;
public $con;
       
    function __construct() {

        $this->con = mysqli_connect('localhost','root','', 'Warriors');
    if (!$this->con) {
    die('Could not connect: ' . mysqli_error($this->con));
}
   
       $this->sql="SELECT * FROM players";
      $this->result = mysqli_query($this->con,$this->sql);
        //new player(playerId, name, position, team);
       $this->players = array();
        while($row = mysqli_fetch_array($this->result)) {
        $this->players[] = new player($row['player_id'], $row['first_name'], $row['last_name'], $row['position_name']);
            }
           
            mysqli_close($this->con);
        return $this->players;
    }
   

}

?>

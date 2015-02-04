<?php

require_once __DIR__ . '/Database.php';

class ArtistQuery extends Database{
    public function getAll(){
        $sql = "SELECT artist_name, id
                FROM artists
        ";
        $statement = static::$pdo->prepare($sql);
        $statement -> execute();
        $artists = $statement->fetchAll();
        
        
        return $artists;
    }

}

?>
<?php

Trait Database
{
    private function connect_db()
    {
        $string = "mysql:hostname=".DB_HOST.";dbname=".DB_NAME;
        $conn = new PDO($string, DB_USER,DB_PASSWORD);
        return $conn;
    }

    public function query($query, $data = [])
    {
        $conn = $this->connect_db();
        $stm = $conn->prepare($query);

        $check = $stm->execute($data);
        if($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result;
            }
        }
        return false;
    }

    public function get_row($query, $data = [])
    {
        $conn = $this->connect_db();
        $stm = $conn->prepare($query);

        $check = $stm->execute($data);
        if($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result[0];
            }
        }
        return false;
    }
}
<?php

class Model
{
    use Database;

    function test()
    {
        $query = "SELECt * FROM USERS";
        $result = $this->query($query);
        show_stuff($result);
    }

    public function insert()
    {

    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
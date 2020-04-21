<?php
include_once('database.php');
class Trangchu extends Database
{
    /**
     * @return array
     */
    public function exportTopProducts()
    {
        $connect = $this->connect;
        $query = "SELECT * FROM products LIMIT 0,4;";
        $results = $connect->query($query);
        $data = [];
        if($results->num_rows > 0)
        {
            while ($rows = $results->fetch_object())
            {
                $data[] = $rows;
            }
        }
        return $data;
    }

    /**
     * @return array
     */
    public function exportTopProducts2()
    {
        $connect = $this->connect;
        $query = "SELECT * FROM products LIMIT 4,4;";
        $results = $connect->query($query);
        $data = [];
        if($results->num_rows > 0)
        {
            while ($rows = $results->fetch_object())
            {
                $data[] = $rows;
            }
        }
        return $data;
    }
}
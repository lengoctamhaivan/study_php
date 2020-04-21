<?php
include_once('config.php');
class Database
{
    /**
     * @var false|mysqli
     */
    public $connect;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $connect = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE_NAME);
        if(!$connect)
        {
            die ('Không thể kết nối: '. $connect->error);
        }
        $connect->set_charset('utf8');
        return $this->connect = $connect;
    }

    /**
     * @param string $tableName
     * @return array
     */
    public function selecttableName(string $tableName)
    {
        $connect = $this->connect;
        $query = "SELECT * FROM {$tableName};";
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
     * @param string $tableName
     * @param string $column
     * @param string $value
     * @return array
     */
    public function selectWhere(string $tableName, string $column, string $value)
    {
        $connect = $this->connect;
        $query = "SELECT * FROM {$tableName} WHERE {$column} = {$value};";
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
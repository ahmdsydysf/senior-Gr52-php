<?php


class Database implements DbInt
{
    public $connection ;
    public $query_result ;

    public $q;

    public function __construct($dbName = 'group50test', $host = 'localhost', $pass = '', $un = 'root')
    {
        $this->connection = mysqli_connect($host, $un, $pass, $dbName);
    }
    public function select($tableName, $cols)
    {

        $this->q = "select $cols from $tableName ";
        return $this;

    }



    public function snglData()
    {
        $this->query_result = mysqli_query($this->connection, $this->q);
        return mysqli_fetch_assoc($this->query_result);
    }
    public function allData()
    {
        $this->query_result = mysqli_query($this->connection, $this->q);

        $data = [];
        while($row = mysqli_fetch_assoc($this->query_result)) {
            $data[] = $row ;
        }
        return $data;
    }
    public function andWhere($col, $ope, $val)
    {
        $this->q .= " AND $col $ope $val ";
        return $this;
    }
    public function where($col, $ope, $val)
    {
        $this->q .= "WHERE $col $ope $val ";
        return $this;
    }


    public function insert() {}
    public function edit() {}
    public function delete() {}
}

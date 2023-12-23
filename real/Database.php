<?php


class Database implements DbInt
{
    public $connection ;
    public $query_result ;

    public $insertedData;

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
        $this->excu();
        return mysqli_fetch_assoc($this->query_result);
    }
    public function allData()
    {
        $this->excu();

        $data = [];
        while($row = mysqli_fetch_assoc($this->query_result)) {
            $data[] = $row ;
        }
        return $data;
    }
    public function excu()
    {
        $this->query_result = mysqli_query($this->connection, $this->q);

    }
    public function andWhere($col, $ope, $val)
    {
        $this->q .= " AND $col $ope $val ";
        return $this;
    }
    public function orWhere($col, $ope, $val)
    {
        $this->q .= " OR $col $ope $val ";
        return $this;
    }
    public function where($col, $ope, $val)
    {
        $this->q .= " WHERE $col $ope $val ";
        return $this;
    }

    // insert into users (username , password ) values ('' , '' )
    public function dataToInsert($user, $pass)
    {
        $this->insertedData = [
            'name' => $user,
            "password" => $pass
        ];

        return $this;
    }
    public function insert($table, $insertedData)
    {

        $cols = '';
        $vals = '';

        foreach($insertedData as $col => $val) {
            $cols .= "$col ,";
            $vals .= "'$val' ,";
        }

        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');

        $this->q = "INSERT INTO $table ($cols) VALUES ($vals)";
        $this->excu();
    }
    public function edit($table, $insertedData)
    {
        // update users set name=newvalue , password=newvalud ,
        $row = '';

        foreach($insertedData as $col => $val) {
            $row .= " $col = '$val' ,";
        }

        $row = rtrim($row, ',');

        $this->q = "UPDATE $table SET $row";
        return $this;
    }
    public function delete($table)
    {
        $this->q = "DELETE FROM $table";
        return $this;
    }
}

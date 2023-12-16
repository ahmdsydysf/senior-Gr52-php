<?php



interface DbInt
{
    public function select($tableName, $cols);
    public function insert();
    public function edit();
    public function delete();
}

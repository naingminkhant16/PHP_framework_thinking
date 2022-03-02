<?php
class QueryBuilder
{
    protected $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function insert($data, $table)
    {
        $datakey = array_keys($data);
        $cols = implode(',', $datakey);
        $values = array_values($data);

        $qmarks = '';
        foreach ($datakey as $key) {
            $qmarks .= '?,';
        }
        $qmarks = rtrim($qmarks, ',');

        $sql = "INSERT INTO $table($cols) VALUES ($qmarks)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($values);
    }
    public function delete($idData, $table)
    {
        foreach ($idData as $id) {
            $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
            $stmt->execute([':id' => $id]);
        }
    }
}

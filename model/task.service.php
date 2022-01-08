<?php

class TaskService {

    private $connection;
    private $task;

    public function __construct(Connection $connection, Task $task)
    {
        $this->connection = $connection->connect();
        $this->task = $task;
    }

    public function create()
    {
        $query = 'INSERT INTO tb_tarefas(tarefa) values(:tarefa)';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':tarefa', $this->task->__get('task'));
        $stmt->execute();
    }

    public function recover()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
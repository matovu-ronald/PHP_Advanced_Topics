<?php

interface TableInterface {
    public function save(array $data);
}


interface LogInterface {
    public function log($message);
}

class Table implements TableInterface, LogInterface, Countable {

    public function save(array $data)
    {
        return 'Data Saved Successfully';
    }

    public function log($message)
    {
        return $message . '\n';
    }

    public function count()
    {
        return 10;
    }
}

echo (new Table())->save([]);
echo (new Table())->count();
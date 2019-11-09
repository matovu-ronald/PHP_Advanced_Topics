<?php

trait Log {
    public function log($message)
    {
        echo "{$message}\n";
    }
}

class Table {
    use Log;

    public function save()
    {
        return $this->log('Save Start');
    }
}

(new Table())->save();
<?php

class InvalidCCNumberException extends InvalidArgumentException {
    public function __construct($message = 'No CC Number', $code = 0, $previous = null) {
        return parent::__construct($message, $code, $previous);
    }
}

try {
    processCC(1,00256);
} catch (InvalidCCNumberException $e) {
    echo $e->getMessage();
    echo get_class($e);
    echo "\n";
} finally {
    echo "\n";
    echo "final";
}

function processCC($numb = null, $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw $e;
    }
    echo 'processsed';
}

function validate($numb, $zipCode) {
    if (is_null($numb)) {
        throw new InvalidCCNumberException();
    }
}
<?php
class DivideByZeroException extends Exception
{
    public function __toString(): string
    {
        return "Can't divide by zero";
        // TODO: Implement __toString() method.
    }
}
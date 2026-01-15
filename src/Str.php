<?php

namespace Codr;

class Str
{
    /**
     * Reverse a string
     *
     * @param string $input
     * @return string
     */
    public function reverse(string $input): string
    {
        return strrev($input);
    }

    /**
     * Apply ROT13 transformation to a string
     *
     * @param string $input
     * @return string
     */
    public function rot13(string $input): string
    {
        return str_rot13($input);
    }

    /**
     * Convert string to lowercase
     *
     * @param string $input
     * @return string
     */
    public function tolower(string $input): string
    {
        return strtolower($input);
    }

    /**
     * Convert string to uppercase
     *
     * @param string $input
     * @return string
     */
    public function toupper(string $input): string
    {
        return strtoupper($input);
    }

    /**
     * Convert string to ucfirst
     *
     * @param string $input
     * @return string
     */
    public function ucfirst(string $input): string
    {
        return ucfirst($input);
    }
}

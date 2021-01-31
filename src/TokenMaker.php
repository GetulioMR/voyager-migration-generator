<?php

namespace Izar;

class TokenMaker
{
    public function arrayToArrayToken(array $array, $depth = 0)
    {
        $output = '';
        $indentation = str_repeat('  ', $depth);

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $valueToken = $this->arrayToArrayToken($value, $depth + 1);
            } else {
                $valueToken = $value === null ? "null" : "\"$value\"";
            }

            $output .= "$indentation\"$key\" => $valueToken,\n";
        }

        return "[\n" . $output . "$indentation]";
    }
}

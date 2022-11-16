<?php

if (! function_exists('formatDocument')) {
    function formatDocument($value): string
    {
        $CPF_LENGTH = 11;
        $cnpjCpf = preg_replace("/\D/", '', $value);

        if (strlen($cnpjCpf) === $CPF_LENGTH) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", '$1.$2.$3-$4', $cnpjCpf);
        }

        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", '$1.$2.$3/$4-$5', $cnpjCpf);
    }
}

if (! function_exists('unformatDocument')) {
    function unformatDocument($value): string
    {
        return preg_replace('/\D/', '', $value);
    }
}

if (! function_exists('formatPhone')) {
    function formatPhone($phone): string|int
    {
        $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
        if ($matches) {
            return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
        } else {
            return $phone;
        }
    }
}

if (! function_exists('formatText')) {
    function formatText($value): string
    {
        return ucwords(strtolower($value));
    }
}

if (! function_exists('unformatText')) {
    function unformatText($value): string
    {
        return strtolower($value);
    }
}

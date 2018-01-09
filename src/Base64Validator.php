<?php

namespace Penance316\Validators;


class Base64Validator {

    public function validateBase64($attribute, $value, $parameters, $validator)
    {
        if (base64_encode(base64_decode($value, true)) === $value) {
            return true;
        } else {
            return false;
        }
    }
}
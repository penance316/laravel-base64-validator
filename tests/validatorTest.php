<?php

use Penance316\Validators\Base64Validator;
use PHPUnit\Framework\TestCase;

require(__DIR__ . '/../src/Base64Validator.php');

class ValidatorsTest extends TestCase {

    function testBase64()
    {
        $validator = new Base64Validator();

        // Invalid

        $res = $validator->validateBase64(null, '123456', null, null);
        $this->assertFalse($res);

        $res = $validator->validateBase64(null, 'iuhasdiulhasludhaslhd', null, null);
        $this->assertFalse($res);

        $res = $validator->validateBase64(null, '@!"£$%^', null, null);
        $this->assertFalse($res);

        // Valid

        $res = $validator->validateBase64(null, 'dGhpcyBzaG91bGQgcGFzcw==', null, null);
        $this->assertTrue($res);

        $res = $validator->validateBase64(null, 'YWxzbyB0aGlzIG9uZSBzaG91bGQ=', null, null);
        $this->assertTrue($res);

        $res = $validator->validateBase64(null, 'QmFjb24gaXBzdW0gZG9sb3IgYW1ldCBtZWF0YmFsbCBwb3JrIGNob3Agc2hvdWxkZXIgYW5kb3VpbGxlIGNoaWNrZW4gaGFtIGtldmluIHNhdXNhZ2UgcG9yayBsb2luIGJvdWRpbi4gQmFjb24gY2FwaWNvbGEgdHJpLXRpcCwgdC1ib25lIGNodWNrIHNob3J0IHJpYnMgcGFuY2V0dGEgc2lybG9pbiB2ZW5pc29uIGpvd2wgc2FsYW1pLiBMYW5kamFlZ2VyIHZlbmlzb24gcGFuY2V0dGEgZmlsZXQgbWlnbm9uIHNwYXJlIHJpYnMsIGZsYW5rIHNob3VsZGVyIHNob3J0IHJpYnMgam93bCBjaGlja2VuLiBUYWlsIGJyaXNrZXQgbWVhdGJhbGwgaGFtIGhvY2sgc2F1c2FnZSBzaG9ydCBsb2luIGZhdGJhY2sgc3BhcmUgcmlicy4KCg==', null, null);
        $this->assertTrue($res);


    }
}

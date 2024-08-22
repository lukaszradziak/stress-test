<?php

use function Pest\Stressless\stress;

it('has a fast response time', function () {
    $result = stress('localhost:8000');

    var_dump($result->requests()->duration());
});

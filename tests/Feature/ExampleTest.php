<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('Lean More! -> https://lighthouse-php.com/6/testing/phpunit.html')->todo();

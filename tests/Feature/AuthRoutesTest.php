<?php

test('login page can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertOk();
    $response->assertSee(route('register'));
});

test('register page can be rendered', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
    $response->assertSee(route('login'));
});

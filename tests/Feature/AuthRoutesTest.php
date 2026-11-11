<?php

test('login page can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertOk();
    $response->assertSee(route('register'));
    $response->assertSee(route('forgot-password'));
});

test('register page can be rendered', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
    $response->assertSee(route('login'));
});

test('forgot password page can be rendered', function () {
    $response = $this->get(route('forgot-password'));

    $response->assertOk();
    $response->assertSee(route('login'));
});

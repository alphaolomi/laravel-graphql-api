<?php

use App\Models\User;

it('can query users', function () {
    $users = User::factory()->count(2)->create();

    /** @var \Illuminate\Testing\TestResponse $response */
    $response = $this->graphQL(
        /** @lang GraphQL */
        '
        {
            users {
                data {
                    id
                    name
                }
            }
        }
    '
    );


    $response->assertJson([
        'data' => [
            'users' => [
                'data' => [
                    [
                        'id' => $users[0]->id,
                        'name' => $users[0]->name,
                    ],
                    [
                        'id' => $users[1]->id,
                        'name' => $users[1]->name,
                    ],
                ],
            ]
        ],
    ]);
});

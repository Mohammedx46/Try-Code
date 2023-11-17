<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $count = 1;
        $json_file = json_encode([

            "id" =>  $count++

        ]);
        return [
            "product_color" =>  json_encode([

                "id" =>  $count++,
                "product_color" => [
                    "0" => [
                        [
                            "id" => $count++,
                            "name" => "brown",
                            "code" => "123",
                        ],
                        [
                            "id" => $count++,
                            "name" => "red",
                            "code" => "1234",
                        ],
                    ],
                    "1" => [
                        [
                            "id" => $count++,
                            "name" => "brown",
                            "code" => "123",
                        ],
                        [
                            "id" => $count++,
                            "name" => "red",
                            "code" => "1234",
                        ],
                    ],
                ]
            ])


        ];
    }
}

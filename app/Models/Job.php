<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function find(int $id): array
    {
        $job = Arr::first(Job::all(), fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

    }

    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Developer',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Designer',
                'salary' => '$40,000',
            ],
            [
                'id' => '3',
                'title' => 'Project Manager',
                'salary' => '$60,000',
            ],
        ];
    }
}

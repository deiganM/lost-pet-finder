<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Inertia\Inertia;

// 'Pages' is the base folder

class IndexController extends Controller
{
    public function index() {
        return inertia('Index/Index',
            // To pass some data to Index.vue
            // Needs to be accepted as a prop in Index.vue
            [
                'message' => 'Hello from Laravel'
            ]
        );
    }

    public function show() {
        return inertia('Index/Show');
    }
}

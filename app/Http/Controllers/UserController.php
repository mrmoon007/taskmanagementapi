<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ResponseTrait;
    /**
     * Add a new pet to the store.
     *
     * @OA\Get(
     *     path="/api/user",
     *     tags={"user"},
     *     operationId="User",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     * )
     */
    public function createUser()
    {
        return $this->successResponse([]);
    }
}

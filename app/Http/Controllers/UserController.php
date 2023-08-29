<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ResponseTrait;
    /**
     * Get all users.
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
    public function index()
    {
        return $this->successResponse([]);
    }
}

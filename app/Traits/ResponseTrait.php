<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

Trait ResponseTrait {

    /**
     * ResponseSuccess
     *
     * Returns the success data and message if there is any error
     */
    public function successResponse(array|object $data, string $message = "Successful",  $status_code = JsonResponse::HTTP_OK): JsonResponse 
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null
        ], $status_code);
    }

    /**
     * ResponseError
     *
     * Returns the errors data if there is any error
     */
    public function errorResponse($errors, $message = 'Data is invalid', $status_code = JsonResponse::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors,
            'data' => []
        ], $status_code);
    }
}
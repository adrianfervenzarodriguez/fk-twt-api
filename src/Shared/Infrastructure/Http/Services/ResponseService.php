<?php

namespace Src\Shared\Infrastructure\Http\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ResponseService
{
    public static function success(array $data, int $statusCode = Response::HTTP_OK) : JsonResponse
    {
        return response()->json(['count' => count($data), 'data' => $data], $statusCode);
    }

    public static function error(string $message, int $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY) : JsonResponse
    {
        return response()->json(['message' => $message], $statusCode);
    }

}

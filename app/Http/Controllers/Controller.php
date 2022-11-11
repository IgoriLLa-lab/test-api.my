<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *  @OA\Info(
 *      title="Test API",
 *      version="1.0.0",
 *      description="API documentation for Returns Service App",
 *      @OA\Contact(
 *          email="crocusik@mail.ru"
 *      )
 *  ),
 *  @OA\Server(
 *      description="Returns App API",
 *      url="http://test-api.my/api/v1"
 *  ),
 *  @OA\PathItem(
 *      path="/"
 *  )
 * )
 */
class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

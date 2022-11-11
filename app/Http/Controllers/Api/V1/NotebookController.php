<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreNotebookRequest;
use App\Http\Requests\V1\UpdateNotebookRequest;
use App\Http\Resources\V1\NotebookCollection;
use App\Http\Resources\V1\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Response;

class NotebookController extends Controller
{

    /**
     * 1.1. GET /api/v1/notebook
     *
     * @OA\Get (
     *     path="/notebook",
     *     tags={"Notebook"},
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="The page number",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     * ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="fullName", type="string", example="Kolesnik Igor Leonidovic"),
     *              @OA\Property(property="companyName", type="string", example="Apple"),
     *              @OA\Property(property="telephoneNumber", type="string", example="89001980807"),
     *              @OA\Property(property="email", type="string", example="crocusik@mail.ru"),
     *              @OA\Property(property="dateOfBirth", type="string", example="1986-02-08"),
     *              @OA\Property(property="photo", type="string", example="/user/upload/file.jpg"),
     *         )
     *     )
     * )
     */
    public function index(): NotebookCollection
    {
        return new NotebookCollection(Notebook::query()->paginate(20));
    }


    /**
     * 1.2 POST /api/v1/notebook
     *
     * @OA\Post (
     *     path="/notebook",
     *     tags={"Notebook"},
     * @OA\Response(
     *      response="200",
     *      description="Everything is fine",
     *     ),
     * @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="#/components/schemas/NotebookRequestTest")
     *     )
     * )
     */
    public function store(StoreNotebookRequest $request)
    {
        new NotebookResource(Notebook::create($request->all()));

        return response('', 201);
    }

    /**
     * 1.3. GET /api/v1/notebook/<id>/
     *
     * @OA\Get (
     *     path="/notebook/{id}",
     *     tags={"Notebook"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The id employee",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     * ),
     *     @OA\Response(
     *         response=200,
     *         description="success"
     *     )
     * )
     */
    public function show(Notebook $notebook): NotebookResource
    {
        return new NotebookResource($notebook);
    }


    /**
     * 1.4 PUT /api/v1/notebook/<id>/
     *
     * @OA\Put (
     *     path="/notebook/{id}",
     *     tags={"Notebook"},
     * @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="The id employe update",
     *         required=false,
     * @OA\Schema(
     *         type="integer",
     *     )
     * ),
     * @OA\Response(
     *      response="200",
     *      description="Everything is fine",
     *     ),
     * @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="#/components/schemas/NotebookRequestTest")
     *     )
     * )
     */
    public function update(UpdateNotebookRequest $request, Notebook $notebook): Response
    {
        $notebook->update($request->all());

        return response('Entry updated', 204);
    }


    /**
     * 1.5. DELETE /api/v1/notebook/<id>/
     * @OA\Delete (
     *     path="/notebook/{id}",
     *     tags={"Notebook"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="delete Notebook success")
     *         )
     *     )
     * )
     */
    public function destroy(Notebook $notebook): Response
    {
        $notebook->delete();

        return response('Entry deleted', 204);
    }

}


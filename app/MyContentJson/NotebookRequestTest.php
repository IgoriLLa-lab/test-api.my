<?php

namespace App\MyContentJson;

/**
 * @OA\Schema(
 *     type="object",
 *     title="Test Notebook JSON request",
 *     description="This object is transferred in Swagger",
 * )
 */
class NotebookRequestTest
{
    /**
     * @OA\Property(
     *     title="full_name",
     *     description="surname name patronymic of the employee",
     *     example="Kolesnik Igor Leonidovic",
     * )
     *
     * @var string
     */
    public string $full_name;

    /**
     * @OA\Property(
     *     title="company_name",
     *     description="Company name",
     *     example="Apple",
     * )
     *
     * @var string
     */
    public string $company_name;

    /**
     * @OA\Property(
     *     title="telephone_number",
     *     description="Telephone number employee",
     *     example="+79001980807",
     * )
     *
     * @var string
     */
    public string $telephone_number;

    /**
     * @OA\Property(
     *     title="email",
     *     description="email employee",
     *     example="crocusikil@mail.ru",
     * )
     *
     * @var string
     */
    public string $email;

    /**
     * @OA\Property(
     *     title="date_of_birth",
     *     description="date of birth employee",
     *     example="1972-02-09",
     * )
     */
    public $date_of_birth;

    /**
     * @OA\Property(
     *     title="photo",
     *     description="dphoto employee",
     *     example="/upload/user_photo.jpg",
     * )
     *
     * @var string
     */
    public string $photo;

}

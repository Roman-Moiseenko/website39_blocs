<?php


use app\models\Request;

class RequestService
{
    /**
     * @var ContactService
     */
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function create(Request $form)
    {
        $this->contactService->sendRequest($form->name, $form->phone);
    }
}
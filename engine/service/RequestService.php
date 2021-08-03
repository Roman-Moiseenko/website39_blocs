<?php

namespace engine\service;
use app\models\Request;

class RequestService
{
    /**
     * @var ContactService
     */
    private $contactService;

    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    public function create(Request $form)
    {
        $this->contactService->sendRequest($form->name, $form->phone);
    }
}
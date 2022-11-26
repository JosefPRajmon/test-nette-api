<?php
declare(strict_types=1);

namespace App\Model;

use Nette\SmartObject;

class HelloWorldApiPresenter implements IPresenter
{
    public function run()
    {
        $name = "test";// $request->getParameter('name');
        return new JsonResponse(['message' => "Hello $name"]);
    }
}
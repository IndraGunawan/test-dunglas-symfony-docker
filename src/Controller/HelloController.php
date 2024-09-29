<?php

namespace App\Controller;

use App\Services\Counter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    public function __construct(
        private Counter $counter,
    )
    {

    }
    #[Route('hello', name: 'index')]
    public function index() {
        $this->counter->increase(3);

        return $this->json(['counter' => $this->counter->getCounter()]);
    }
}

<?php

namespace TechCorp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
    public function homepageAction()
    {
        //return new Response("<html><head></head><body>Hello World!</body></html>");
		$name = "World";
		return $this->render(
		"TechCorpFrontBundle:Static:homepage.html.twig",
		array('name' => $name)
		);
    }
	
	public function AboutAction()
	{
		return $this->render(
		"TechCorpFrontBundle:Static:about.html.twig"
		);
	}
}

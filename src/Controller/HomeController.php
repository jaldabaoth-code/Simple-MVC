<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig') . $this->showProducts();
    }

    public function showProducts()
    {
        $products = ['product1', 'product2', 'product3', 'product4', 'product5'];
        return $this->twig->render('products.html.twig', ['products' => $products]);
    }
}

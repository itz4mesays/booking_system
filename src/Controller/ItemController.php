<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends AbstractController
{
    /**
     * @Route("/item/add-brand")
     */
    public function AddBrand(): Response
    {
        return $this->render('item/add-brand.html.twig');
    }

    /**
     * @Route("/item/view-items")
     */
    public function ViewItems(): Response
    {
        return new Response(
            '<html><body>View Items</body></html>'
        );
    }

    /**
     * @Route("/item/book-items")
     */
    public function BookItems(): Response
    {
        return new Response(
            '<html><body>Book Items</body></html>'
        );
    }

    /**
     * @Route("/item/release-items")
     */
    public function ReleaseItems(): Response
    {
        return new Response(
            '<html><body>Release Items</body></html>'
        );
    }

    /**
     * @Route("/item/see-availability")
     */
    public function SeeAvailability(): Response
    {
        return new Response(
            '<html><body>See Availability</body></html>'
        );
    }
}

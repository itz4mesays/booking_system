<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController
{
    /**
     * @Route("/item/add-brand")
     */
    public function AddBrand(): Response
    {
        return new Response(
            '<html><body>Add Brand</body></html>'
        ); 
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

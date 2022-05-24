<?php

namespace App\Controllers;

use App\Services\Image\ImageService;
use App\Services\Image\ImageServiceInterface;
use App\Models\Image;

/**
 * The controller that displays home views.
 * 
 * @author PreussenKaiser
 * @uses ImageServiceInterface To get images for the carousel.
 */
final class HomeController extends Controller
{
    /**
     * Gets images for the home page.
     * @var ImageServiceInterface
     */
    private readonly ImageServiceInterface $image_service;

    /**
     * Initializes a new instance of the HomeController controller.
     */
    public function __construct()
    {
        parent::__construct('Home');

        $this->image_service = new ImageService;
    }

    /**
     * Renders the index view.
     */
    protected function indexAction()
    {
        $slides = $this->buildCarousel(
            $this->image_service->getImages('carousel')
        );

        $params = compact('slides');
        $this->view->render('Home/index', $params);
    }

    /**
     * Displays the about view.
     */
    protected function aboutAction(): void
    {
        $this->view->render("$this->view_folder/about");
    }

    /**
     * Displays the services view.
     */
    protected function servicesAction(): void
    {
        $this->view->render("$this->view_folder/services");
    }

    /**
     * Displays the portfolio view.
     */
    protected function portfolioAction(): void
    {
        $slides = $this->buildCarousel(
            $this->image_service->getImages('carousel')
        );

        $params = compact('slides');
        $this->view->render("$this->view_folder/portfolio", $params);
    }

    /**
     * Displays the contact view.
     */
    protected function contactAction(): void
    {
        $this->view->render("$this->view_folder/contact");
    }

    /**
     * Builds carousel slides.
     * 
     * @param iterable $images The images to use.
     * @return string The built carousel slides as HTML.
     */
    private function buildCarousel(iterable $images): string
    {
        $result = '';

        foreach ($images as $img) {
            if ($img instanceof Image) {
                $modifier = array_search($img, (array)$images) == 0 
                    ? 'active'
                    : '';

                $path = $img->getPath();
    
                $result .= "
                            <div class='carousel-item $modifier'>
                                <img src='$path' class='d-block w-100'
                                    alt='...'>
                            </div>
                           ";
            }
        }

        return $result;
    }
}

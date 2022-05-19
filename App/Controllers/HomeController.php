<?php

namespace App\Controllers;

/**
 * The controller that displays home views.
 * 
 * @author PreussenKaiser
 */
final class HomeController extends Controller
{
    /**
     * Initializes a new instance of the HomeController controller.
     */
    public function __construct()
    {
        parent::__construct('Home');
    }

    /**
     * Renders the index view.
     */
    protected function indexAction()
    {
        $slides = $this->buildCarousel();

        $params = compact('slides');
        $this->view->render('Home/index', $params);
    }

    /**
     * Builds carousel slides.
     * 
     * @return string The built carousel slides as HTML.
     */
    private function buildCarousel(): string
    {
        $result = '';
        $path = 'Public/resources/img/carousel/home-page-920x404-slide';

        $i = 0;
        $continue = true;
        while ($continue) {
            $img = $path . $i . '.jpg';

            if (file_exists(ROOT . $img)) {
                $modifier = $i == 0 ? 'active' : '';

                $result .= "
                            <div class='carousel-item $modifier'>
                                <img src='$img' class='d-block w-100'
                                    alt='...'>
                            </div>
                           ";
                $i++;
            }
            else {
                $continue = false;
            }
        }

        return $result;
    }
}

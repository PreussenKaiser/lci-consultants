<?php

namespace App\Controllers;

use App\Models\Provided;
use Core\DataStores\ProvidedDataStore;

/**
 * The controller that renders service views.
 * Called when the url's controller is 'service'
 * 
 * @author PreussenKaiser
 */
final class ServiceController extends Controller
{
    /**
     * The services provided by LCI-Consultants
     * @var iterable
     */
    private iterable $services;

    /**
     * Initializes a new instance of the ServiceController controller.
     */
    public function __construct()
    {
        parent::__construct("Service");

        $datastore = new ProvidedDataStore;
        $this->services = $datastore->getItems();
    }

    /**
     * Renders a service to the service page.
     * 
     * @param string $service The service to render.
     */
    protected function serviceAction(string $service): void
    {
        $service = $this->findService(
            $this->determineService($service)
        );

        $title = $service->getTitle();
        $details = $service->getDetails();
        $description = $service->getDescription();
        $images = $this->parseImages(
            $service->getImages()
        );

        $params = compact(
            'title', 'details',
            'description', 'images'
        );
        $this->view->render("$this->view_folder/service_view", $params);
    }

    /**
     * Gets a service title from the service url request.
     * 
     * @param string $service The service to search for.
     * @return string The title of the service.
     */
    private function determineService(string $service): string
    {
        return match ($service) {
            'projectManagement' => 'Project Management / Owners Representative',
            'constructionManagement' => 'Construction Management',
            'constructionMonitoring' => 'Construction Monitoring',
            'buildingAssessment' => 'Building Assessment and Capital Reserve Analysis',
            'forensicInvestigation' => 'Forensic Investigation and Litigation Suppor',
            'buildingEnvelope' => 'Building Envelope Design',
            'moistureManagement' => 'Moisture Managemen',
            'maintenanceManuals' => 'Building Maintenance Manuals',
            'capitalNeedsAssessment' => 'Capital Needs Assessment',
            _ => ''
        };
    }

    /**
     * Finds a service by a search term.
     * 
     * @param string $search The service to search for.
     * @return Provided The found service.
     */
    private function findService(string $search): Provided
    {
        for ($i = 0; $i < count($this->services); $i++) {
            $service = $this->services[$i];

            if ($service instanceof Provided) {
                if ($service->getTitle() == $search) {
                    return $service;
                }
            }
        }

        return new Provided(
            'There was a problem rendering the service',
            '', '', []
        );
    }

    /**
     * Converts an iterable of images into a list.
     * 
     * @param iterable $images The images to make a list from.
     * @return string The images as an HTML list.
     */
    private function parseImages(iterable $images): string
    {
        return '';
    }
}

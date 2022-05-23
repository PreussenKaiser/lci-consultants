<?php

namespace Core\DataStores;

use App\Models\Provided;
use App\Services\Image\ImageService;
use App\Services\Image\ImageServiceInterface;

/**
 * The data store for provided services.
 * 
 * @author PreussenKaiser
 */
final class ProvidedDataStore extends DataStore
{
    /**
     * The service to get images for provided services with.
     */
    private readonly ImageServiceInterface $image_service;

    /**
     * Initializes a new instance of the ProvidedDataStore data store.
     */
    public function __construct()
    {
        $this->image_service = new ImageService;

        parent::__construct($this->init());
    }

    /**
     * Initializes the provided service data store.
     * 
     * @return iterable The services provided by LCI-Consultants.
     */
    protected function init(): iterable
    {
        return [
            new Provided(
                'Project Management / Owners Representative',
                '<p>
                    LCI’s team has over 25 years’ experience at development management, mostly in multi-family residential and mixed use projects. 
                    We do it all…from site identification to acquisition, zoning and entitlements, creating project pro-formas, implementing a selection process for designers, contractors, and consultants, creating initial project development schedules, establishing cost and accounting procedures, managing design evaluation, managing on-site construction and activities and project closeout. 
                    As an extension of your team, we’ll manage the day-to-day work while offering strategic professional advice.
                    <strong>Bottom line: we minimize risk and maximize returns.</strong>
                 </p>',
                '<p>
                    Successfully conceiving and implementing complex real estate projects requires the coordinated efforts of many professionals. 
                    For organizations lacking the internal resources to handle this complex process, a development or project manager is essential. 
                    LCI has the skills, proficiency, and capability to direct the development or design and construction process on behalf of the client.
                 </p>
                
                 <p>
                   As your representative, our approach includes minimizing design and construction costs, project delivery time, and facility life cycle costs while maximizing project flexibility and value through strong communication and process development. 
                    Our talented staff can augment your existing staff or team to work on your behalf when no staff is available. 
                    We collaborate with you to tackle the day-to-day responsibilities, while minding the bigger picture.
                 </p>

                 <p>
                    LCI’s involvement can begin as early as concept definition and end well after move-in. 
                    We help define the project’s goals; manage site identification, acquisition, and approval, while working with government agencies, community groups, and other stakeholders; 
                    help select, contract with, and oversee the entire project team (including architects, engineers, technical consultants, construction contractors, lenders, legal counsel, and others), as well as coordinate with the client’s in-house staff. 
                    We excel at both key aspects of the process: construction in the field, and the business end of construction, including contracts and accounting. 
                    We manage the team as it produces its collective deliverables, keeping clients informed through detailed reporting and regular meetings.
                 </p>
                  
                 <h2 class="text-primary">
                    Key Benefits:
                 </h2>
                 
                 <ul>
                    <li>
                        Independent and impartial review of design professionals and contractors
                    </li>
                    <li>
                        Utilize highly experienced professionals that you may not be able to hire as employees
                    </li>
                    <li>
                        Utilize external experience for Projects to enhance in-house technical knowledge
                    </li>
                    <li>
                        Reduce employee costs for major Projects by use of a consulting firm for a fixed-term contract
                    </li>
                 </ul>',
                 $this->image_service->getImages('project_management')
            )
        ];
    }
}

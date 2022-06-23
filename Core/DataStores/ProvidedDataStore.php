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
     * @var ImageServiceInterface
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
                  
                 <h2 class="h5 text-primary">
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
            ),
            new Provided(
                'Construction Management',
                '<p>
                    LCI has managed many construction projects with different levels of complexity, but all involving tight budgets, difficult deadlines and complex scope issues.
                    We use our insight on behalf of our clients to pro-actively reduce factors that result in design errors, delays and budget overruns.
                </p>',
                '<p>
                    Our experts have the foresight to proactively identify challenges and employ scheduling, design and cost containment strategies as a means to reduce risk to our clients.
                    Pre-planning is the basis of our management approach. Sufficient planning will allow the on-site construction work to go smoothly with costs and schedules being more predictable.
                    Attention to detail and plan review reduce the risks to our clients.
                </p>
                <p>
                    Depending on your specific needs and requirements, LCI provides effective project leadership and management in the following service areas:
                </p>
                <p>
                    - Bid Evaluation
                    <br>
                    - Constructability Review
                    <br>
                    - Contract Negotiation and Review
                    <br>
                    - Project Schedule Review
                    <br>
                    - Consultant Coordination
                    <br>
                    - Change Order Management
                    <br>
                    - Cost Estimating
                    <br>
                    - Cost Containment
                    <br>
                    - Schedule Management
                    <br>
                    - Value Engineering
                    <br>
                    - Dispute Avoidance and Resolution
                    <br>
                    - Inspection and Quality Assurance
                </p>
                <h2 class="h5 text-primary">
                    Key Benefits:
                </h2>
                <p><b>
                    - Independent and impartial review of design professionals and contractors
                    <br>
                    - Utilize highly experienced professionals that you may not be able to hire as employees
                    <br>
                    - Utilize external experience for Projects to enhance in-house technical knowledge
                    <br>
                    - Reduce employee costs for major Projects by use of a consulting firm for a fixed-term contract
                </b></p>
                <p>
                    <b>PROJECT SCHEDULE REVIEW</b>
                    <br>
                    Our schedule management and project control services developing, analyzing, updating and monitoring project schedules and other project reporting procedures. 
                    As with all of LCI’s services, we customize our scheduling and project controls services to our clients’ specific needs.
                </p>
                <p>
                    LCI utilizes standard industry scheduling methods and software to develop, monitor, and report the progression of construction projects such that our clients are informed quickly and accurately of project events, potential problems, and corrective actions.
                </p>
                <p>
                    <b>CHANGE ORDER MANAGEMENT</b>
                    <br>
                    Resolving change order situations early minimizes your costs and avoids contractor and project schedule disruptions.
                    LCI has extensive experience developing and managing the change order process for owners, contractors, and subcontractors on multi-million dollar projects.
                </p>
                <p>
                    <b>CONSTRUCTABILITY REVIEW</b>
                    <br>
                    LCI is often asked to assess the accuracy and completeness of construction plans and specifications and to validate schedules and budgets.
                    A constructability review looks for document inconsistencies and completeness, potential liability, coordination issues, and missed details, among others.
                    It also identifies and eliminates ambiguities and contract language that contribute to unnecessary construction change orders, disputes, and adversarial relationships between the contractor, owner, designer, and project stakeholders.
                </p>
                <p>
                    <b>COST ESTIMATING</b>
                    <br>
                    LCI Consultants specializes in construction cost estimating.
                    We canoraccurate pricing
                </p>
                <p>
                    LCI is equipped to prepare estimates and/or verify proposed construction costs at various stages throughout the construction process.]
                    By identifying and analyzing the project’s scope, time, cost, quality, and performance, LCI develops an accurate assessment of how the construction process is unfolding over the course of its duration.
                </p>
                <p>
                    <b>VALUE ENGINEERING</b>
                    <br>
                    Whether you seek value-added construction estimates for your current project, you need assistance selecting between multiple bid packages or you simply desire validation of a selected bid before entering into contract, LCI has the experience to help you make the right decision.
                </p>
                <p>
                    Developing accurate construction bid estimates requires a comprehensive understanding of project costs and factors that impact project costs, along with knowledge of the estimating process.
                    In the end, our estimating team addresses three primary concerns:
                </p>
                <p>
                    - How many? (quantities)
                    <br>
                    - How much? (pricing)
                    <br>
                    - How long? (productivity)
                </p>
                <p>
                    With our methodical, yet practical approach LCI’s construction bid estimates include quantity take-offs to answer ‘how many’, market-factored pricing to answer ‘how much’, and scheduling services to answer ‘how long’.
                    In addition, our estimating expertise qualifies us to evaluate and analyze submitted bids for possible errors or shortcomings.
                </p>
                <p>
                    LCI’s services that may assist in the development of your value engineering efforts include:
                </p>
                <p>
                    - Pre-construction planning and coordination
                    <br>
                    - Construction cost management
                    <br>
                    - Construction cost estimating
                    <br>
                    - Quantity take-offs
                    <br>
                    - Material escalation analysis
                    <br>
                    - Risk management techniques
                    <br>
                    - Risk management assessments
                </p>
                <p>
                    Whether you are an owner, program manager, contractor, architect or construction manager, LCI is equipped to supplement your team’s expertise with additional insight to ensure your project’s success.
                    Regardless of the stage of your project, LCI’s value engineering services can assist with conceptual budgets, preliminary estimates, quantity take-offs, bid estimates or contract pricing.
                </p>
                <p>
                    <b>DISPUTE AVOIDANCE & RESOLUTION</b>
                    <br>
                    Construction claims are both costly and time consuming for your organization and your clients.
                    LCI’s extensive knowledge with each phase of the construction project lifecycle allows us to provide insight prior to commencement and during the construction of your project, which will help you avoid issues down the road.
                </p>
                <p>
                    LCI can assist with a variety of activities that will assist in avoiding costly disputes including:
                </p>
                <p>
                    - Contract Reviews
                    <br>
                    - Pre-project Planning
                    <br>
                    - Plan Reviews
                    <br>
                    - Cost and Schedule Validation and Monitoring
                    <br>
                    - Constructability Reviews
                </p>
                <p>
                    Whether you are an owner, program manager, contractor, architect, construction manager or subcontractor, LCI’s consultants have the knowledge and know how to help you avoid disputes and mitigate claims.
                </p>
                <p>
                    <b>INSPECTION AND QUALITY ASSURANCE</b>
                    <br>
                    LCI provides independent quality assurance and implements procedures, conducts audits of on-going activities, document review, construction quality control management, field inspection and all quality documentation.
                    We provide surveillance of contractor’s programs and completed work. Our team routinely interfaces with owners, owner representatives, general contractors, subcontractors, environmental teams, and safety and traffic control personnel.
                </p>
                <p>
                    Elements of Quality Assurance program include:
                </p>
                <p>
                    - Design  Quality Procedures
                    <br>
                    - Construction Quality Procedures
                    <br>
                    - Forms/Checklists
                    <br>
                    - Document Control Plan
                    <br>
                    - Construction Inspection and Testing Quality Assurance Plan
                    <br>
                    - Construction Quality Training Manual
                    <br>
                    - Laboratory Quality System Manual
                </p>',
                $this->image_service->getImages('construction_management')
            )
        ];
    }
}

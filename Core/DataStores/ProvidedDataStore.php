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
            ),
            new Provided(
                'Construction Monitoring',
                '<b>Before Construction Starts and During</b>
                <br>
                For equity or debt investors in new development projects, discovering and resolving potential problems, errors or omissions that could result in cost overruns, project delays or potential litigation is a high priority.
                LCI’s Preconstruction Services are designed to provide our clients with the information necessary to make a well-informed decision regarding the potential risks of a project LCI will prepare a report which includes a comprehensive review and analysis of construction project information, documentation and budget, which outlines various factors that may impact construction cost and schedule.
                The report consists of the Document Review and the Cost Review of the contractors proposed budget.',
                '<h2 class="h5 text-primary">
                    Document Review
                </h2>
                <p>
                    The document review includes an independent evaluation of the plans and specifications for completeness, appropriateness and accuracy.
                    Documents to be reviewed can consist of the following:
                </p>
                <p>
                    - Construction contract(s)
                    <br>
                    - ALTA Survey
                    <br>
                    - Geotechnical reports
                    <br>
                    - Civil engineering drawings and specifications
                    <br>
                    - Structural engineering drawings and specifications
                    <br>
                    - Architectural drawings and specifications
                    <br>
                    - MEP drawings and specifications
                    <br>
                    - Project schedules
                    <br>
                    - Agreements (between borrower/general contractor, borrower/architect or engineer)
                    <br>
                    - Verify conformance between contract documents and the construction loan agreement
                    <br>
                    - Permits
                    <br>
                    - Will-serve letters for utilities including water, sanitary sewer, gas, electric, telephone
                    <br>
                    - Copies of any public works agreements for required on- or off-site work
                </p>
                <h2 class="h5 text-primary">
                    Cost Review
                </h2>
                <p>
                    The cost review includes an evaluation of the proposed budget with an in-depth analysis of the construction budget and contingency to complete the proposed development within the project schedule timeline.
                    Documents to be reviewed include the following:
                </p>
                <p>
                    - Construction budget
                    <br>
                    - Development budget
                    <br>
                    - Loan hard cost budget
                    <br>
                    - Comparison of the project budget to those of other similar projects
                </p>
                <h2 class="h5 text-primary">
                    Construction Process Monitoring
                </h2>
                <p>
                    Construction project schedule delays, unapproved materials substitutions, and cost overruns can result in a delayed return on investment, a potentially less valuable/desirable asset, and budgetary shortfalls which may require the outlay of significant additional capital.
                    LCI’s construction experts perform periodic construction progress monitoring visits to ensure that the project is on schedule, in conformance with approved plans/specifications, the funding disbursement requests are appropriate for work completed in place, and that the project budget includes sufficient funds to complete.
                    <br>
                    LCI provides an unbiased assessment of the work in progress for both Lenders and Owners (independent of the general contractor and design professionals) and makes recommendations.
                    These construction loan monitoring services can be tailored to meet the specific needs and requirements of each client, and can be provided on projects at the preconstruction phase or those currently under construction.
                    LCI can provide these services on a nationwide basis.
                </p>
                <h2 class="h5 text-primary">
                    During the process, LCI can perform the following:
                </h2>
                <p>
                    - Periodic site visits to document/evaluate the quality, quantity, and status of work completed
                    <br>
                    - Verify that work in place conforms with contractor’s application for payment
                    <br>
                    - Confirm the project status conforms with the construction schedule
                    <br>
                    - Confirm that work in place conforms with approved plans and specifications and no substantive changes are made without client knowledge
                    <br>
                    - Review and evaluate all change orders
                    <br>
                    - Review available lien waivers
                    <br>
                    - Confirm and document the inventory of stored materials on or off site
                    <br>
                    - Assess the adequacy of funds to complete the project
                    <br>
                    - Review and record special inspection reports
                    <br>
                    - Provide a client-specific written report with photographic documentation, a summary of findings, and recommendations for the disbursement request
                </p>',
                $this->image_service->getImages('construction_monitoring')
            ),
            new Provided(
                'Building Assessment and Capital Reserve Analysis',
                '<p>
                    LCI Consultants provides a thorough analysis of a buildings condition, with an emphasis on the building envelope, allowing our clients to make informed decisions regarding building investment viability.
                </p>',
                '<h2 class="h5 text-primary">
                    Existing Buildings
                </h2>
                <p>
                    With our extensive experience in building forensics and with establishing maintenance programs, LCI provides a reliable analysis of an existing building’s general architectural systems while considering both current and future repair and maintenance costs.
                    This is an important factor for our clients when they are considering an investment in real estate.
                    The assessments provide a comprehensive survey of the project that identifies the current status of the buildings systems and provides information on the useful remaining life of building systems, identifies and prioritizes major maintenance deficiencies, and provides cost estimates to repair or replace deficiencies.
                </p>
                <p>
                    This information allows our clients to forecast funding requirements for capital facilities planning and establishes a baseline for setting priorities for the maintenance, repair, enhancement of and replacement of the building systems.
                </p>
                <p>
                    We conduct a general review of the project and available drawings, specifications and correspondence.
                </p>
                <p>
                    We prepare a narrative report of findings along with a list of questions, comment, deficiencies, inconsistencies, and/or concerns resulting from the review.
                </p>
                <p>
                    Provide recommendations for further forensic investigation if necessary.
                </p>
                <h2 class="h5 text-primary">
                    Under Construction
                </h2>
                <p>
                    Many of our clients consider making an investment in a project that is under construction.
                    LCI provides design and document review for these types of projects, with an emphasis on the building envelope.
                    Our extensive backgrounds in building forensics and maintenance allow for a solid analytical review of the building as it is constructed.
                    Our review of the design professionals and the contractor are independent and impartial.
                </p>
                <p>
                    We conduct a general review of the construction site and available drawings, specifications and correspondence for compliance with generally accepted industry standards and accepted construction practices.
                </p>
                <p>
                    We prepare a narrative report of findings along with a list of questions, comment, deficiencies, inconsistencies, and/or concerns resulting from the review.
                    <br>
                    Provide opinion regarding potential design and construction coordination issues. This review puts an emphasis on the envelope of the building.
                <p>
                <p>
                    We address the suitability of building materials to be used for new construction.
                </p>
                <p>
                    Provide follow up visits and reports as applicable, conduct a general review of any NEW and available updated/final reports, drawings, shop drawings, and specifications for compliance with design intent
                </p>',
                $this->image_service->getImages('building_assessment')
            ),
            new Provided(
                'Forensic Investigation and Litigation Support',
                '<p>
                    In order to determine the source of a building issue, it’s important to use an experienced team of construction experts.
                    Looking at building problems, finding the cause, and providing a solution is what we do.
                    When construction projects are not properly designed and managed, there are many problems that can occur.
                    Our team of experts has been in involved in countless building envelope studies, depositions and court appearances which bring a unique and extensive base of knowledge to any legal team.
                </p>',
                '<h2 class="h5 text-primary">
                    Forensic Investigation Process
                </h2>
                <ol>
                    <li class="mb-5">
                        Non-invasive Observations
                        <br>
                        <div class="ms-3">
                            - Review of Construction Documents
                            <br>
                            - Interview with Owners, Property Managers, Occupants and previous Consultants and Contractors
                            <br>
                            - Visual review
                            <br>
                            - Moisture meter testing
                            <br>
                            - Research
                            <br>
                            - Infrared thermography
                            <br>
                            - Determine areas for intrusive investigations
                        </div>
                    </li>
                    <li class="mb-5">
                        Invasive (Destructive) Observation
                        <br>
                        <div class="ms-3">
                            - Solicit insured and bonded Contractors for intrusive demolition and repair
                            <br>
                            - Remove the layers of the buildings envelope, one layer at a time, to understand what is occurring underneath.
                            Once an area has been “opened” we can observe the damage, measure the prevalence of the condition and determine what defects may be present.
                        </div>
                    </li>
                    <li class="mb-5">
                        Report with Recommendations
                        <br>
                        <div class="ms-3">
                            - Emphasize life-safety and code compliance issues
                            <br>
                            - Provide clear, concise and comprehensive understanding of the building issue
                        </div>
                    </li>
                </ol>',
                $this->image_service->getImages('forensic_investigation')
            ),
            new Provided(
                'Building Envelope Design',
                '<p>
                    LCI sees the details of the building envelope is a major factor to the design of a building.
                    Without proper protection from the forces of nature, the investment in a building is not fully realized.
                    With our extensive experience in forensic investigation and litigation LCI has had the opportunity to learn from the mistakes of others.
                <p>',
                '<p>
                    The management and oversight of Building Envelope Design and installation is a specialty of LCI Consultants. Our experience in building forensics and defect litigation provide us with an informed perspective that we apply to our projects. Whether the project is new from the ground up or a building envelope improvement, our extensive background influences our design recommendations.
                </p>
                <p>
                    With high construction costs of today’s economy, it is imperative to get it right the first time.
                    It is very expensive to go back and repair building defects.
                    The building envelope is one of the most important fundamental components of the architectural design and it exists for aesthetic reasons and more importantly to protect the systems within from the elements outside.
                    If the building envelope is not weather-tight, it is only a matter of time before damage will occur to the systems of the building.
                </p>
                <p>
                    LCI Consultants has over twenty-five years of experience in the Pacific Northwest.
                    Due to the climate in this region of the country, as well as the many changes in the roofing and waterproofing industry, we are dedicated to providing our clients with the most up to date tools and data needed to make intelligent choices regarding roofing and waterproofing a building.
                </p>',
                $this->image_service->getImages('building_envelope')
            ),
            new Provided(
                'Moisture Management',
                '<p>
                    LCI offers expert services in building moisture management.
                    This service includes visual observations along with inspections using state-of-the-art technology performed by certified themographers.
                    Any areas where moisture exists are identified allowing the owner/contractor to remedy the problem(s) prior to installing finishes in the building.
                    This service also includes follow up site inspections and certifications.
                </p>',
                '<p>
                    Water damage is a common and potentially serious threat to the health and safety of your building occupants.
                    It can also be an extremely expensive problem to fix in a fully constructed occupied building.
                    In order to mitigate the risks associated with water intrusion LCI Consultants offers the following comprehensive scope of services during the course of construction.
                </p>
                <div class="ms-5">
                    <p>
                        <b>Pre-Work Meeting</b>
                        <br>
                        An initial project meeting with the client’s onsite project personnel and subcontractor leads to explain the program of services requested for this specific project.
                        Details of our scopes of work will be defined and points of contact will be identified.
                    </p>
                    <p>
                        <b>Pre-Drywall Inspection</b>
                        <br>
                        A comprehensive walk-through inspection during the construction process performed immediately preceding drywall installation.
                        It is designed to provide a date stamp regarding rough-in and framing conditions at this phase of construction specifically identifying issues conducive to moisture intrusion and air infiltration prior to cover-up.
                        The Pre-Drywall Inspection cannot be used as a “stand-alone” inspection and must be used in conjunction with the Certification Inspection.
                    </p>
                    <p>
                        <b>Trim IR Inspection</b>
                        <br>
                        The Trim Inspection provides an interim look at the unit midway through construction and is designed to identify moisture related issues that may have occurred since the Pre-Drywall inspection.
                        By utilizing infrared thermal imaging as well as other current technologies, documentation and validation of present conditions are provided.
                        The Trim IR Inspection cannot be used as a “stand-alone” inspection and must be used in conjunction with the Certification Inspection.
                    </p>
                    <p>
                        <b>Certification IR Inspection</b>
                        <br>
                        This visual inspection is performed four to seven days before closing and utilizes technology such as moisture meters, boroscopes, and infrared thermal imaging to detect both visual and hidden sources of moisture intrusion and/or organic growth.
                        Upon successful completion of the certification inspection the unit will be “Certified” and the Letter of Assurance will be issued.
                        An Executive Summary will be delivered to the Client that includes copies of all findings reports
                    </p>
                    <p>
                        <b>Follow-up Inspection</b>
                        <br>
                        This follow-up inspection is required as a result of a Trim or Certification Inspection where failure items are identified.
                        During the follow-up inspection the analyst will confirm each designated failure item(s) has(have) been corrected and a subsequent Passed inspection findings report is issued.
                    </p>
                    <p>
                        <b>Executive Summary</b>
                        <br>
                        A hard-copy, comprehensive summary of all work performed during the construction process.
                        Summary includes a description of the project, copies of findings reports for all inspection visits, and copies of all certification letters.
                        Management reports are included that list specific findings identified during the process and comparisons for each trade are provided.
                    </p>
                </div>
                <h2 class="h5 text-primary">
                    Moisture Mapping and Repair
                </h2>
                <p>
                    If there is evidence of moisture in your building, LCI will evaluate the extent and degree of water damage by performing moisture testing and mapping.
                    We do this by taking moisture measurements at the suspect source (leak site) and at incremental spaces surrounding the source.
                    We document our field test results on a floor plan which gives us an excellent visual of the target area and beyond.
                    In addition, LCI can work with the design professionals and general contractor to determine the source of the water intrusion and manage the repair process.
                </p>
                <h2 class="h5 text-primary">
                    Mold Inspection
                </h2>
                <p>
                    If mold is evident, LCI has worked with many qualified contractors and will manage the remediation process.
                    Equally important is to find the source of the moisture leading to the mold growth.
                    LCI’s team will use their experience with building envelope to identify the source of the water.
                    Often the source is a result of a construction defect or deferred maintenance.
                    In either case, LCI will work to remediate the mold and repair the condition that led to its growth.
                </p>',
                $this->image_service->getImages('moisture_management')
            ),
            new Provided(
                'Building Maintenance Manuals',
                '<p>
                    An investment into a maintenance program can help you avoid much larger expenses in the future.
                    The simplest of maintenance items such as clearing drains, caulking and painting, and cleaning gutters are often forgotten or neglected resulting in a major and much more expensive repair
                </p>
                <p>
                    LCI provides a unique service where we’ll research an entire property, identify all maintenance issues, and provide a descriptive manual and schedule for when these items need to be addressed throughout the year.
                    In addition, a matrix will be provided to your maintenance team as an easy to follow system to integrate into their daily workflow.
                    If followed, it’s a system that will extend the useful life of the building and have a positive effect on your bottom line.
                </p>',
                '<h2 class="h5 text-primary">
                    Why are building maintenance manuals necessary?
                </h2>
                <ul>
                    <li class="my-3">
                        An association or property manager has an obligation to maintain common and limited common area elements.
                        Without a reliable system that shows the building maintenance team when components need to be maintained these components may not get the regular attention that is needed to keep the property maintained.
                    </li>
                    <li class="my-3">
                        Owners can extend the useful life of their buildings if a good preventative maintenance plan is in place.
                        Because preventative maintenance plans help prevent the need for premature replacement of building components the homeowners will not be disrupted with major repairs or replacement more often than necessary.
                    </li>
                    <li class="my-3">
                        A good Preventative maintenance plan will reduce the need for unnecessary expenses and special assessments if the components are maintained and not allowed to fail prematurely.
                        The owners can be thrown into a very difficult position if it has to pay assessments for replacement of building components.
                    </li>
                    <li class="my-3">
                        Buildings will remain safe and provide the service they are intended to provide if maintained properly.
                    </li>
                </ul>
                <h2 class="h5 text-primary">
                    Tracking and Management Tool
                </h2>
                <p>
                    The LCI maintenance manuals are documents that can be used as a communication and tracking tool to make sure that tasks are getting done.
                    The maintenance manual is used in conjunction with the operations and project closeout manuals that were supplied at initial construction.
                    These manuals tell the team when maintenance procedures need to be done, what things to look for and will provide a sign off matrix to keep track of what has been done.
                    With good communication, clearly defined task assignments and written expectations building maintenance status can be reviewed with our maintenance schedule in minutes.
                    The property manager, and owners assigned to make sure maintenance is implemented can track the progress by reviewing the matrix sign off sheet.
                </p>
                <h2 class="h5 text-primary">
                    What is included in the maintenance manual?
                </h2>
                <ul>
                    <li>
                        How to assemble a maintenance team
                    </li>
                    <li>
                        Maintenance process flow diagram
                    </li>
                    <li>
                        Component inventory
                    </li>
                    <li>
                        Maintenance schedule matrix
                    </li>
                    <li>
                        Optional DVD video training
                    </li>
                </ul>',
                $this->image_service->getImages('maintenance_manuals')
            ),
            new Provided(
                'Capital Needs Assessment',
                '<p>
                    A Capital Needs Assessment (CNA) is a budgeting tool to ensure long-term viability of a project.
                    Often LCI combines this service with their Building Maintenance Manuals, because without proper maintenance, building components will deteriorate and/or fail at a much quick rate than expected.
                </p>
                <p>
                    The financial models are prepared in a spreadsheet format (EXCEL) allowing clients to manipulate and modify the assumptions and actual costs.
                    This is a budgeting tool which can be modified from year to year.
                </p>',
                '<p>
                    LCI’s approach to a Capital Needs Assessment (CNA) project includes the following key considerations:
                </p>
                <ol>
                    <li class="my-3">
                        Perform a building assessment, employing all necessary sub-consultants to ensure a thorough review of all major building components.
                    </li>
                    <li class="my-3">
                        Prioritize the deficiencies and deferred maintenance by ranking ranking them into one of the following 5 categories:

                        <ul class="my-3">
                            <li>
                                Category 1: Immediate life safety issue
                            </li>
                            <li>
                                Category 2: Potential for significant further damage if left unattended
                            </li>
                            <li>
                                Category 3: Conditions requiring one time upgrades which are not immediate threats and once resolved should require normal maintenance
                            </li>
                            <li>
                                Category 4: Deficiencies in regular maintenance
                            </li>
                            <li>
                                Category 5: End of useful life replacement
                            </li>
                        </ul>
                    </li>
                    <li class="my-3">
                        Provide reports detailing the recommendations for correction to all deficiencies and/or identifying areas where further investigation is warranted
                    </li>
                    <li class="my-3">
                        Provide estimated costs for repair
                    </li>
                    <li class="my-3">
                        Included in the CNA is a forecast of the projected capital costs and shortfalls based upon the present funding and budgetary assumptions.
                    </li>
                </ol>',
                $this->image_service->getImages('capital_needs')
            )
        ];
    }
}

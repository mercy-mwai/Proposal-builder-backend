<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style type="text/css">
        /* Completely modernized CSS with semantic design tokens and professional styling */

        /* Import modern fonts */
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700&display=swap');

        /* CSS Variables for consistent theming */
        :root {
            --background: #ffffff;
            --foreground: #1f2937;
            --card: #f1f5f9;
            --card-foreground: #374151;
            --primary: #1f2937;
            --primary-foreground: #ffffff;
            --secondary: #f1f5f9;
            --secondary-foreground: #6b7280;
            --muted: #f1f5f9;
            --muted-foreground: #6b7280;
            --accent: #8b5cf6;
            --accent-foreground: #ffffff;
            --border: #d1d5db;
            --radius: 0.5rem;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--foreground);
            background-color: var(--background);
            font-size: 16px;
        }

        .proposal-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            /* left sidebar fixed, right expands */
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .proposal-sidebar {
            background: #f9fafb;
            border-right: 1px solid #e5e7eb;
            padding: 1.5rem;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #374151;
            position: sticky;
            top: 0;
            /* keeps explanations visible while scrolling */
            height: 100vh;
            overflow-y: auto;
        }

        .proposal-sidebar h2 {
            font-size: 1.2rem;
            color: #006377;
            margin-bottom: 0.25rem;
        }

        .proposal-sidebar p {
            margin-bottom: 1rem;
            color: #555;
        }

        .proposal-content {
            background: #ffffff;
            padding: 1rem;
        }

        /* Container and layout */
        .doc-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background: var(--background);
        }

        /* Typography hierarchy */
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 3rem 0 1.5rem 0;
            line-height: 1.2;
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -0.5rem;
            left: 0;
            width: 4rem;
            height: 3px;
            background: var(--accent);
            border-radius: 2px;
        }

        h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent);
            margin: 2.5rem 0 1rem 0;
            line-height: 1.3;
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary);
            margin: 2rem 0 0.75rem 0;
            line-height: 1.4;
        }

        h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--card-foreground);
            margin: 1.5rem 0 0.5rem 0;
            line-height: 1.4;
        }

        p {
            margin: 1rem 0;
            color: var(--card-foreground);
            line-height: 1.7;
        }

        /* Hero section styling */
        .hero-section {
            background: linear-gradient(135deg, #4FC3F7 0%, #81D4FA 100%);
            color: var(--primary-foreground);
            padding: 4rem 2rem;
            margin: -2rem -2rem 3rem -2rem;
            text-align: center;
            border-radius: 0 0 1rem 1rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-meta {
            font-size: 1rem;
            opacity: 0.8;
            line-height: 1.8;
        }

        /* Card-based sections */
        .section-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            margin: 2rem 0;
            box-shadow: var(--shadow-sm);
            transition: box-shadow 0.2s ease;
        }

        .section-card:hover {
            box-shadow: var(--shadow-md);
        }

        /* Lists styling */
        ul {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }

        li {
            margin: 0.5rem 0;
            color: var(--card-foreground);
            line-height: 1.6;
        }

        li::marker {
            color: var(--accent);
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background: var(--background);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        th {
            background: var(--primary);
            color: var(--primary-foreground);
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 1rem;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid var(--border);
            color: var(--card-foreground);
        }

        tr:nth-child(even) {
            background: var(--muted);
        }

        tr:hover {
            background: var(--card);
        }

        /* Pricing highlight */
        .pricing-total {
            background: var(--accent);
            color: var(--accent-foreground);
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* Contact section */
        .contact-section {
            background: var(--primary);
            color: var(--primary-foreground);
            padding: 3rem 2rem;
            margin: 3rem -2rem -2rem -2rem;
            border-radius: 1rem 1rem 0 0;
            text-align: center;
        }

        .contact-section h2 {
            color: var(--primary-foreground);
            margin-bottom: 1rem;
        }

        .contact-section p {
            color: var(--primary-foreground);
            opacity: 0.9;
            font-size: 1.1rem;
        }

        /* Accent elements */
        .accent-text {
            color: var(--accent);
            font-weight: 600;
        }

        .highlight-box {
            background: var(--accent);
            color: var(--accent-foreground);
            padding: 1.5rem;
            border-radius: var(--radius);
            margin: 1.5rem 0;
            font-weight: 500;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .doc-content {
                padding: 1rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                padding: 2rem 1rem;
                margin: -1rem -1rem 2rem -1rem;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .section-card {
                padding: 1.5rem;
            }

            table {
                font-size: 0.9rem;
            }

            th,
            td {
                padding: 0.75rem;
            }
        }

        /* Print styles */
        @media print {
            .doc-content {
                max-width: none;
                padding: 0;
            }

            .section-card {
                box-shadow: none;
                border: 1px solid var(--border);
            }

            .hero-section,
            .contact-section {
                background: var(--primary) !important;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        /* Remove old Google Docs styles - keeping only essential structure */
        .c1,
        .c14,
        .c23,
        .c25,
        .c31,
        .c35,
        .c36,
        .c39,
        .c57,
        .c64,
        .c69,
        .c71 {
            /* Reset all old styles */
            all: unset;
            display: block;
        }

        /* Utility classes */
        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-semibold {
            font-weight: 600;
        }

        .italic {
            font-style: italic;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .page {
            display: grid;
            grid-template-columns: 1fr 300px;
            /* left (content), right (explanation) */
            gap: 2rem;
            min-height: 100vh;
            /* full page height */
            page-break-after: always;
            /* force new page on print/PDF */
            padding: 2rem;
            box-sizing: border-box;
        }

        .page:last-child {
            page-break-after: auto;
            /* no extra blank page */
        }

        .page-content {
            background: #fff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            
        }

        .page-explanation {
            background: #f9fafb;
            border-left: 2px solid #e5e7eb;
            padding: 1.5rem;
            font-size: 0.95rem;
            color: #374151;
        }
    </style>
</head>

<body class="doc-content">


        <main class="proposal-content">
            <div class="page">
                <div class="page-content">
                    <div class="hero-section">
                        <h1 class="hero-title">ACCOUNTING PROPOSAL</h1>
                        <p class="hero-subtitle">For {client_name}</p>
                        <div class="hero-meta">
                            <p><strong>Prepared by {user_assigned}</strong></p>
                            <p>{company_name}</p>
                            <p>{user_phone} | {user_email}</p>
                            <p>{company_address_1} | {company_city}, {company_state} | {company_zip_code} |
                                {company_url}</p>
                        </div>
                    </div>
                </div>
                <aside class="page-explanation">
                    <h2>Page 1</h2>
                    <p>This page introduces the proposal with a hero section and cover letter.</p>
                </aside>
            </div>

            <!-- Cover Letter section with card styling -->
            <div class="page">
                <div class="page-content">
                    < <div class="section-card">
                        <h1>Cover Letter</h1>
                        <p>Dear {client_contact_first},</p>
                        <p>{company_name} is pleased to present this proposal to provide professional accounting,
                            consulting and
                            financial management services to {client_name}. Our experience in providing (INSERT
                            INDUSTRY, ie.
                            medical,
                            small-business, etc) accounting services in {client_province} over the last # years,
                            provides us
                            with a
                            solid understanding of your business environment and needs.</p>
                        <p>We have over # of clients that work in the INDUSTRY. This represents #% of the business
                            completed by
                            {company_name}. We are active members in the INDUSTRY community and believe that we can
                            provide
                            {client_name} with outstanding expert service that is unmatched by other accounting
                            companies.</p>
                        <p>We have developed this package that follows with {client_name} in mind, providing information
                            that is
                            most
                            relevant to your current business needs.</p>
                        <p>If you are interested in any additional information, do not hesitate to contact us. We look
                            forward
                            to
                            serving you.</p>
                        <p>Sincerely,</p>
                        <p class="font-bold">{user_assigned}</p>
                        <p class="italic">{user_title}</p>
                </div>
            </div>
            <aside class="page-explanation">
                <h2>Page 2</h2>
                <p>This page explains about us, our experience, and clients we’ve worked with.</p>
            </aside>
    </div>
    <!-- About Us section with improved styling -->
    <div class="page">
        <div class="page-content">
            <div class="section-card">
                <h1>About Us</h1>
                <p class="accent-text font-semibold">With more than x years of service, {company_name} is focused on
                    providing
                    our clients advice on taxation, accounting and consulting services that reflect their needs.
                    {company_name}
                    has been located in the {company_city} area, providing our accounting, tax and consulting services
                    focused
                    on [industry 1], [industry 2], and [industry 3].</p>
                <p>Our team has X people dedicated to our PROPOSED CLIENT INDUSTRY, with an additional # people
                    supporting them
                    in the practice. Our team of consultants provides strategic support for your planning, marketing
                    assessment,
                    facility planning, capital planning, operational needs and leadership needs.</p>
                <p>We pride ourselves on being experts in the INSERT INDUSTRY, offering insight that stems beyond
                    accounting and
                    can help guide strategy and operations in your company – helping you to manage revenues, build
                    market share
                    and comply with continually changing regulations.</p>

                <h3>Client Experience</h3>
                <p>Some of our related client experience includes:</p>
                <ul>
                    <li>Coldwell Partners</li>
                    <li>MacKenzie Cross</li>
                    <li>JG Graphic Design</li>
                    <li>Proposify</li>
                    <li>Coldwell Partners</li>
                    <li>MacKenzie Cross</li>
                    <li>JG Graphic Design</li>
                    <li>Proposify</li>
                </ul>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>


    <div class="page">
        <div class="page-content">
            <div class="section-card"
                style="background: #fff; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <h1 style="font-size: 1.75rem; font-weight: bold; margin-bottom: 1rem; color: #006377;">Team</h1>
                <p class="accent-text font-semibold" style="margin-bottom: 2rem;">
                    As our client your engagement would be led by a single partner, <strong>{user_assigned}</strong>.
                    {user_assigned} is backed by a team of dedicated and seasoned professionals, who have a combined #
                    years
                    experience in INSERT INDUSTRY.
                </p>

                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; align-items: start;">
                    <!-- Left: Image -->
                    <div>
                        <img src="{{ asset('storage/images/cpa.png') }}" alt="James Hotani"
                            style="width: 100%; border-radius: 0.5rem; object-fit: cover;">
                    </div>

                    <!-- Right: Content -->
                    <div>
                        <h2 style="font-size: 1.5rem; font-weight: bold;">James Hotani</h2>
                        <h3 style="font-size: 1.1rem; color: #444;">CPA, Team Lead</h3>
                        <p>
                            James has over 20 years experience with INDUSTRY finance and operations,
                            working with INDUSTRY EXAMPLE ORGANIZATIONS. He has consulted on a wide
                            variety of financial management and operation issues including:
                        </p>
                        <ul style="margin-left: 1.25rem; list-style: disc;">
                            <li>Preparation of facility operating and capital budgets</li>
                            <li>Reimbursement and billing issues</li>
                            <li>Evaluating financial management operations</li>
                        </ul>

                        <h4 style="margin-top: 1.5rem; font-weight: bold; color: #006377;">Professional / Civic
                            Organizations
                        </h4>
                        <ul style="margin-left: 1.25rem; list-style: disc;">
                            <li>Member of the American Institute of CPAs</li>
                            <li>INDUSTRY association</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>


    <div class="page">
        <div class="page-content">
            <div class="section-card">
                <h1>Project Summary</h1>
                <p class="accent-text font-semibold">{client_name} is interested in securing an accounting partner to
                    assist
                    with restructuring the bookkeeping and accounting, as well as regular tax filings.</p>

                <h2>Goals of the Project</h2>
                <ul>
                    <li>Increase operational efficiency and production</li>
                    <li>Greater administrative control</li>
                    <li>Lowered administrative costs</li>
                    <li>Cash management control</li>
                    <li>Uninterrupted customer service</li>
                    <li>Timely federal and local tax filings</li>
                </ul>

                <div style="margin-top: 1.5rem; text-align: center;">
                    <img src="{{ asset('storage/images/image3.jpg') }}" alt="Project Illustration"
                        style="max-width: 100%; height: auto; border-radius: 0.5rem;">
                </div>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>

    <div class="page">
        <div class="page-content">
            <div class="section-card">
                <h1>Proposal</h1>
                <p class="accent-text font-semibold">{company_name} will help {client_name} move to a comprehensive
                    transaction
                    management service built on the QuickBooks platform. This move will allow for all bookkeeping and
                    accounting
                    functions to be seamlessly accessible as well as provide complete customer data access.</p>
                <p>{company_name} proposes to host and maintain all the QuickBooks data files, so that actually
                    licensing costs
                    are built into Expert Accountants weekly service fee so that there is no software investment
                    required.
                    {client_name} will own the data file at all times.</p>

                <h2>QuickBooks Startup (20 hrs)</h2>
                <ul>
                    <li>Build the QuickBooks file based on existing Chart of Accounts (CSA)</li>
                    <li>Balance Sheet, Vendors and recurring A/P items</li>
                    <li>Routing of vendor invoices, statements, and paperless bank debit transactions</li>
                    <li>Process for communicating cash position and A/P Aging for client approval</li>
                    <li>Customer Payments and Deposit Detail</li>
                </ul>

                <h2>Data Migration (20 Hrs)</h2>
                <ul>
                    <li>Customer and Vendor List</li>
                    <li>Customer Balance Summary</li>
                    <li>Daily Customer Invoice Summary (report to QB as journal entry - sales and A/R)</li>
                </ul>

                <h2>QuickBooks Data Build (40 hrs)</h2>
                <ul>
                    <li>Quote/Order/Invoice construction</li>
                    <li>Remote check deposit, EFT payment, CC processing</li>
                    <li>Warehouse database (as inventory items)</li>
                    <li>Remote access and/or publishing of Customer data (login)</li>
                    <li>Rolling bank reconciliation and cash flow analysis</li>
                </ul>

                <h2>Overall</h2>
                <ul>
                    <li>Maintain complete business system comprising all daily transactions</li>
                    <li>Provide weekly reconciliations and reports to cash management function</li>
                    <li>Provide A/P and A/R administrative contact point</li>
                    <li>Tech support for QuickBooks software and related (on build out)</li>
                    <li>Provide periodic financial reports and other management reports</li>
                    <li>File annual corporate taxes as well as quarterly federal tax filings</li>
                </ul>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>

    <!-- Service & Pricing with modern table design -->
    <div class="page">
        <div class="page-content">
            <div class="section-card">
                <h1>Service & Pricing</h1>
                <p class="accent-text font-semibold">Our fees are based on the time required and will be billed at the
                    all-inclusive fixed rate of $150.00 per hour for the contract period of one year from the date of
                    the
                    contract.</p>
                <p>Expenses for travel, meals, lodging, printing and report production are charged as part of the
                    all-inclusive
                    rate above. We are sensitive to the financial challenges facing INDUSTRY and want to minimize fees
                    to the
                    extent possible within the scope of the project.</p>
                <p class="font-semibold">Expert Accountants provides the following estimate based on the project summary
                    provided:</p>

                <table>
                    <tr>
                        <td>Estimate fee hours</td>
                        <td>46</td>
                    </tr>
                    <tr>
                        <td>Estimate fee per hour</td>
                        <td>$150</td>
                    </tr>
                    <tr class="pricing-total">
                        <td><strong>Estimate total fees</strong></td>
                        <td><strong>$6,900</strong></td>
                    </tr>
                </table>

                <p>We are proposing to provide the following services within these fee hours: preparation of audited tax
                    statements, filing of state and federal taxes, review of bookkeeping procedure, consulting on
                    financial
                    business practices and reporting to business partners as directed.</p>
                <p>We are also providing outsourced bookkeeping and CFO services. This will not only reduce/eliminate
                    personnel
                    and related costs required for current in-house processes, but also add much needed financial
                    reporting
                    detail and cash management.</p>

                <h2>Cost Comparison</h2>
                <div class="highlight-box">
                    <p><strong>One full time clerical staff, 40 hrs/week, $12/hr, payroll taxes: $542.00/week</strong>
                    </p>
                    <p><strong>Expert Accountants Service Plan: $340.00/week</strong></p>
                    <p><strong>Monthly cost savings: $833.00</strong></p>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Unit</th>
                            <th>Hours</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Accounting Services</strong><br>
                                <small>Estimated hours</small>
                            </td>
                            <td>$150</td>
                            <td>46</td>
                            <td>$6,900</td>
                        </tr>
                        <tr class="pricing-total">
                            <td colspan="3"><strong>Total</strong></td>
                            <td><strong>$6,900</strong></td>
                        </tr>
                    </tbody>
                </table>

                <p class="accent-text font-semibold">Our fees will be billed monthly as work progresses. Billing will be
                    detailed by project and advisory services. Invoices will be due upon receipt.</p>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>

    <!-- Next Steps section with clear structure -->
    <div class="page">
        <div class="page-content">
            <div class="section-card">
                <h1>Next Steps</h1>

                <h2>Project Kick-Off / Requirements Documentation</h2>
                <p>During this phase, our collective teams will meet to review overall project goals, establish metrics
                    to
                    monitor achievement of objects. We will map out current accounting processes, review annual tax
                    preparation
                    requirements and determine specific accounting responsibilities of your company and of Accounting
                    Experts to
                    confirm they align with the scope of the proposal.</p>

                <h2>System Configuration</h2>
                <p>Set up QuickBooks accounting software to service the needs of PROPOSAL COMPANY.</p>

                <h2>Data Migration</h2>
                <p class="font-semibold">During this phase we will upload files for:</p>
                <ul>
                    <li>Customer, vendors, beginning balances, general ledger month-end balances for 12 months prior
                    </li>
                    <li>Open invoices and bills as of planned production dates</li>
                    <li>Chart of accounts</li>
                </ul>

                <h2>Training</h2>
                <p>Training of PROPOSAL COMPANY staff on QuickBooks System.</p>

                <h2>Ongoing</h2>
                <p>Provide monthly services as agreed upon in the contract.</p>
                <img src="{{ asset('storage/images/image2.jpg') }}" alt="Project Illustration"
                    style="max-width: 100%; height: auto; border-radius: 0.5rem;">
            </div>
        </div>
    
    <aside class="page-explanation">
        <h2>Page 2</h2>
        <p>This page explains about us, our experience, and clients we’ve worked with.</p>
    </aside>
    </div>

    <!-- Contact section with modern styling -->
    <div class="page">
        <div class="page-content">
            <div class="contact-section">
                <h1>Contact</h1>
                <p class="font-semibold">{company_name} are very interested in working with {client_name} and would love
                    to set
                    up a meeting with you to answer any questions you may have and determine the next steps in this
                    process.</p>

                <h2>{user_assigned}</h2>
                <p>{user_title}<br>
                    {company_name}<br>
                    {user_phone} | {user_email}<br>
                    {company_address_1} | {company_city}, {company_state} {company_zip_code}<br>
                    {company_url}</p>
            </div>
        </div>
        <aside class="page-explanation">
            <h2>Page 2</h2>
            <p>This page explains about us, our experience, and clients we’ve worked with.</p>
        </aside>
    </div>
    </main>
</body>

</html>

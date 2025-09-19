<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $proposal_name ?? 'Business Consulting Proposal' }} - {{ $client_name ?? 'Client Name' }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #f8fafc;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .two-column-layout {
            display: flex;
            min-height: 100vh;
        }

        .explanation-panel {
            width: 35%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }

        .proposal-content {
            width: 65%;
            padding: 3rem;
            background: white;
        }

        .explanation-panel h3 {
            color: #ffd700;
            margin-bottom: 1rem;
            font-size: 1.4rem;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 0.5rem;
        }

        .explanation-panel p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
            line-height: 1.7;
        }

        .explanation-panel .tip {
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-left: 4px solid #ffd700;
        }

        .proposal-header {
            text-align: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 3px solid #3498db;
        }

        .proposal-title {
            font-size: 3rem;
            color: #2c3e50;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .proposal-subtitle {
            font-size: 1.3rem;
            color: #7f8c8d;
            font-weight: 300;
        }

        .section {
            margin-bottom: 4rem;
            scroll-margin-top: 2rem;
        }

        .section-title {
            font-size: 2.2rem;
            color: #3498db;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #ecf0f1;
        }

        .section-subtitle {
            font-size: 1.4rem;
            color: #e74c3c;
            margin: 2rem 0 1rem 0;
            font-weight: 600;
        }

        .client-info {
            background: #ecf0f1;
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
            display: flex;
            justify-content: space-between;
        }

        .client-info div {
            text-align: center;
        }

        .client-info h4 {
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .deliverables-box {
            background: #3498db;
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .deliverables-box h3 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .deliverable-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 5px;
            border-left: 4px solid #ffd700;
        }

        .timeline-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .timeline-table th {
            background: #3498db;
            color: white;
            padding: 1rem;
            text-align: left;
        }

        .timeline-table td {
            padding: 1rem;
            border-bottom: 1px solid #ecf0f1;
        }

        .timeline-table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .team-member {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 1rem;
            object-fit: cover;
        }

        .team-member h4 {
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .team-member .role {
            color: #e74c3c;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .pricing-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .pricing-table th {
            background: #2c3e50;
            color: white;
            padding: 1.2rem;
            text-align: left;
        }

        .pricing-table td {
            padding: 1.2rem;
            border-bottom: 1px solid #ecf0f1;
        }

        .pricing-table .total-row {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        .contract-section {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .contract-section h4 {
            color: #3498db;
            margin-bottom: 1rem;
        }

        .signature-area {
            display: flex;
            justify-content: space-between;
            margin: 3rem 0;
            padding: 2rem;
            background: #ecf0f1;
            border-radius: 10px;
        }

        .signature-box {
            text-align: center;
            width: 45%;
        }

        .signature-line {
            border-bottom: 2px solid #3498db;
            margin: 2rem 0 1rem 0;
            height: 50px;
        }

        .highlight {
            background: #ffd700;
            padding: 0.2rem 0.5rem;
            border-radius: 3px;
            color: #2c3e50;
        }

        .variable {
            color: #e74c3c;
            font-weight: 600;
        }

        @media (max-width: 1024px) {
            .two-column-layout {
                flex-direction: column;
            }

            .explanation-panel {
                width: 100%;
                height: auto;
                position: relative;
            }

            .proposal-content {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="two-column-layout">
            <!-- Explanation Panel -->
            <div class="explanation-panel">
                <h3>📋 Proposal Guide</h3>
                <p>This professional business consulting proposal template helps you present your services effectively
                    to potential clients.</p>

                <div class="tip">
                    <strong>💡 Pro Tip:</strong> Customize all variables in curly braces with your actual client and
                    company information.
                </div>

                <h3>🎯 Key Sections</h3>
                <p><strong>Executive Summary:</strong> Hook your client with a compelling overview of their challenges
                    and your solutions.</p>

                <p><strong>About Us:</strong> Build credibility by showcasing your expertise and past successes.</p>

                <p><strong>Project Activities:</strong> Detail your methodology and approach to solving their problems.
                </p>

                <p><strong>Timeline:</strong> Set clear expectations with a structured project timeline.</p>

                <p><strong>Investment:</strong> Present your pricing transparently with detailed breakdowns.</p>

                <div class="tip">
                    <strong>✅ Best Practices:</strong>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Keep language client-focused</li>
                        <li>Use specific, measurable outcomes</li>
                        <li>Include social proof and testimonials</li>
                        <li>Make the next steps crystal clear</li>
                    </ul>
                </div>

                <h3>🚀 Closing Tips</h3>
                <p>End with a strong call-to-action and make signing as easy as possible. Follow up within 48 hours of
                    sending.</p>
            </div>

            <!-- Proposal Content -->
            <div class="proposal-content">
                <!-- Header -->
                <div class="proposal-header">
                    <h1 class="proposal-title">Consulting You Can Count On</h1>
                    <p class="proposal-subtitle">Strategic Business Consulting Proposal</p>
                </div>

                <!-- Client Information -->
                <div class="client-info">
                    <div>
                        <h4>Prepared For</h4>
                        <p class="variable">{{ $client_name ?? '{client_name}' }}</p>
                        <p class="variable">{{ $client_contact_first ?? '{client_contact_first}' }}
                            {{ $client_contact_last ?? '{client_contact_last}' }}</p>
                    </div>
                    <div>
                        <h4>Submitted By</h4>
                        <p class="variable">{{ $company_name ?? '{company_name}' }}</p>
                        <p class="variable">{{ $user_assigned ?? '{user_assigned}' }},
                            {{ $user_title ?? '{user_title}' }}</p>
                    </div>
                    <div>
                        <h4>Date</h4>
                        <p class="variable">{{ $date_submitted ?? '{date_submitted}' }}</p>
                    </div>
                </div>

                <!-- Executive Summary -->
                <section class="section" id="overview">
                    <h2 class="section-title">Executive Summary</h2>
                    <p>Dear <span class="variable">{{ $client_contact_first ?? '{client_contact_first}' }}</span>,</p>

                    <p>Sometimes it's hard to see the forest for the trees. You work hard every day to meet your
                        customers' current needs and anticipate what they'll want in the future. You listen carefully,
                        attend to your market, and watch your cash flow. You give your employees the best training and
                        benefits that inspire loyalty. <span
                            class="variable">{{ $client_name ?? '{client_name}' }}</span> is a solid business with a
                        good reputation — so what's next?</p>

                    <p>Growth and innovation are important, but big picture thinking can be tough, especially when
                        you're busy with day-to-day transactions and business is consistently good. But could business
                        be <span class="highlight">great</span>? At <span
                            class="variable">{{ $company_name ?? '{company_name}' }}</span>, we think so.</p>

                    <p>You outsource your cleaning, your accounting, your IT services, and your web presence. It makes
                        good financial and business sense to bring in the experts so you can focus on what you do best.
                        <span class="variable">{{ $company_name ?? '{company_name}' }}</span> is the provider of choice
                        for big-picture organizational problem solving and creative growth strategy.</p>

                    <p>Our objective is to build on your considerable strengths to ensure that <span
                            class="variable">{{ $client_name ?? '{client_name}' }}</span> continues to be a leader in
                        your industry.</p>

                    <p>I look forward to meeting with you to discuss next steps.</p>

                    <p>Sincerely,<br>
                        <span class="variable">{{ $user_assigned ?? '{user_assigned}' }},
                            {{ $user_title ?? '{user_title}' }}</span><br>
                        <span class="variable">{{ $company_name ?? '{company_name}' }}</span>
                    </p>
                </section>

                <!-- About Us -->
                <section class="section" id="about">
                    <h2 class="section-title">About Us</h2>
                    <p><span class="variable">{{ $company_name ?? '{company_name}' }}</span>'s solutions don't come out
                        of a box ready to plug and play. We pride ourselves on identifying your challenges quickly and
                        designing strategies to address them, always keeping top of mind your business's need for
                        minimal disruption.</p>

                    <p>We've been helping businesses for over 30 years, both here in this community and internationally.
                        We know the landscape, we know your market, and we understand your industry.</p>

                    <p>Each of our consultants has an advanced degree in their field, and at least ten years of
                        experience actually working in that field. This marriage of theory and practice is critical to
                        our strategic approach.</p>

                    <h3 class="section-subtitle">Recent Client Success Stories</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                        <div>
                            <ul style="list-style: none; padding: 0;">
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Acme Tchotchkes</li>
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Tribble Enterprises
                                </li>
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Red Wigglers Inc.
                                </li>
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ CorporateGuy Ltd.
                                </li>
                                <li style="padding: 0.5rem 0;">✓ Alpha Associates</li>
                            </ul>
                        </div>
                        <div>
                            <ul style="list-style: none; padding: 0;">
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Charity Co.</li>
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Smooth Business
                                    Processes Inc.</li>
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #ecf0f1;">✓ Sweet Customer
                                    Service Co.</li>
                                <li style="padding: 0.5rem 0;">✓ Silver Sow and Sons</li>
                            </ul>
                        </div>
                    </div>
                    <div class="About-Image">
                        <img src="{{ asset('storage/images/About.png') }}" alt="Investment Graphic"
                            style="max-width:100%; margin-top:20px;">
                    </div>
                </section>

                <!-- Project Summary -->
                <section class="section" id="project-summary">
                    <h2 class="section-title">Project Summary</h2>
                    <p><span class="variable">{{ $client_name ?? '{client_name}' }}</span> is a strong brand with a
                        proven track record of meeting customer expectations in a rapidly changing market. You have the
                        products and services people want, but there's a gap between your current sales and where you
                        want to be.</p>

                    <p>Growing your business means building on your strengths to improve your company's flexibility and
                        capacity for innovation - both in what you offer and how you offer it.</p>

                    <p>That's where <span class="variable">{{ $company_name ?? '{company_name}' }}</span> comes in.</p>

                    <div class="deliverables-box">
                        <h3>🎯 Key Deliverables</h3>
                        <div class="deliverable-item">
                            <strong>Company Profile Analysis</strong><br>
                            A unique company profile that will help your senior management team focus on goals and
                            communicate those goals to the entire organization.
                        </div>
                        <div class="deliverable-item">
                            <strong>Strategic Implementation Plan</strong><br>
                            An implementation plan that takes into account the challenges of organizational change and
                            sets benchmarks for success.
                        </div>
                        <div class="deliverable-item">
                            <strong>Implementation Support</strong><br>
                            Implementation services and supports to help overcome obstacles and smooth the path as your
                            solution is rolling out.
                        </div>
                        <div class="deliverable-item">
                            <strong>Ongoing Project Management</strong><br>
                            Ongoing project management and analytics that ensure benchmarks are met and tactics are
                            modified to reflect evolving needs.
                        </div>
                    </div>
                </section>

                <!-- Project Activities -->
                <section class="section" id="activities">
                    <h2 class="section-title">Project Activities</h2>

                    <h3 class="section-subtitle">Phase 1: Discovery & Analysis</h3>
                    <p><span class="variable">{{ $company_name ?? '{company_name}' }}</span> assigns a team
                        specifically for <span class="variable">{{ $client_name ?? '{client_name}' }}</span>'s needs.
                        We get to know you - your strengths, challenges, history, and current needs - and we get to know
                        your market. Together with your project lead and senior management team, we define the problem
                        and create goals to solve it.</p>

                    <h3 class="section-subtitle">Phase 2: Benchmarking & Goal Setting</h3>
                    <p>In this phase, we compare your current state to your desired state - where are you now and where
                        do you want to be? We identify specific gaps, set benchmarks for success, outline measurable
                        targets, and select analytics tools.</p>

                    <h3 class="section-subtitle">Phase 3: Solution Design</h3>
                    <p>Our team designs a customized solution and implementation plan to meet your objectives within the
                        time frame required. We work closely with your project lead and management team to make sure the
                        plan is a good fit with realistic objectives and outcomes.</p>

                    <h3 class="section-subtitle">Phase 4: Implementation & Change Management</h3>
                    <p>We stay with you every step of the way while your solution is rolling out, guiding
                        implementation, tweaking elements of the plan as we get feedback from employees and customers,
                        and measuring success using custom analytics.</p>
                </section>

                <!-- Timeline -->
                <section class="section" id="timeline">
                    <h2 class="section-title">Project Timeline</h2>
                    <table class="timeline-table">
                        <thead>
                            <tr>
                                <th>Project Phase</th>
                                <th>Duration</th>
                                <th>Key Activities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Discovery & Analysis</strong></td>
                                <td>Week 1-2</td>
                                <td>Stakeholder interviews, market analysis, current state assessment</td>
                            </tr>
                            <tr>
                                <td><strong>Benchmarking</strong></td>
                                <td>Week 3-4</td>
                                <td>Gap analysis, benchmark setting, success metrics definition</td>
                            </tr>
                            <tr>
                                <td><strong>Solution Design</strong></td>
                                <td>Week 5-6</td>
                                <td>Strategy development, implementation planning, stakeholder review</td>
                            </tr>
                            <tr>
                                <td><strong>Implementation</strong></td>
                                <td>Week 7-8</td>
                                <td>Solution rollout, change management, progress monitoring</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin: 2rem 0;">
                        <h4 style="color: #3498db; margin-bottom: 1rem;">Client Responsibilities</h4>
                        <ul>
                            <li>Assign a dedicated project leader within the organization</li>
                            <li>Provide access to senior management as needed</li>
                            <li>Provide access to documents, statements, and systems as needed</li>
                            <li>Participate in weekly collaborative meetings</li>
                        </ul>
                    </div>
                </section>

                <!-- Team -->
                <section class="section" id="team">
                    <h2 class="section-title">Meet Our Team</h2>
                    <div class="team-grid">
                        <div class="team-member">
                            <img src="{{ asset('storage/images/Nyokabi.png') }}" alt="Team Lead">
                            <h4>Nyokabi Quarters</h4>
                            <div class="role">TEAM LEAD</div>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper
                                laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('storage/images/ochieng.png') }}" alt="Expert Consultant">
                            <h4>Ochieng' Winters</h4>
                            <div class="role">EXPERT CONSULTANT</div>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper
                                laoreet, lectus arcu pulvinar risus, vitae facilibus libero dolor a purus.</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('storage/images/Akinyi.png') }}" alt="Communications Lead">
                            <h4>Akinyi Travis</h4>
                            <div class="role">COMMUNICATIONS LEAD</div>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper
                                laoreet, lectus arcu pulvinar risus, vitae facilibus libero dolor a purus.</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('storage/images/kipkemboi.png') }}" alt="Analytics Expert">
                            <h4>Kipkemboi Lee</h4>
                            <div class="role">ANALYTICS EXPERT</div>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper
                                laoreet, lectus arcu pulvinar risus, vitae facilibus libero dolor a purus.</p>
                        </div>
                    </div>
                </section>

                <!-- Investment -->
                <section class="section" id="investment">
                    <h2 class="section-title">Your Investment</h2>
                    <p>Our fees are based on the time required and will be billed at the all-inclusive fixed rate of
                        <span class="highlight">$150.00 per hour</span> for the contract period of one year from the
                        date of the contract.</p>

                    <p>Expenses for travel, meals, lodging, printing, and report production are charged as part of the
                        all-inclusive rate above. We are sensitive to the financial challenges facing your industry and
                        want to minimize fees to the extent possible within the scope of the project.</p>

                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th>Service Description</th>
                                <th>Rate</th>
                                <th>Hours</th>
                                <th>Investment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Research and Discovery</strong></td>
                                <td>$150/Hour</td>
                                <td>10</td>
                                <td>$1,500</td>
                            </tr>
                            <tr>
                                <td><strong>Analysis and Implementation</strong></td>
                                <td>$150/Hour</td>
                                <td>35</td>
                                <td>$5,250</td>
                            </tr>
                            <tr>
                                <td><strong>Post-Implementation Evaluation</strong></td>
                                <td>$150/Hour</td>
                                <td>5</td>
                                <td>$750</td>
                            </tr>
                            <tr>
                                <td><strong>Subtotal</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>$7,500</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Tax (15%)</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>$1,125</strong></td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total Investment</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>$8,625</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="investment-image">
                        <img src="{{ asset('storage/images/invest.png') }}" alt="Investment Graphic"
                            style="max-width:100%; margin-top:20px;">
                    </div>
                </section>

                <!-- Contract Summary -->
                <section class="section" id="contract">
                    <h2 class="section-title">Agreement Summary</h2>
                    <div class="contract-section">
                        <h4>Scope of Work</h4>
                        <p>The Company has engaged Consultant to provide strategic business consulting services in
                            connection with organizational growth and innovation initiatives, including analysis,
                            implementation planning, and ongoing support services.</p>

                        <h4>Term and Availability</h4>
                        <p>This agreement shall be effective as of <span
                                class="variable">{{ $date_submitted ?? '{date_submitted}' }}</span> and shall continue
                            for a period of 12 consecutive months. Consultant will devote the agreed-upon hours per
                            month as outlined in the pricing section.</p>

                        <h4>Confidentiality</h4>
                        <p>All proprietary information, business processes, and strategic plans shared during this
                            engagement will be kept strictly confidential and used solely for the benefit of the
                            Client's business objectives.</p>

                        <h4>Deliverables and Ownership</h4>
                        <p>All reports, analyses, and strategic documents created during this engagement will become the
                            exclusive property of the Client upon completion and payment.</p>
                    </div>
                    <div class="Agreement-image">
                        <img src="{{ asset('storage/images/agreement.png') }}" alt="Investment Graphic"
                            style="max-width:100%; margin-top:20px;">
                    </div>
                </section>

                <!-- Next Steps -->
                <section class="section" id="next-steps">
                    <h2 class="section-title">Next Steps</h2>
                    <div
                        style="background: #e8f5e8; padding: 2rem; border-radius: 10px; border-left: 5px solid #27ae60;">
                        <h4 style="color: #27ae60; margin-bottom: 1rem;">Ready to Get Started?</h4>
                        <ol style="padding-left: 1.5rem; line-height: 2;">
                            <li>Review this proposal and the attached contract terms</li>
                            <li>Contact us with any questions or clarifications needed</li>
                            <li>Sign and return the agreement to begin the engagement</li>
                            <li>We'll schedule our initial discovery meeting within 48 hours</li>
                        </ol>
                        <p style="margin-top: 1.5rem;"><strong>Questions?</strong> Call us at <span
                                class="variable">{{ $user_phone ?? '{user_phone}' }}</span> or email <span
                                class="variable">{{ $user_email ?? '{user_email}' }}</span></p>
                    </div>
                </section>

                <!-- Signature Area -->
                <section class="section" id="signature">
                    <h2 class="section-title">Agreement Signature</h2>
                    <div class="signature-area">
                        <div class="signature-box">
                            <h4>Consultant</h4>
                            <div class="signature-line"></div>
                            <p><span class="variable">{{ $user_assigned ?? '{user_assigned}' }}</span><br>
                                <span class="variable">{{ $company_name ?? '{company_name}' }}</span><br>
                                Date: _______________
                            </p>
                        </div>
                        <div class="signature-box">
                            <h4>Client</h4>
                            <div class="signature-line"></div>
                            <p><span class="variable">{{ $client_contact_first ?? '{client_contact_first}' }}
                                    {{ $client_contact_last ?? '{client_contact_last}' }}</span><br>
                                <span class="variable">{{ $client_name ?? '{client_name}' }}</span><br>
                                Date: _______________
                            </p>
                        </div>
                    </div>
                      <div class="Agreement-signature">
                        <img src="{{ asset('storage/images/signature.png') }}" alt="Investment Graphic"
                            style="max-width:100%; margin-top:20px;">
                    </div>
                </section>

                <!-- Footer -->
                <footer
                    style="text-align: center; padding: 2rem; border-top: 2px solid #ecf0f1; margin-top: 3rem; color: #7f8c8d;">
                    <p><span class="variable">{{ $proposal_name ?? '{proposal_name}' }}</span> | <span
                            class="variable">{{ $client_name ?? '{client_name}' }}</span> | Page <span
                            class="variable">{{ $page_number ?? '{page_number}' }}</span></p>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>

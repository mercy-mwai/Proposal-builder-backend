<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Proposal - {{ $client_name ?? 'Client Name' }}</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
            --border-color: #e5e7eb;
            --success-color: #10b981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }


        .download-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            margin-top: 10px;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .download-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .download-section h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .download-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .download-form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .form-buttons {
            display: flex;
            margin-top: 5px;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--accent-color);
            color: white;
        }

        .btn-secondary:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .form-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Main Content Layout */
        .main-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            padding: 60px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Sidebar */
        .sidebar {
            background: var(--bg-light);
            padding: 30px;
            border-radius: 12px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .sidebar h3 {
            color: var(--primary-color);
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .sidebar p {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .sidebar-tip {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            margin-bottom: 20px;
        }

        .sidebar-tip h4 {
            color: var(--accent-color);
            font-size: 1rem;
            margin-bottom: 8px;
        }

        /* Content Sections */
        .content {
            background: white;
        }

        .section {
            margin-bottom: 50px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        .section h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .section h3 {
            color: var(--text-dark);
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .section p {
            color: var(--text-light);
            margin-bottom: 15px;
            line-height: 1.7;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .service-card {
            background: var(--bg-light);
            padding: 25px;
            border-radius: 10px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .service-card h4 {
            color: var(--primary-color);
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .service-card ul {
            list-style: none;
            padding-left: 0;
        }

        .service-card li {
            color: var(--text-light);
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        .service-card li::before {
            content: "✓";
            color: var(--success-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Pricing Table */
        .pricing-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .pricing-header {
            background: var(--primary-color);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .pricing-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            align-items: center;
        }

        .pricing-row:nth-child(even) {
            background: var(--bg-light);
        }

        .pricing-row:last-child {
            border-bottom: none;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
            margin-top: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -37px;
            top: 25px;
            width: 12px;
            height: 12px;
            background: var(--primary-color);
            border-radius: 50%;
            border: 3px solid white;
        }

        .timeline-date {
            color: var(--accent-color);
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
            border-radius: 12px;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 40px 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .section {
                padding: 25px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .pricing-row {
                grid-template-columns: 1fr;
                gap: 10px;
                text-align: center;
            }
        }

        /* Print Styles */
        @media print {
            .sidebar {
                display: none;
            }

            .main-content {
                grid-template-columns: 1fr;
            }

            .section {
                box-shadow: none;
                border: 1px solid var(--border-color);
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1>Digital Marketing Proposal</h1>
            <p>Comprehensive digital marketing strategy for {{ $client_name ?? 'Your Business' }}</p>
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <!-- Sidebar -->
            <aside class="sidebar">
                <h3>Why This Proposal Matters</h3>
                <p>This comprehensive digital marketing proposal outlines how we'll help
                    {{ $client_name ?? 'your business' }} achieve measurable growth through strategic online marketing.
                </p>

                <div class="sidebar-tip">
                    <h4>💡 Pro Tip</h4>
                    <p>Digital marketing ROI averages 4:1, meaning every $1 spent typically generates $4 in revenue.</p>
                </div>

                <div class="sidebar-tip">
                    <h4>📊 Key Metrics</h4>
                    <p>We'll track website traffic, lead generation, conversion rates, and customer acquisition costs to
                        ensure success.</p>
                </div>

                <div class="sidebar-tip">
                    <h4>🎯 Success Factors</h4>
                    <p>Consistent execution, data-driven decisions, and continuous optimization are crucial for digital
                        marketing success.</p>
                </div>

                <div class="sidebar-tip">
                    <h4>⏰ Timeline</h4>
                    <p>Most digital marketing campaigns show initial results within 3-6 months, with significant growth
                        by month 12.</p>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="content">
                <!-- Executive Summary -->
                <section class="section">
                    <h2>Executive Summary</h2>
                    <p>Dear {{ $client_name ?? 'Valued Client' }},</p>
                    <p>In today's digital landscape, {{ $business_type ?? 'your business' }} needs a comprehensive
                        online presence to reach and engage your target audience effectively. Our digital marketing
                        proposal outlines a strategic approach to increase your online visibility, generate qualified
                        leads, and drive sustainable business growth.</p>
                    <p>We propose a multi-channel digital marketing strategy that includes search engine optimization
                        (SEO), pay-per-click advertising (PPC), social media marketing, content marketing, and email
                        campaigns. This integrated approach will help you achieve
                        {{ $primary_goal ?? 'your business objectives' }} while maximizing your return on investment.
                    </p>
                    <p><strong>Expected Outcomes:</strong> {{ $expected_traffic_increase ?? '150%' }} increase in
                        website traffic, {{ $expected_lead_increase ?? '200%' }} increase in qualified leads, and
                        {{ $expected_roi ?? '300%' }} ROI within the first year.</p>
                </section>

                <!-- Current Situation Analysis -->
                <section class="section">
                    <h2>Current Situation Analysis</h2>
                    <h3>Challenges We've Identified</h3>
                    <p>Based on our initial analysis of {{ $client_name ?? 'your business' }}, we've identified several
                        key challenges that are limiting your digital growth:</p>
                    <ul style="margin-left: 20px; color: var(--text-light);">
                        <li>{{ $challenge_1 ?? 'Limited online visibility in search results' }}</li>
                        <li>{{ $challenge_2 ?? 'Inconsistent social media presence and engagement' }}</li>
                        <li>{{ $challenge_3 ?? 'Lack of targeted lead generation strategies' }}</li>
                        <li>{{ $challenge_4 ?? 'Minimal conversion optimization on existing digital assets' }}</li>
                    </ul>

                    <h3>Market Opportunities</h3>
                    <p>The {{ $industry ?? 'your industry' }} presents significant digital marketing opportunities.
                        With {{ $market_stat ?? '73% of consumers' }} researching online before making purchasing
                        decisions, there's tremendous potential to capture market share through strategic digital
                        marketing.</p>
                </section>

                <!-- Proposed Digital Marketing Strategy -->
                <section class="section">
                    <h2>Proposed Digital Marketing Strategy</h2>
                    <p>Our comprehensive digital marketing approach focuses on creating a cohesive online presence that
                        drives measurable results. We'll implement proven strategies tailored specifically to
                        {{ $client_name ?? 'your business' }} and {{ $target_audience ?? 'your target audience' }}.
                    </p>

                    <div class="services-grid">
                        <div class="service-card">
                            <h4>Search Engine Optimization (SEO)</h4>
                            <ul>
                                <li>Comprehensive keyword research and strategy</li>
                                <li>On-page optimization and technical SEO</li>
                                <li>Local SEO for {{ $location ?? 'your area' }}</li>
                                <li>Link building and authority development</li>
                                <li>Monthly SEO performance reports</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>Pay-Per-Click Advertising (PPC)</h4>
                            <ul>
                                <li>Google Ads campaign setup and management</li>
                                <li>Facebook and Instagram advertising</li>
                                <li>LinkedIn advertising (B2B focus)</li>
                                <li>Conversion tracking and optimization</li>
                                <li>A/B testing for ad performance</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>Social Media Marketing</h4>
                            <ul>
                                <li>Social media strategy development</li>
                                <li>Content creation and curation</li>
                                <li>Community management and engagement</li>
                                <li>Social media advertising campaigns</li>
                                <li>Performance analytics and reporting</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>Content Marketing</h4>
                            <ul>
                                <li>Content strategy and editorial calendar</li>
                                <li>Blog writing and optimization</li>
                                <li>Video content creation</li>
                                <li>Infographics and visual content</li>
                                <li>Content distribution strategy</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>Email Marketing</h4>
                            <ul>
                                <li>Email list building strategies</li>
                                <li>Automated email sequences</li>
                                <li>Newsletter campaigns</li>
                                <li>Email segmentation and personalization</li>
                                <li>Performance tracking and optimization</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>Analytics & Reporting</h4>
                            <ul>
                                <li>Google Analytics setup and configuration</li>
                                <li>Conversion tracking implementation</li>
                                <li>Monthly performance reports</li>
                                <li>ROI analysis and recommendations</li>
                                <li>Quarterly strategy reviews</li>
                            </ul>
                        </div>
                    </div>
                    <div className="digital-marketing">
                        <img src="{{ asset('storage/images/digitalMarket.png') }}" alt="digital-marketing"
                            style= "max-width: 100%; margin-top:20px">
                    </div>
                </section>

                <!-- Project Timeline -->
                <section class="section">
                    <h2>Project Timeline & Milestones</h2>
                    <p>Our digital marketing implementation follows a strategic timeline designed to build momentum and
                        deliver results progressively.</p>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">Month 1-2: Foundation & Setup</div>
                            <h4>Initial Setup & Strategy Implementation</h4>
                            <p>Complete website audit, keyword research, set up tracking systems, launch initial PPC
                                campaigns, and begin content creation.</p>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-date">Month 3-4: Optimization & Expansion</div>
                            <h4>Campaign Optimization & Content Scaling</h4>
                            <p>Optimize based on initial data, expand successful campaigns, increase content production,
                                and implement email marketing automation.</p>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-date">Month 5-6: Growth & Refinement</div>
                            <h4>Scale Successful Strategies</h4>
                            <p>Scale high-performing campaigns, implement advanced targeting, launch retargeting
                                campaigns, and optimize conversion funnels.</p>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-date">Month 7-12: Sustained Growth</div>
                            <h4>Long-term Growth & Optimization</h4>
                            <p>Focus on sustainable growth, advanced SEO strategies, brand building, and continuous
                                optimization based on performance data.</p>
                        </div>
                    </div>
                </section>

                <!-- Investment & Pricing -->
                <section class="section">
                    <h2>Investment & Pricing</h2>
                    <p>Our digital marketing services are structured to provide maximum value and measurable ROI. Below
                        is our comprehensive pricing breakdown:</p>

                    <div class="pricing-table">
                        <div class="pricing-header">
                            <h3>Digital Marketing Service Packages</h3>
                        </div>
                        <div class="pricing-row">
                            <strong>Service</strong>
                            <strong>Monthly Fee</strong>
                            <strong>Setup Fee</strong>
                        </div>
                        <div class="pricing-row">
                            <div>SEO Optimization & Management</div>
                            <div>${{ $seo_monthly ?? '2,500' }}</div>
                            <div>${{ $seo_setup ?? '1,500' }}</div>
                        </div>
                        <div class="pricing-row">
                            <div>PPC Campaign Management</div>
                            <div>${{ $ppc_monthly ?? '1,800' }}</div>
                            <div>${{ $ppc_setup ?? '800' }}</div>
                        </div>
                        <div class="pricing-row">
                            <div>Social Media Marketing</div>
                            <div>${{ $social_monthly ?? '1,200' }}</div>
                            <div>${{ $social_setup ?? '500' }}</div>
                        </div>
                        <div class="pricing-row">
                            <div>Content Marketing</div>
                            <div>${{ $content_monthly ?? '1,500' }}</div>
                            <div>${{ $content_setup ?? '600' }}</div>
                        </div>
                        <div class="pricing-row">
                            <div>Email Marketing</div>
                            <div>${{ $email_monthly ?? '800' }}</div>
                            <div>${{ $email_setup ?? '400' }}</div>
                        </div>
                        <div class="pricing-row" style="background: var(--bg-light); font-weight: bold;">
                            <div>Complete Package (20% Discount)</div>
                            <div>${{ $total_monthly ?? '6,240' }}</div>
                            <div>${{ $total_setup ?? '2,880' }}</div>
                        </div>
                    </div>

                    <p style="margin-top: 20px;"><strong>Ad Spend:</strong> Recommended monthly ad spend of
                        ${{ $ad_spend ?? '5,000' }} (managed separately, billed directly by platforms)</p>
                    <p><strong>Contract Terms:</strong> {{ $contract_length ?? '12-month' }} agreement with
                        {{ $payment_terms ?? '30-day' }} payment terms</p>
                </section>

                <!-- Expected Results -->
                <section class="section">
                    <h2>Expected Results & ROI</h2>
                    <p>Based on our experience with similar {{ $industry ?? 'businesses' }} and current market
                        conditions, here are the results you can expect:</p>

                    <div class="services-grid">
                        <div class="service-card">
                            <h4>3-Month Goals</h4>
                            <ul>
                                <li>{{ $goal_3m_1 ?? '50% increase in organic website traffic' }}</li>
                                <li>{{ $goal_3m_2 ?? '25 new qualified leads per month' }}</li>
                                <li>{{ $goal_3m_3 ?? '3:1 ROI on PPC campaigns' }}</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>6-Month Goals</h4>
                            <ul>
                                <li>{{ $goal_6m_1 ?? '100% increase in organic traffic' }}</li>
                                <li>{{ $goal_6m_2 ?? '50 new qualified leads per month' }}</li>
                                <li>{{ $goal_6m_3 ?? '4:1 ROI on total marketing spend' }}</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <h4>12-Month Goals</h4>
                            <ul>
                                <li>{{ $goal_12m_1 ?? '200% increase in organic traffic' }}</li>
                                <li>{{ $goal_12m_2 ?? '100 new qualified leads per month' }}</li>
                                <li>{{ $goal_12m_3 ?? '5:1 ROI on total marketing investment' }}</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- About Our Agency -->
                <section class="section">
                    <h2>About {{ $agency_name ?? 'Our Digital Marketing Agency' }}</h2>
                    <p>{{ $agency_description ?? 'We are a full-service digital marketing agency with over 8 years of experience helping businesses grow their online presence and achieve measurable results.' }}
                    </p>

                    <h3>Why Choose Us?</h3>
                    <ul style="margin-left: 20px; color: var(--text-light);">
                        <li>{{ $why_us_1 ?? 'Proven track record with 200+ successful campaigns' }}</li>
                        <li>{{ $why_us_2 ?? 'Certified Google Ads and Facebook Marketing experts' }}</li>
                        <li>{{ $why_us_3 ?? 'Transparent reporting and regular communication' }}</li>
                        <li>{{ $why_us_4 ?? 'Industry-specific experience in your market' }}</li>
                        <li>{{ $why_us_5 ?? 'Dedicated account manager and support team' }}</li>
                    </ul>

                    <h3>Client Success Stories</h3>
                    <p><strong>{{ $case_study_client ?? 'TechStart Solutions' }}:</strong>
                        {{ $case_study_result ?? 'Increased online leads by 300% and revenue by $2.4M within 18 months through our comprehensive digital marketing strategy.' }}
                    </p>
                    <div className="About-image">
                        <img src="{{ asset('storage/images/Aboutdigital.png') }}" alt="About Digita Marketing"
                            style="max-width: 100%; margin-top: 20px">
                    </div>
                </section>

                <!-- Next Steps -->
                <section class="section">
                    <h2>Next Steps</h2>
                    <p>Ready to transform your digital presence and drive measurable business growth? Here's how we can
                        get started:</p>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">Step 1</div>
                            <h4>Proposal Review & Discussion</h4>
                            <p>Schedule a call to discuss this proposal, answer your questions, and customize the
                                strategy for your specific needs.</p>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-date">Step 2</div>
                            <h4>Contract & Onboarding</h4>
                            <p>Sign the service agreement and complete our comprehensive onboarding process to
                                understand your business goals.</p>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-date">Step 3</div>
                            <h4>Strategy Implementation</h4>
                            <p>Begin immediate implementation of your digital marketing strategy with regular updates
                                and performance reports.</p>
                        </div>
                    </div>

                </section>

                <!-- Call to Action -->
                <div class="cta-section">
                    <h2>Ready to Accelerate Your Digital Growth?</h2>
                    <p>Let's discuss how our digital marketing expertise can help {{ $client_name ?? 'your business' }}
                        achieve {{ $primary_goal ?? 'your growth objectives' }}. Contact us today to schedule your
                        strategy consultation.</p>
                    <a href="mailto:{{ $contact_email ?? 'hello@agency.com' }}" class="cta-button">Schedule Your
                        Consultation</a>
                    <p style="margin-top: 20px; font-size: 0.9rem; opacity: 0.8;">
                        {{ $contact_name ?? 'John Smith' }} | {{ $contact_title ?? 'Digital Marketing Director' }}<br>
                        {{ $contact_phone ?? '(555) 123-4567' }} | {{ $contact_email ?? 'hello@agency.com' }}
                    </p>
                </div>

                <section class="download-section">
                    <div class="container">
                        <div class="download-content">
                            <h2>Get Your Free Digital Marketing Proposal Template</h2>
                            <p>Download this comprehensive proposal template and customize it for your business needs,
                                or use our
                                platform to create professional proposals instantly.</p>

                            <form class="download-form" id="downloadForm">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="firstName">First Name *</label>
                                        <input type="text" id="firstName" name="first_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name *</label>
                                        <input type="text" id="lastName" name="last_name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>

                                <div class="form-buttons">
                                    <button type="submit" class="btn btn-primary">Download Template</button>
                                    {{-- <a href="{{ route('auth.signup') }}" class="btn btn-secondary">Use Template Builder</a> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>
</body>

</html>

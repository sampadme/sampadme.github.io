// WHY: Experience page component for professional work history
// WHAT: Vue component displaying work experience, education, and achievements
// CONTEXT: Comprehensive professional background with timeline layout
// HOW: Vue 3 composition API with template for chronological experience display

const Experience = {
    // WHY: Template defines the experience page layout
    // WHAT: HTML template with work experience and education sections
    // HOW: Vue template syntax with Tailwind classes for timeline and card layouts
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the experience page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-indigo-50 to-blue-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Professional Experience</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            My journey in technology, from education to professional roles and ongoing learning
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Work Experience section -->
            <!-- WHAT: Professional work history in chronological order -->
            <!-- HOW: Timeline layout with detailed job descriptions -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Work Experience</h2>

                    <div class="relative">
                        <!-- WHY: Timeline line -->
                        <!-- WHAT: Vertical line connecting timeline items -->
                        <!-- HOW: Absolute positioned line with responsive visibility -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>

                        <div class="space-y-12">
                            <!-- WHY: EUROTEL BD ONLINE LTD work experience -->
                            <!-- WHAT: Current NOC Support Staff position -->
                            <!-- HOW: Timeline item with company details and responsibilities -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8 md:text-right">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4 md:justify-end">
                                            <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4 md:mr-0 md:ml-4">
                                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                </svg>
                                            </div>
                                            <div class="md:text-right">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">NOC - Support Staff</h3>
                                                <p class="text-blue-600 dark:text-blue-400 font-medium">EUROTEL BD ONLINE LTD.</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">July 2025 – Present</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm md:text-right">
                                            <li>• Monitor network performance and troubleshoot incidents</li>
                                            <li>• Provide customer support via calls and tickets</li>
                                            <li>• Diagnose and resolve technical issues, escalate critical problems</li>
                                            <li>• Maintain logs and reports for NOC operations</li>
                                            <li>• Assist clients with configurations and technical guidance</li>
                                            <li>• Identify and prevent recurring issues for smooth operations</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- WHY: Timeline dot -->
                                <!-- WHAT: Visual indicator for timeline -->
                                <!-- HOW: Circular element positioned on timeline line -->
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>

                            <!-- WHY: BRIGHT ACADEMY work experience -->
                            <!-- WHAT: Computer Operator position -->
                            <!-- HOW: Timeline item with responsibilities -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8"></div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-green-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Computer Operator</h3>
                                                <p class="text-green-600 dark:text-green-400 font-medium">BRIGHT ACADEMY</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Jan 2025 – Jun 2025</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm">
                                            <li>• Prepared exam questions, sheets, and study materials</li>
                                            <li>• Managed student results and attendance records</li>
                                            <li>• Maintained digital files and documentation</li>
                                            <li>• Handled various computer-related tasks efficiently</li>
                                            <li>• Performed data entry and report generation</li>
                                            <li>• Managed document processing and administrative tasks</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- WHY: EDGE Project, PSTU work experience -->
                            <!-- WHAT: Head of Document position -->
                            <!-- HOW: Timeline item with project coordination details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8 md:text-right">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4 md:justify-end">
                                            <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-3 mr-4 md:mr-0 md:ml-4">
                                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                            </div>
                                            <div class="md:text-right">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Head of Document</h3>
                                                <p class="text-purple-600 dark:text-purple-400 font-medium">EDGE Project, PSTU</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">July 2024 – Dec 2024</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm md:text-right">
                                            <li>• Prepared student exam sheets and evaluation results</li>
                                            <li>• Managed certificates and documentation processes</li>
                                            <li>• Monitored students via calls and maintained communication</li>
                                            <li>• Collected and managed feedback from participants</li>
                                            <li>• Coordinated staff and trainers effectively</li>
                                            <li>• Led a nine-member documentation team</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-purple-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>

                            <!-- WHY: HONDA SHOWROOM work experience -->
                            <!-- WHAT: Marketing Manager position -->
                            <!-- HOW: Timeline item with marketing responsibilities -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8"></div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-orange-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-orange-100 dark:bg-orange-900 rounded-full p-3 mr-4">
                                                <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Marketing Manager</h3>
                                                <p class="text-orange-600 dark:text-orange-400 font-medium">HONDA SHOWROOM - MAX MOTORS</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Mar 2024 – Jun 2024</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm">
                                            <li>• Managed social media accounts and customer interactions</li>
                                            <li>• Conducted digital and offline marketing campaigns</li>
                                            <li>• Organized field campaigns and festival promotions</li>
                                            <li>• Created graphics, banners, and promotional materials</li>
                                            <li>• Handled marketing for bikes, accessories, and gear</li>
                                            <li>• Coordinated promotional events and activities</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- WHY: ICON MEDICAL SERVICES work experience -->
                            <!-- WHAT: Marketing Executive position -->
                            <!-- HOW: Timeline item with healthcare marketing details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8 md:text-right">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4 md:justify-end">
                                            <div class="bg-red-100 dark:bg-red-900 rounded-full p-3 mr-4 md:mr-0 md:ml-4">
                                                <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                </svg>
                                            </div>
                                            <div class="md:text-right">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Marketing Executive</h3>
                                                <p class="text-red-600 dark:text-red-400 font-medium">ICON MEDICAL SERVICES</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Feb 2023 – Apr 2024</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm md:text-right">
                                            <li>• Marketed healthcare services through online campaigns</li>
                                            <li>• Conducted offline activities and promotional events</li>
                                            <li>• Assisted in organizing health awareness programs</li>
                                            <li>• Educated patients about preventive checkups</li>
                                            <li>• Promoted diagnostic tests and health packages</li>
                                            <li>• Managed customer outreach and engagement</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-red-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>

                            <!-- WHY: FAMOUS COMPUTER SYSTEM work experience -->
                            <!-- WHAT: Sales & Service position -->
                            <!-- HOW: Timeline item with IT sales and service details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8"></div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-teal-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-teal-100 dark:bg-teal-900 rounded-full p-3 mr-4">
                                                <svg class="w-8 h-8 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Sales & Service</h3>
                                                <p class="text-teal-600 dark:text-teal-400 font-medium">FAMOUS COMPUTER SYSTEM</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Mar 2018 – Nov 2020</p>
                                            </div>
                                        </div>
                                        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-sm">
                                            <li>• Sold computer parts based on customer requirements</li>
                                            <li>• Provided IT product service and software fixes</li>
                                            <li>• Worked on networking and surveillance systems</li>
                                            <li>• Handled server setup and IT infrastructure</li>
                                            <li>• Understood customer needs and delivered solutions</li>
                                            <li>• Managed technical support and troubleshooting</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY: Education section -->
            <!-- WHAT: Academic background and qualifications -->
            <!-- HOW: Card-based layout for educational achievements -->
            <section class="py-16 bg-gray-50 dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Education</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- WHY: University education -->
                        <!-- WHAT: Current BSc in CSE program -->
                        <!-- HOW: Education card with details -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">BSc in CSE</h3>
                                    <p class="text-blue-600 dark:text-blue-400 text-sm">University of Global Village</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Expected: 2028</p>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">Currently enrolled in Computer Science and Engineering program</p>
                        </div>

                        <!-- WHY: Polytechnic diploma -->
                        <!-- WHAT: Diploma in Computer Science -->
                        <!-- HOW: Education card with GPA -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Diploma in Computer Science</h3>
                                    <p class="text-green-600 dark:text-green-400 text-sm">INFRA Polytechnic Institute</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Completed: 2022</p>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">GPA: 3.25/4</p>
                        </div>

                        <!-- WHY: Higher Secondary Certificate -->
                        <!-- WHAT: HSC Science qualification -->
                        <!-- HOW: Education card with details -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">HSC Science</h3>
                                    <p class="text-purple-600 dark:text-purple-400 text-sm">Shahid Abdur Rab Serniabat College</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Completed: 2021</p>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">Science stream</p>
                        </div>

                        <!-- WHY: Secondary School Certificate -->
                        <!-- WHAT: SSC Science qualification -->
                        <!-- HOW: Education card with GPA -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-orange-100 dark:bg-orange-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">SSC Science</h3>
                                    <p class="text-orange-600 dark:text-orange-400 text-sm">Town High School, Barishal</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Completed: 2018</p>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">GPA: 3.73/5</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for experience page)
    setup() {
        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};


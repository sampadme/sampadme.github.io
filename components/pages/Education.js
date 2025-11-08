// WHY: Education page component for detailed academic background
// WHAT: Vue component displaying education, research, and contributions
// CONTEXT: Comprehensive educational profile with research and community contributions
// HOW: Vue 3 composition API with template for educational content sections

const Education = {
    // WHY: Template defines the education page layout
    // WHAT: HTML template with education details, research, and contributions
    // HOW: Vue template syntax with Tailwind classes for structured content display
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the education page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-teal-50 to-cyan-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Education & Research</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            My academic journey, research work, and contributions to the open-source community
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Academic Background section -->
            <!-- WHAT: Detailed educational qualifications -->
            <!-- HOW: Timeline-style layout for educational achievements -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Academic Background</h2>

                    <div class="relative">
                        <!-- WHY: Timeline line -->
                        <!-- WHAT: Vertical line connecting education items -->
                        <!-- HOW: Absolute positioned line for visual timeline -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gray-300 dark:bg-gray-600"></div>

                        <div class="space-y-12">
                            <!-- WHY: University of Global Village -->
                            <!-- WHAT: Current BSc in CSE program -->
                            <!-- HOW: Timeline item with university details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8 md:text-right">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4 md:justify-end">
                                            <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4 md:mr-0 md:ml-4">
                                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                                </svg>
                                            </div>
                                            <div class="md:text-right">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">BSc in Computer Science and Engineering</h3>
                                                <p class="text-blue-600 dark:text-blue-400 font-medium">University of Global Village</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Expected Graduation: 2028</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 dark:text-gray-300 text-sm md:text-right">
                                            Currently pursuing my Bachelor's degree in Computer Science and Engineering.
                                            Focused on advanced topics in software development, algorithms, and system design.
                                        </p>
                                    </div>
                                </div>
                                <!-- WHY: Timeline dot -->
                                <!-- WHAT: Visual indicator for timeline -->
                                <!-- HOW: Circular element on timeline line -->
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>

                            <!-- WHY: INFRA Polytechnic Institute -->
                            <!-- WHAT: Diploma in Computer Science -->
                            <!-- HOW: Timeline item with diploma details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8"></div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-green-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Diploma in Computer Science</h3>
                                                <p class="text-green-600 dark:text-green-400 font-medium">INFRA Polytechnic Institute</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Completed: 2022</p>
                                            </div>
                                        </div>
                                        <div class="text-gray-600 dark:text-gray-300 text-sm">
                                            <p class="mb-2">Successfully completed diploma with strong foundation in computer science fundamentals.</p>
                                            <p class="font-medium">GPA: 3.25/4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- WHY: Shahid Abdur Rab Serniabat College -->
                            <!-- WHAT: Higher Secondary Certificate -->
                            <!-- HOW: Timeline item with HSC details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8 md:text-right">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4 md:justify-end">
                                            <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-3 mr-4 md:mr-0 md:ml-4">
                                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                                </svg>
                                            </div>
                                            <div class="md:text-right">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Higher Secondary Certificate (HSC)</h3>
                                                <p class="text-purple-600 dark:text-purple-400 font-medium">Shahid Abdur Rab Serniabat College</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Completed: 2021</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 dark:text-gray-300 text-sm md:text-right">
                                            Completed Higher Secondary education with Science background, building foundation for technical studies.
                                        </p>
                                    </div>
                                </div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-purple-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>

                            <!-- WHY: Town High School, Barishal -->
                            <!-- WHAT: Secondary School Certificate -->
                            <!-- HOW: Timeline item with SSC details -->
                            <div class="relative flex flex-col md:flex-row items-center">
                                <div class="md:w-1/2 md:pr-8"></div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-orange-600 rounded-full border-4 border-white dark:border-gray-800"></div>
                                <div class="md:w-1/2 md:pl-8">
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-orange-100 dark:bg-orange-900 rounded-full p-3 mr-4">
                                                <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Secondary School Certificate (SSC)</h3>
                                                <p class="text-orange-600 dark:text-orange-400 font-medium">Town High School, Barishal</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Completed: 2018</p>
                                            </div>
                                        </div>
                                        <div class="text-gray-600 dark:text-gray-300 text-sm">
                                            <p class="mb-2">Completed secondary education with excellent academic performance.</p>
                                            <p class="font-medium">GPA: 3.73/5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY: Research & Publications section -->
            <!-- WHAT: Research work and technical writing -->
            <!-- HOW: Card layout for research items -->
            <section class="py-16 bg-gray-50 dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Research & Publications</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- WHY: Virtualmin research -->
                        <!-- WHAT: Apache and Nginx research paper -->
                        <!-- HOW: Research card with GitHub link -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Virtualmin – Apache and Nginx</h3>
                                    <p class="text-blue-600 dark:text-blue-400 text-sm">Technical Research</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                Comprehensive research on Virtualmin control panel, covering Apache and Nginx web server configurations,
                                virtual hosting setups, and server management best practices.
                            </p>
                            <a href="https://github.com/sampadme/research/blob/main/virtualmin.md" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                View on GitHub
                            </a>
                        </div>

                        <!-- WHY: 32-bit Number System research -->
                        <!-- WHAT: Number system encoding research -->
                        <!-- HOW: Research card with GitHub link -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">32-bit Number System</h3>
                                    <p class="text-green-600 dark:text-green-400 text-sm">Technical Research</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                In-depth research on 32-bit number system encoding, covering binary representation,
                                hexadecimal conversion, and practical applications in computer systems.
                            </p>
                            <a href="https://github.com/sampadme/research/blob/main/32_base_Encoding.md" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                View on GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY: Community Contributions section -->
            <!-- WHAT: Open-source and community involvement -->
            <!-- HOW: Grid layout for contribution items -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Community Contributions</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- WHY: Debian Testing contribution -->
                        <!-- WHAT: Debian Linux testing and bug reporting -->
                        <!-- HOW: Contribution card with link -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow text-center">
                            <div class="text-4xl mb-4">🐧</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Debian Testing</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                Active contributor to Debian Linux testing, helping improve stability and report bugs.
                            </p>
                            <a href="https://www.debian.org/intro/help" target="_blank" rel="noopener noreferrer"
                               class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium">
                                Learn More →
                            </a>
                        </div>

                        <!-- WHY: Windows Testing contribution -->
                        <!-- WHAT: Microsoft Windows testing program -->
                        <!-- HOW: Contribution card with link -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow text-center">
                            <div class="text-4xl mb-4">🪟</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Windows Testing</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                Microsoft Windows Insider program participant, providing feedback and testing new features.
                            </p>
                            <a href="https://learn.microsoft.com/en-us/users/sampadjr-4525/" target="_blank" rel="noopener noreferrer"
                               class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium">
                                View Profile →
                            </a>
                        </div>

                        <!-- WHY: GNOME Desktop contribution -->
                        <!-- WHAT: GNOME desktop environment contributions -->
                        <!-- HOW: Contribution card with link -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow text-center">
                            <div class="text-4xl mb-4">🖥️</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">GNOME Desktop Environment</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                Contributor to GNOME desktop environment, helping improve the Linux desktop experience.
                            </p>
                            <a href="https://wiki.gnome.org/Contribute.html" target="_blank" rel="noopener noreferrer"
                               class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium">
                                Get Involved →
                            </a>
                        </div>

                        <!-- WHY: Vvvebjs contribution -->
                        <!-- WHAT: Open-source web builder project -->
                        <!-- HOW: Contribution card -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow text-center">
                            <div class="text-4xl mb-4">🌐</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Vvvebjs</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                Contributor to Vvvebjs, an open-source web page builder and CMS.
                            </p>
                            <span class="text-gray-500 dark:text-gray-400 text-sm">Open Source Project</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for education page)
    setup() {
        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};


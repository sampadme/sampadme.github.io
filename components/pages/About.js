// WHY: About page component for personal and professional summary
// WHAT: Vue component displaying career objective, professional summary, and personal details
// CONTEXT: Detailed about page with comprehensive personal information
// HOW: Vue 3 composition API with template for structured content sections

const About = {
    // WHY: Template defines the about page layout
    // WHAT: HTML template with sections for career objective, summary, and personal info
    // HOW: Vue template syntax with Tailwind classes for responsive design
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the about page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">About Me</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            Get to know more about my background, experience, and passion for technology
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Main content sections -->
            <!-- WHAT: Grid layout for career objective and professional summary -->
            <!-- HOW: Responsive grid with card-like sections -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- WHY: Career Objective section -->
                        <!-- WHAT: Personal career goals and aspirations -->
                        <!-- HOW: Card layout with icon and content -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Career Objective</h2>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                To build a career in technology where I can apply my skills in design, development and IT. I want to keep learning, take on new challenges, and contribute to projects that make life easier and better for people. My aim is to grow as a professional while making a positive impact through technology.
                            </p>
                        </div>

                        <!-- WHY: Professional Summary section -->
                        <!-- WHAT: Overview of experience and expertise -->
                        <!-- HOW: Card layout with icon and detailed content -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Professional Summary</h2>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                                I am a CSE student with over nine years of experience in technology, design and management. I enjoy learning, problem-solving, and sharing knowledge to support others in their growth.
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                                My experience covers projects such as IT platforms and both online and offline marketplaces. Skilled in open-source, proprietary, legacy and modern frameworks, I am passionate about using technology to deliver meaningful solutions and being part of something greater than myself.
                            </p>
                        </div>
                    </div>

                    <!-- WHY: Personal Information section -->
                    <!-- WHAT: Additional personal details and interests -->
                    <!-- HOW: Full-width card with multiple subsections -->
                    <div class="mt-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Personal Information</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- WHY: Contact details -->
                            <!-- WHAT: Phone, email, and location -->
                            <!-- HOW: Grid items with icons and information -->
                            <div class="text-center">
                                <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-300">+8801710965015</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-green-100 dark:bg-green-900 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Email</h3>
                                <p class="text-gray-600 dark:text-gray-300">jrsampad@gmail.com</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Location</h3>
                                <p class="text-gray-600 dark:text-gray-300">Saw-road, Barishal, 8200</p>
                            </div>
                        </div>

                        <!-- WHY: Languages section -->
                        <!-- WHAT: Language proficiencies -->
                        <!-- HOW: Horizontal list with badges -->
                        <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 text-center">Languages</h3>
                            <div class="flex flex-wrap justify-center gap-4">
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-4 py-2 rounded-full text-sm font-medium">Bangla - Native</span>
                                <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-4 py-2 rounded-full text-sm font-medium">English - Professional</span>
                                <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-4 py-2 rounded-full text-sm font-medium">Hindi - Conversational</span>
                            </div>
                        </div>

                        <!-- WHY: Hobbies section -->
                        <!-- WHAT: Personal interests and hobbies -->
                        <!-- HOW: Grid layout with icons and descriptions -->
                        <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 text-center">Hobbies & Interests</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div class="text-3xl mb-3">🖥️</div>
                                    <h4 class="font-medium text-gray-900 dark:text-white mb-2">Homelab Setup</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Server management and infrastructure</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl mb-3">🎨</div>
                                    <h4 class="font-medium text-gray-900 dark:text-white mb-2">UI Design</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Creating beautiful user interfaces</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl mb-3">📊</div>
                                    <h4 class="font-medium text-gray-900 dark:text-white mb-2">Management & Planning</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Organizing and strategizing projects</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl mb-3">📱</div>
                                    <h4 class="font-medium text-gray-900 dark:text-white mb-2">Digital Everything</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Making everything digital and efficient</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl mb-3">🎮</div>
                                    <h4 class="font-medium text-gray-900 dark:text-white mb-2">E-Sports</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Competitive gaming and strategy</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl mb-3">🎙️</div>
                                    <h4 class="font-medium text-gray-900 dark:text-gray-300 mb-2">Podcast</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Creating and listening to podcasts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for about page)
    setup() {
        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};


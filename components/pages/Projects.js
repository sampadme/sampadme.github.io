// WHY: Projects page component for showcasing portfolio projects
// WHAT: Vue component displaying projects with descriptions and links
// CONTEXT: Portfolio showcase with detailed project information
// HOW: Vue 3 composition API with template for project cards

const Projects = {
    // WHY: Template defines the projects page layout
    // WHAT: HTML template with project showcase sections
    // HOW: Vue template syntax with Tailwind classes for responsive grid layouts
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the projects page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">My Projects</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            A showcase of my work in web development, IT platforms, and digital solutions
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Projects showcase section -->
            <!-- WHAT: Grid layout displaying individual projects -->
            <!-- HOW: Responsive grid with project cards -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- WHY: Rieoo project card -->
                        <!-- WHAT: WordPress management system project -->
                        <!-- HOW: Card layout with project details and technologies -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Rieoo</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">WordPress Management System</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    WordPress-based management system designed for Barishal Local Coaching.
                                    Provides comprehensive tools for educational content management and student administration.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">WordPress</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">PHP</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-xs">MySQL</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded text-xs">JavaScript</span>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <strong>Category:</strong> Educational Platform
                                </div>
                            </div>
                        </div>

                        <!-- WHY: D-Quiz project card -->
                        <!-- WHAT: Exam preparation Android app -->
                        <!-- HOW: Card layout with project details and technologies -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">D-Quiz</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Exam Preparation Android App</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    Comprehensive exam preparation application available on Google Play Store.
                                    Features interactive quizzes, progress tracking, and performance analytics for students.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">Android</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">Java</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-xs">SQLite</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-2 py-1 rounded text-xs">Google Play</span>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <strong>Category:</strong> Mobile Application • <strong>Platform:</strong> Google Play Store
                                </div>
                            </div>
                        </div>

                        <!-- WHY: eLagbe.Com project card -->
                        <!-- WHAT: Buy and sell classified website -->
                        <!-- HOW: Card layout with project details and technologies -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-orange-100 dark:bg-orange-900 rounded-full p-3 mr-4">
                                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">eLagbe.Com</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Buy and Sell Classified Website</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    Bikroy clone - comprehensive classifieds platform for buying and selling goods and services.
                                    Features user authentication, product listings, search functionality, and secure transactions.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-2 py-1 rounded text-xs">PHP</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">Laravel</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded text-xs">MySQL</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">Bootstrap</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-2 py-1 rounded text-xs">JavaScript</span>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <strong>Category:</strong> E-commerce Platform • <strong>Inspired by:</strong> Bikroy
                                </div>
                            </div>
                        </div>

                        <!-- WHY: WapHex project card -->
                        <!-- WHAT: IT forum and consultancy platform -->
                        <!-- HOW: Card layout with project details and technologies -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-indigo-100 dark:bg-indigo-900 rounded-full p-3 mr-4">
                                        <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">WapHex</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">IT Forum and Consultancy</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    IT forum and consultancy platform based in Barishal. Provides technical discussions,
                                    expert advice, and IT consulting services for the local community and beyond.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-2 py-1 rounded text-xs">WordPress</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">bbPress</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">PHP</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-xs">MySQL</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded text-xs">JavaScript</span>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    <strong>Category:</strong> Community Platform • <strong>Location:</strong> Barishal, Bangladesh
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WHY: Future projects section -->
                    <!-- WHAT: Placeholder for upcoming projects -->
                    <!-- HOW: Call-to-action style section -->
                    <div class="mt-16 text-center">
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-700 rounded-lg p-8">
                            <div class="text-4xl mb-4">🚀</div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">More Projects Coming Soon</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-6 max-w-2xl mx-auto">
                                I'm constantly working on new projects and exploring innovative solutions.
                                Stay tuned for updates on my latest work in web development, mobile apps, and IT solutions.
                            </p>
                            <div class="flex flex-wrap justify-center gap-4">
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-4 py-2 rounded-full text-sm font-medium">Full-Stack Web Apps</span>
                                <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-4 py-2 rounded-full text-sm font-medium">Mobile Applications</span>
                                <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-4 py-2 rounded-full text-sm font-medium">DevOps Solutions</span>
                                <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-4 py-2 rounded-full text-sm font-medium">IT Infrastructure</span>
                            </div>
                        </div>
                    </div>

                    <!-- WHY: Project statistics section -->
                    <!-- WHAT: Overview of project metrics -->
                    <!-- HOW: Statistics cards with icons -->
                    <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">4+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">10+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Technologies Used</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">5+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">100%</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for projects page)
    setup() {
        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};


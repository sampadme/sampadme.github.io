// WHY: Home page component matching luique design exactly
// WHAT: Vue component replicating the luique portfolio design
// CONTEXT: Main landing page with animated hero section and navigation
// HOW: Vue 3 composition API with template matching luique layout

const Home = {
    // WHY: Template defines the home page layout matching luique design
    // WHAT: HTML template with hero section, navigation, and sections
    // HOW: Vue template syntax with Tailwind classes matching luique styling
    template: `
        <div class="home-page pt-16">
            <!-- WHY: Hero section matching luique design -->
            <!-- WHAT: Main landing area with animated text and background -->
            <!-- HOW: Exact layout structure from luique template -->
            <section class="hero-section relative min-h-screen bg-gray-900 text-white overflow-hidden">
                <!-- WHY: Background overlay -->
                <!-- WHAT: Dark overlay for better text contrast -->
                <!-- HOW: Absolute positioned overlay -->
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- WHY: Animated background shapes -->
                <!-- WHAT: Decorative animated elements -->
                <!-- HOW: CSS animations for visual effect -->
                <div class="absolute top-20 left-10 w-32 h-32 bg-blue-500/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-20 right-10 w-24 h-24 bg-purple-500/20 rounded-full animate-pulse delay-1000"></div>
                <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-500/20 rounded-full animate-pulse delay-500"></div>

                <!-- WHY: Main content container -->
                <!-- WHAT: Centered content with hero text -->
                <!-- HOW: Flex layout for vertical centering -->
                <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
                    <div class="text-center max-w-4xl mx-auto">
                        <!-- WHY: Animated greeting -->
                        <!-- WHAT: "Hello" text with animation -->
                        <!-- HOW: CSS animation classes -->
                        <div class="mb-6">
                            <span class="inline-block text-lg md:text-xl text-blue-400 font-medium animate-fade-in-up">Hello, I'm</span>
                        </div>

                        <!-- WHY: Main name heading -->
                        <!-- WHAT: Large animated name display -->
                        <!-- HOW: Typography with animation effects -->
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold mb-6 animate-fade-in-up delay-200">
                            <span class="text-white">Sampad</span>
                            <br>
                            <span class="text-blue-400">Howlader</span>
                        </h1>

                        <!-- WHY: Profession subtitle -->
                        <!-- WHAT: Animated profession text -->
                        <!-- HOW: Smaller text with typewriter effect -->
                        <div class="mb-8 animate-fade-in-up delay-400">
                            <span class="text-xl md:text-2xl text-gray-300">Full Stack Developer & IT Professional</span>
                        </div>

                        <!-- WHY: Description paragraph -->
                        <!-- WHAT: Brief introduction text -->
                        <!-- HOW: Medium text with fade animation -->
                        <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-600">
                            Passionate about technology, design, and development. Creating meaningful solutions that make life easier and better for people.
                        </p>

                        <!-- WHY: CTA buttons -->
                        <!-- WHAT: Call-to-action buttons for contact and portfolio -->
                        <!-- HOW: Styled buttons with hover effects -->
                        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center mb-12 sm:mb-16 animate-fade-in-up delay-800">
                            <router-link to="/contact" class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                                <span>Get In Touch</span>
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </router-link>
                            <router-link to="/projects" class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-white text-white hover:bg-white hover:text-gray-900 font-medium rounded-lg transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                                <span>View My Work</span>
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </router-link>
                        </div>

                        <!-- WHY: Social links -->
                        <!-- WHAT: Social media and contact links -->
                        <!-- HOW: Horizontal list with icons -->
                        <div class="flex justify-center space-x-4 sm:space-x-6 md:space-x-8 animate-fade-in-up delay-1000">
                            <a href="https://github.com/sampadme" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-all duration-300 transform hover:scale-110 p-2 rounded-full hover:bg-white/10">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="mailto:jrsampad@gmail.com" class="text-gray-400 hover:text-white transition-all duration-300 transform hover:scale-110 p-2 rounded-full hover:bg-white/10">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>
                            <a href="tel:+8801710965015" class="text-gray-400 hover:text-white transition-all duration-300 transform hover:scale-110 p-2 rounded-full hover:bg-white/10">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </a>
                            <a href="https://sampad.me" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-all duration-300 transform hover:scale-110 p-2 rounded-full hover:bg-white/10">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- WHY: Scroll indicator -->
                <!-- WHAT: Animated scroll down indicator -->
                <!-- HOW: Bouncing arrow at bottom -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </div>
            </section>

            <!-- WHY: About preview section -->
            <!-- WHAT: Brief about section preview -->
            <!-- HOW: Card layout with personal info -->
            <section class="py-20 bg-gray-50 dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">About Me</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Get to know more about my background and passion for technology
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Full Stack Developer & IT Professional</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                With over 9 years of experience in technology, design and management, I enjoy learning, problem-solving, and sharing knowledge to support others in their growth.
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                My experience covers projects such as IT platforms and both online and offline marketplaces. Skilled in open-source, proprietary, legacy and modern frameworks.
                            </p>
                            <router-link to="/about" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-medium rounded-lg transition-colors duration-300">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </router-link>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                <div class="text-3xl mb-3">🎯</div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Problem Solver</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Analytical thinking and creative solutions</p>
                            </div>
                            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                <div class="text-3xl mb-3">🚀</div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Tech Enthusiast</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Always learning new technologies</p>
                            </div>
                            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                <div class="text-3xl mb-3">🤝</div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Team Player</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Collaborative and communicative</p>
                            </div>
                            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                                <div class="text-3xl mb-3">💡</div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Innovator</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Creative ideas and implementations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY: Skills preview section -->
            <!-- WHAT: Brief overview of technical skills -->
            <!-- HOW: Skills grid with progress indicators -->
            <section class="py-20 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Skills & Expertise</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Technologies and tools I work with
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl">⚛️</span>
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Frontend</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">React, Vue, HTML5, CSS3</p>
                        </div>
                        <div class="text-center">
                            <div class="w-20 h-20 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl">🖥️</span>
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Backend</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Node.js, PHP, Python</p>
                        </div>
                        <div class="text-center">
                            <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl">🗄️</span>
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Database</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">MySQL, MongoDB</p>
                        </div>
                        <div class="text-center">
                            <div class="w-20 h-20 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl">☁️</span>
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">DevOps</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Docker, AWS, Linux</p>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <router-link to="/skills" class="inline-flex items-center px-6 py-3 bg-gray-900 hover:bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 text-white font-medium rounded-lg transition-colors duration-300">
                            <span>View All Skills</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </router-link>
                    </div>
                </div>
            </section>

            <!-- WHY: Projects preview section -->
            <!-- WHAT: Featured projects showcase -->
            <!-- HOW: Project cards grid -->
            <section class="py-20 bg-gray-50 dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            Some of my recent work and accomplishments
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                                <span class="text-4xl">🛍️</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">eLagbe.Com</h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                    Bikroy clone - comprehensive classifieds platform for buying and selling goods.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">Laravel</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                                <span class="text-4xl">📱</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">D-Quiz</h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                    Exam preparation Android app available on Google Play Store.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded text-xs">Android</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">Java</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                                <span class="text-4xl">🏫</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Rieoo</h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                    WordPress management system for Barishal Local Coaching.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded text-xs">WordPress</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">PHP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <router-link to="/projects" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-medium rounded-lg transition-colors duration-300">
                            <span>View All Projects</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </router-link>
                    </div>
                </div>
            </section>

            <!-- WHY: Contact CTA section -->
            <!-- WHAT: Call-to-action for contact -->
            <!-- HOW: Centered CTA with background -->
            <section class="py-20 bg-blue-600 text-white">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Work Together</h2>
                    <p class="text-xl mb-8 text-blue-100">
                        I'm always interested in new opportunities and exciting projects.
                        Let's discuss how we can bring your ideas to life.
                    </p>
                    <router-link to="/contact" class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-white text-blue-600 hover:bg-gray-100 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700 font-medium rounded-lg transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                        <span>Get In Touch</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </router-link>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for home page)
    setup() {
        // WHY: Listen for theme changes to force component updates
        // WHAT: Handle theme change events to ensure component re-renders
        // HOW: Add event listener for custom theme-changed event
        Vue.onMounted(() => {
            document.addEventListener('theme-changed', () => {
                // Force update this component when theme changes
                // This ensures dark mode classes are applied correctly
            });
        });

        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};

// WHY: Footer component for site-wide footer
// WHAT: Vue component providing footer with links, social media, and contact info
// CONTEXT: Common component used across all pages for consistent footer
// HOW: Vue 3 composition API with template for footer layout

const Footer = {
    // WHY: Template defines the footer structure
    // WHAT: HTML template with footer sections and links
    // HOW: Vue template syntax with Tailwind classes for responsive design
    template: `
        <footer class="bg-gray-900 text-white">
            <!-- WHY: Main footer content -->
            <!-- WHAT: Footer sections with links and information -->
            <!-- HOW: Grid layout for organized footer content -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- WHY: About section -->
                    <!-- WHAT: Brief site description and personal info -->
                    <!-- HOW: Text content with branding -->
                    <div class="lg:col-span-2">
                        <h3 class="text-2xl font-bold mb-4">Sampad Howlader</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Full Stack Developer & IT Professional passionate about creating meaningful solutions
                            that make life easier and better for people. With over 9 years of experience in technology.
                        </p>
                        <div class="flex space-x-4">
                            <a href="https://github.com/sampadme" target="_blank" rel="noopener noreferrer"
                               class="text-gray-400 hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="mailto:jrsampad@gmail.com" class="text-gray-400 hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>
                            <a href="tel:+8801710965015" class="text-gray-400 hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </a>
                            <a href="https://sampad.me" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- WHY: Quick links section -->
                    <!-- WHAT: Navigation links to main sections -->
                    <!-- HOW: List of router-links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li>
                                <router-link to="/" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Home
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/about" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    About
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/skills" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Skills
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/projects" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Projects
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/experience" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Experience
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/education" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Education
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/contact" class="text-gray-400 hover:text-white transition-colors duration-300">
                                    Contact
                                </router-link>
                            </li>
                        </ul>
                    </div>

                    <!-- WHY: Contact info section -->
                    <!-- WHAT: Contact details and location -->
                    <!-- HOW: Contact information display -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="text-gray-400 text-sm">Saw-road, Barishal, 8200</p>
                                    <p class="text-gray-500 text-xs">Bangladesh</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:jrsampad@gmail.com" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">
                                    jrsampad@gmail.com
                                </a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <a href="tel:+8801710965015" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">
                                    +8801710965015
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WHY: Bottom footer bar -->
            <!-- WHAT: Copyright and additional links -->
            <!-- HOW: Centered bottom section with copyright -->
            <div class="border-t border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="text-gray-400 text-sm mb-4 md:mb-0">
                            © {{ currentYear }} Sampad Howlader. All rights reserved.
                        </div>
                        <div class="flex space-x-6 text-sm">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                                Privacy Policy
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                                Terms of Service
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                                Sitemap
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and computed properties
    setup() {
        // WHY: Current year for copyright
        // WHAT: Dynamic year display in footer
        // HOW: JavaScript Date object for current year
        const currentYear = new Date().getFullYear();

        // WHY: Return reactive data for template use
        // WHAT: Expose currentYear to template
        // HOW: Return object with computed properties
        return {
            currentYear
        };
    }
};

// WHY: Header component for top navigation bar
// WHAT: Vue component providing top navigation menu with theme toggle and mobile menu
// CONTEXT: Part of the Navigation system, separated for modularity
// HOW: Vue 3 composition API with props for shared state

const Header = {
    // WHY: Template defines the header navigation structure
    // WHAT: HTML template with navigation links, theme toggle, and mobile menu
    // HOW: Vue template syntax with Tailwind classes for styling
    template: `
        <!-- Top Navigation Header -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- WHY: Logo/brand section -->
                    <!-- WHAT: Clickable logo that navigates to home -->
                    <!-- HOW: Router-link for client-side navigation -->
                    <router-link to="/" class="flex items-center">
                        <img :src="isDark ? 'assets/sampad_logo_white.png' : 'assets/sampad_logo_black.png'" alt="Sampad Howlader Logo" class="h-8 w-auto">
                    </router-link>

                    <!-- WHY: Desktop navigation menu -->
                    <!-- WHAT: Horizontal menu for larger screens -->
                    <!-- HOW: Flex layout with router-links -->
                    <div class="hidden lg:flex space-x-6 xl:space-x-8">
                        <router-link to="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Home</router-link>
                        <router-link to="/about" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">About</router-link>
                        <router-link to="/skills" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Skills</router-link>
                        <router-link to="/projects" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Projects</router-link>
                        <router-link to="/experience" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Experience</router-link>
                        <router-link to="/education" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Education</router-link>
                        <router-link to="/contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors px-2 py-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Contact</router-link>
                    </div>

                    <!-- WHY: Theme toggle button -->
                    <!-- WHAT: Button to switch between light and dark modes -->
                    <!-- HOW: Click handler calls toggleTheme method -->
                    <button @click="toggleTheme" class="p-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                        <svg v-if="isDark" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
                        </svg>
                        <svg v-else class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                    </button>

                    <!-- WHY: Mobile menu button -->
                    <!-- WHAT: Hamburger menu for mobile devices -->
                    <!-- HOW: Toggle mobile menu visibility -->
                    <button @click="toggleMobileMenu" class="lg:hidden p-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- WHY: Mobile navigation menu -->
                <!-- WHAT: Vertical menu for mobile screens -->
                <!-- HOW: Conditional rendering based on mobileMenuOpen state -->
                <div v-if="mobileMenuOpen" class="lg:hidden pb-4 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 mt-2 rounded-b-lg shadow-lg">
                    <router-link to="/" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Home</router-link>
                    <router-link to="/about" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">About</router-link>
                    <router-link to="/skills" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Skills</router-link>
                    <router-link to="/projects" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Projects</router-link>
                    <router-link to="/experience" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Experience</router-link>
                    <router-link to="/education" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Education</router-link>
                    <router-link to="/contact" @click="closeMobileMenu" class="block py-3 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Contact</router-link>
                </div>
            </div>
        </nav>
    `,

    // WHY: Props for shared state from parent
    // WHAT: Receive reactive data and methods from Navigation component
    // HOW: Vue props for component communication
    props: {
        isDark: Boolean,
        toggleTheme: Function,
        mobileMenuOpen: Boolean,
        toggleMobileMenu: Function,
        closeMobileMenu: Function
    }
};


// WHY: Navigation component for site-wide navigation
// WHAT: Vue component providing navigation menu with theme toggle.
// CONTEXT: Common component used across all pages for consistent navigation
// HOW: Vue 3 composition API with reactive data for theme management

// WHY: Import Header and FloatingNav components
// WHAT: Separate components for modularity
// HOW: ES6 import syntax


const Navigation = {
    // WHY: Template defines the navigation structure
    // WHAT: HTML template with Header and FloatingNav components
    // HOW: Vue template syntax with component composition
    template: `
        <Header
            :isDark="isDark"
            :toggleTheme="toggleTheme"
            :mobileMenuOpen="mobileMenuOpen"
            :toggleMobileMenu="toggleMobileMenu"
            :closeMobileMenu="closeMobileMenu"
        />
        <FloatingNav
            :isDark="isDark"
            :toggleTheme="toggleTheme"
        />
    `,

    // WHY: Components registration
    // WHAT: Register child components for use in template
    // HOW: Vue components object
    components: {
        Header,
        FloatingNav
    },

    // WHY: Setup function for reactive data and methods
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods for the component
    setup() {
        // WHY: Reactive data for theme and mobile menu state
        // WHAT: Vue reactive references for component state
        // HOW: Vue 3 ref() for reactive variables
        const isDark = Vue.ref(false);
        const mobileMenuOpen = Vue.ref(false);

        // WHY: Initialize theme from localStorage or system preference
        // WHAT: Load saved theme preference on component mount
        // HOW: Check localStorage and matchMedia for system preference
        Vue.onMounted(() => {
            // WHAT: Check for saved theme preference
            // HOW: localStorage API for persistent theme setting
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                isDark.value = savedTheme === 'dark';
            } else {
                // WHAT: Use system preference if no saved theme
                // HOW: matchMedia API for prefers-color-scheme
                isDark.value = window.matchMedia('(prefers-color-scheme: dark)').matches;
            }
            // WHAT: Apply theme immediately and ensure it's applied
            // HOW: Call applyTheme with a small delay to ensure DOM is ready
            setTimeout(() => {
                applyTheme();
            }, 0);
        });

        // WHY: Apply theme to document
        // WHAT: Function to update document theme attribute and Tailwind dark class
        // HOW: DOM manipulation for theme switching
        const applyTheme = () => {
            // WHAT: Set data-theme attribute on document element
            // HOW: DOM element attribute manipulation
            document.documentElement.setAttribute('data-theme', isDark.value ? 'dark' : 'light');
            // WHAT: Toggle Tailwind dark class on document element
            // HOW: Class manipulation for Tailwind dark mode
            if (isDark.value) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            // WHAT: Force update all components to re-render with new theme
            // HOW: Dispatch custom event to trigger component updates
            document.dispatchEvent(new CustomEvent('theme-changed', { detail: { isDark: isDark.value } }));
        };

        // WHY: Toggle between light and dark themes
        // WHAT: Method to switch theme and save preference
        // HOW: Toggle reactive value and update localStorage
        const toggleTheme = () => {
            // WHAT: Toggle theme state
            // HOW: Vue reactive value update
            isDark.value = !isDark.value;
            // WHAT: Save theme preference
            // HOW: localStorage API for persistence
            localStorage.setItem('theme', isDark.value ? 'dark' : 'light');
            // WHAT: Apply theme changes
            // HOW: Call applyTheme function
            applyTheme();
        };

        // WHY: Toggle mobile menu visibility
        // WHAT: Method to show/hide mobile navigation
        // HOW: Toggle reactive boolean value
        const toggleMobileMenu = () => {
            // WHAT: Toggle mobile menu state
            // HOW: Vue reactive value update
            mobileMenuOpen.value = !mobileMenuOpen.value;
        };

        // WHY: Close mobile menu
        // WHAT: Method to hide mobile navigation
        // HOW: Set reactive value to false
        const closeMobileMenu = () => {
            // WHAT: Close mobile menu
            // HOW: Vue reactive value update
            mobileMenuOpen.value = false;
        };

        // WHY: Return reactive data and methods for template use
        // WHAT: Expose component API
        // HOW: Return object with reactive properties and methods
        return {
            isDark,
            mobileMenuOpen,
            toggleTheme,
            toggleMobileMenu,
            closeMobileMenu
        };
    }
};


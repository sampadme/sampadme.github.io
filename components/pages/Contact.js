// WHY: Contact page component for contact information and form
// WHAT: Vue component displaying contact details, social links, and contact form
// CONTEXT: Contact page with professional contact information and communication channels
// HOW: Vue 3 composition API with template for contact sections

const Contact = {
    // WHY: Template defines the contact page layout
    // WHAT: HTML template with contact information, social links, and contact form
    // HOW: Vue template syntax with Tailwind classes for responsive design
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the contact page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-pink-50 to-rose-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Get In Touch</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            Let's connect and discuss opportunities, projects, or just have a conversation about technology
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Contact information and form section -->
            <!-- WHAT: Contact details and contact form in responsive layout -->
            <!-- HOW: Grid layout with contact info cards and form -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- WHY: Contact information section -->
                        <!-- WHAT: Professional contact details and social links -->
                        <!-- HOW: Card-based layout with contact methods -->
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Contact Information</h2>

                            <div class="space-y-6">
                                <!-- WHY: Phone contact -->
                                <!-- WHAT: Phone number with click-to-call link -->
                                <!-- HOW: Contact card with phone icon -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center">
                                        <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-3 mr-4">
                                            <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Phone</h3>
                                            <a href="tel:+8801710965015" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                                                +8801710965015
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- WHY: Email contact -->
                                <!-- WHAT: Email address with mailto link -->
                                <!-- HOW: Contact card with email icon -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center">
                                        <div class="bg-green-100 dark:bg-green-900 rounded-full p-3 mr-4">
                                            <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Email</h3>
                                            <a href="mailto:jrsampad@gmail.com" class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300">
                                                jrsampad@gmail.com
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- WHY: Location information -->
                                <!-- WHAT: Physical address and location -->
                                <!-- HOW: Contact card with location icon -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center">
                                        <div class="bg-purple-100 dark:bg-purple-900 rounded-full p-3 mr-4">
                                            <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Location</h3>
                                            <p class="text-gray-600 dark:text-gray-300">Saw-road, Barishal, 8200</p>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- WHY: Social links section -->
                            <!-- WHAT: Professional social media and online presence -->
                            <!-- HOW: Grid of social media buttons -->
                            <div class="mt-12">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">Connect Online</h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <a href="https://github.com/sampadme" target="_blank" rel="noopener noreferrer"
                                       class="bg-gray-900 text-white rounded-lg p-4 hover:bg-gray-800 transition-colors text-center">
                                        <div class="text-2xl mb-2">🐙</div>
                                        <div class="text-sm font-medium">GitHub</div>
                                    </a>
                                    <a href="https://sampad.me" target="_blank" rel="noopener noreferrer"
                                       class="bg-blue-600 text-white rounded-lg p-4 hover:bg-blue-700 transition-colors text-center">
                                        <div class="text-2xl mb-2">🌐</div>
                                        <div class="text-sm font-medium">Portfolio</div>
                                    </a>
                                </div>
                            </div>

                            <!-- WHY: Availability information -->
                            <!-- WHAT: Current availability status -->
                            <!-- HOW: Status card with availability details -->
                            <div class="mt-8 bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-800 dark:to-gray-700 rounded-lg p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-3 animate-pulse"></div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Available for Opportunities</h3>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">
                                    I'm currently available for freelance projects, full-time positions, and consulting opportunities.
                                    Feel free to reach out for collaboration or discussion.
                                </p>
                            </div>
                        </div>

                        <!-- WHY: Contact form section -->
                        <!-- WHAT: Form for sending messages and inquiries -->
                        <!-- HOW: Form with input fields and submit button -->
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Send a Message</h2>

                            <form @submit.prevent="submitForm" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <!-- WHY: Name input field -->
                                <!-- WHAT: User's full name input -->
                                <!-- HOW: Text input with label and validation -->
                                <div class="mb-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Full Name *
                                    </label>
                                    <input
                                        v-model="form.name"
                                        type="text"
                                        id="name"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                        placeholder="Your full name"
                                    >
                                </div>

                                <!-- WHY: Email input field -->
                                <!-- WHAT: User's email address input -->
                                <!-- HOW: Email input with validation -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Email Address *
                                    </label>
                                    <input
                                        v-model="form.email"
                                        type="email"
                                        id="email"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                        placeholder="your.email@example.com"
                                    >
                                </div>

                                <!-- WHY: Subject input field -->
                                <!-- WHAT: Message subject input -->
                                <!-- HOW: Text input for message topic -->
                                <div class="mb-6">
                                    <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Subject *
                                    </label>
                                    <input
                                        v-model="form.subject"
                                        type="text"
                                        id="subject"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                        placeholder="What's this about?"
                                    >
                                </div>

                                <!-- WHY: Message textarea -->
                                <!-- WHAT: Main message content input -->
                                <!-- HOW: Textarea with character limit -->
                                <div class="mb-6">
                                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Message *
                                    </label>
                                    <textarea
                                        v-model="form.message"
                                        id="message"
                                        required
                                        rows="6"
                                        maxlength="1000"
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-vertical"
                                        placeholder="Tell me about your project or inquiry..."
                                    ></textarea>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        {{ form.message.length }}/1000 characters
                                    </p>
                                </div>

                                <!-- WHY: Submit button -->
                                <!-- WHAT: Form submission button -->
                                <!-- HOW: Button with loading state -->
                                <button
                                    type="submit"
                                    :disabled="isSubmitting"
                                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transition-colors font-medium"
                                >
                                    <span v-if="isSubmitting" class="inline-flex items-center">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Sending...
                                    </span>
                                    <span v-else>Send Message</span>
                                </button>

                                <!-- WHY: Form status message -->
                                <!-- WHAT: Success or error message display -->
                                <!-- HOW: Conditional message display -->
                                <div v-if="submitMessage" class="mt-4 p-4 rounded-lg" :class="submitMessage.type === 'success' ? 'bg-green-50 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-50 text-red-800 dark:bg-red-900 dark:text-red-200'">
                                    {{ submitMessage.text }}
                                </div>
                            </form>

                            <!-- WHY: Alternative contact methods -->
                            <!-- WHAT: Additional ways to get in touch -->
                            <!-- HOW: List of alternative contact options -->
                            <div class="mt-8 text-center">
                                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                    Prefer a different way to connect?
                                </p>
                                <div class="flex flex-wrap justify-center gap-4">
                                    <a href="https://github.com/sampadme" target="_blank" rel="noopener noreferrer"
                                       class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-sm">
                                        💬 GitHub Discussions
                                    </a>
                                    <span class="text-gray-400">•</span>
                                    <a href="https://sampad.me" target="_blank" rel="noopener noreferrer"
                                       class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white text-sm">
                                        📋 Schedule a Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY: References section -->
            <!-- WHAT: Professional references for credibility -->
            <!-- HOW: References display with contact information -->
            <section class="py-16 bg-gray-50 dark:bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-12 text-center">Professional References</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- WHY: Advocate Asoke Kumar Ghosh reference -->
                        <!-- WHAT: Legal professional reference -->
                        <!-- HOW: Reference card with contact details -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center">
                            <div class="text-4xl mb-4">⚖️</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Advocate Asoke Kumar Ghosh</h3>
                            <p class="text-blue-600 dark:text-blue-400 text-sm mb-2">District & Sessions Judge's Court, Barishal</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Legal Professional & Reference</p>
                            <a href="tel:+8801710859160" class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                +8801710859160
                            </a>
                        </div>

                        <!-- WHY: Professor Chinmay Bepery reference -->
                        <!-- WHAT: Academic reference -->
                        <!-- HOW: Reference card with contact details -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center">
                            <div class="text-4xl mb-4">🎓</div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Professor Chinmay Bepery</h3>
                            <p class="text-blue-600 dark:text-blue-400 text-sm mb-2">Patuakhali Science & Technology University (PSTU)</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Academic Mentor & Reference</p>
                            <a href="tel:+8801922361666" class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium">
                                +8801922361666
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for form handling and component logic
    // WHAT: Vue 3 composition API setup function with reactive form data
    // HOW: Returns reactive data and methods for form management
    setup() {
        // WHY: Reactive form data
        // WHAT: Form input values stored in reactive object
        // HOW: Vue 3 reactive() for form state management
        const form = Vue.reactive({
            name: '',
            email: '',
            subject: '',
            message: ''
        });

        // WHY: Form submission state
        // WHAT: Loading state and submission message
        // HOW: Vue 3 ref() for reactive state
        const isSubmitting = Vue.ref(false);
        const submitMessage = Vue.ref(null);

        // WHY: Form submission handler
        // WHAT: Method to handle form submission and validation
        // HOW: Async function with form validation and API simulation
        const submitForm = async () => {
            // WHAT: Set submitting state
            // HOW: Update reactive loading state
            isSubmitting.value = true;
            submitMessage.value = null;

            try {
                // WHAT: Basic form validation
                // HOW: Check required fields and email format
                if (!form.name.trim() || !form.email.trim() || !form.subject.trim() || !form.message.trim()) {
                    throw new Error('Please fill in all required fields.');
                }

                // WHAT: Email validation
                // HOW: Simple regex check for email format
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(form.email)) {
                    throw new Error('Please enter a valid email address.');
                }

                // WHAT: Simulate form submission (replace with actual API call)
                // HOW: Async timeout to simulate network request
                await new Promise(resolve => setTimeout(resolve, 2000));

                // WHAT: Success handling
                // HOW: Clear form and show success message
                submitMessage.value = {
                    type: 'success',
                    text: 'Thank you for your message! I\'ll get back to you soon.'
                };

                // WHAT: Reset form after successful submission
                // HOW: Clear all form fields
                form.name = '';
                form.email = '';
                form.subject = '';
                form.message = '';

            } catch (error) {
                // WHAT: Error handling
                // HOW: Display error message to user
                submitMessage.value = {
                    type: 'error',
                    text: error.message || 'Something went wrong. Please try again.'
                };
            } finally {
                // WHAT: Reset submitting state
                // HOW: Clear loading state regardless of outcome
                isSubmitting.value = false;
            }
        };

        // WHY: Return reactive data and methods for template use
        // WHAT: Expose component API
        // HOW: Return object with reactive properties and methods
        return {
            form,
            isSubmitting,
            submitMessage,
            submitForm
        };
    }
};


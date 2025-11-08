// WHY: Skills page component for displaying technical skills and tools
// WHAT: Vue component showcasing skills, tools & technologies, and courses/training
// CONTEXT: Comprehensive skills overview with categorized sections
// HOW: Vue 3 composition API with template for organized skill presentation

const Skills = {
    // WHY: Template defines the skills page layout
    // WHAT: HTML template with sections for different skill categories
    // HOW: Vue template syntax with Tailwind classes for responsive grid layouts
    template: `
        <div class="min-h-screen pt-20">
            <!-- WHY: Page header section -->
            <!-- WHAT: Title and introduction for the skills page -->
            <!-- HOW: Centered heading with background styling -->
            <section class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-900 dark:to-gray-800 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Skills & Expertise</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            A comprehensive overview of my technical skills, tools, and professional development
                        </p>
                    </div>
                </div>
            </section>

            <!-- WHY: Main skills sections -->
            <!-- WHAT: Organized sections for different skill categories -->
            <!-- HOW: Sequential sections with cards and grids -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- WHY: Core Skills section -->
                    <!-- WHAT: Primary skills and competencies -->
                    <!-- HOW: Grid layout with skill cards -->
                    <div class="mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Core Skills</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">🎨</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">UI/UX Design</h3>
                                <p class="text-gray-600 dark:text-gray-300">Creating intuitive and beautiful user interfaces with focus on user experience</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">💻</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Web Development</h3>
                                <p class="text-gray-600 dark:text-gray-300">Building responsive and dynamic web applications using modern technologies</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">🖥️</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">System Administration</h3>
                                <p class="text-gray-600 dark:text-gray-300">Managing servers, networks, and IT infrastructure efficiently</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">🔒</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">IT Security</h3>
                                <p class="text-gray-600 dark:text-gray-300">Implementing security measures and protecting digital assets</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">🌐</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Network Cabling</h3>
                                <p class="text-gray-600 dark:text-gray-300">Designing and implementing network infrastructure and cabling systems</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">📹</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">CCTV Systems</h3>
                                <p class="text-gray-600 dark:text-gray-300">Installing and maintaining surveillance and security camera systems</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">🖼️</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Graphic Design</h3>
                                <p class="text-gray-600 dark:text-gray-300">Creating visual content and graphics for various media platforms</p>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                                <div class="text-4xl mb-4">⌨️</div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Fast Typing</h3>
                                <p class="text-gray-600 dark:text-gray-300">Efficient keyboard skills for improved productivity and documentation</p>
                            </div>
                        </div>
                    </div>

                    <!-- WHY: Tools & Technologies section -->
                    <!-- WHAT: Technical tools and technologies organized by category -->
                    <!-- HOW: Accordion-style expandable sections -->
                    <div class="mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Tools & Technologies</h2>

                        <!-- WHY: Programming & Web Development -->
                        <!-- WHAT: Programming languages and web technologies -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm font-medium px-3 py-1 rounded-full mr-3">Programming</span>
                                    Programming & Web Development
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">JavaScript (ES6+)</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">PHP</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">WordPress</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">HTML5/CSS3/SCSS</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">Svelte</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">React (basic)</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">Laravel</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">MySQL</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">Node.js (basic)</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">TailwindCSS</span>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">Bootstrap</span>
                                </div>
                            </div>
                        </div>

                        <!-- WHY: DevOps & Infrastructure -->
                        <!-- WHAT: Development operations and infrastructure tools -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm font-medium px-3 py-1 rounded-full mr-3">DevOps</span>
                                    DevOps & Infrastructure
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Docker</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Git & GitHub</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Nginx</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Apache</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Bash Scripting</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Virtualmin/Webmin</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">HetiaCP</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">Nextcloud</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">OpenMediaVault</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">VMware</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">VirtualBox</span>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm">QEMU KVM</span>
                                </div>
                            </div>
                        </div>

                        <!-- WHY: Networking & Security -->
                        <!-- WHAT: Network and security technologies -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-sm font-medium px-3 py-1 rounded-full mr-3">Network</span>
                                    Networking & Security
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">Cisco Packet Tracer</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">GNS3</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">EVE-NG</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">SSH/Telnet</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">nmap</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">Pi-hole</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">AdGuard Home</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">Firewall basics (UFW)</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">Wireshark Basic</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">OpenWRT</span>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-3 py-1 rounded-full text-sm">VPN/OpenVPN</span>
                                </div>
                            </div>
                        </div>

                        <!-- WHY: Cloud & APIs -->
                        <!-- WHAT: Cloud services and API technologies -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-sm font-medium px-3 py-1 rounded-full mr-3">Cloud</span>
                                    Cloud & APIs
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Cloudflare</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Ngrok</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Tailscale</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Firebase</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Postman</span>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">REST API development</span>
                                </div>
                            </div>
                        </div>

                        <!-- WHY: Design & Productivity Tools -->
                        <!-- WHAT: Design software and productivity tools -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-sm font-medium px-3 py-1 rounded-full mr-3">Design</span>
                                    Design & Productivity Tools
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Figma</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Photoshop</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Canva</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Adobe XD</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">LibreOffice</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Microsoft Office</span>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm">Bangla typing in Avro</span>
                                </div>
                            </div>
                        </div>

                        <!-- WHY: Operating Systems -->
                        <!-- WHAT: Operating systems proficiency -->
                        <!-- HOW: Expandable card with badge layout -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-6 overflow-hidden">
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-sm font-medium px-3 py-1 rounded-full mr-3">OS</span>
                                    Operating Systems
                                </h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Debian OS</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Proxmox</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">TrueNAS</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Ubuntu</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Kali Linux</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Windows</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">MacOS</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Ubuntu Server</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">AntiX</span>
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Bodhi Linux</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WHY: Courses & Training section -->
                    <!-- WHAT: Professional certifications and training courses -->
                    <!-- HOW: Timeline-style layout with course details -->
                    <div class="mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Courses & Training</h2>
                        <div class="space-y-6">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">CISCO Networking</h3>
                                        <p class="text-gray-600 dark:text-gray-300">NetAcad Academy, Udemy</p>
                                    </div>
                                    <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Networking</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Digital Marketing</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Udemy, Online</p>
                                    </div>
                                    <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Marketing</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Web Development</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Satrong IT System, Udemy, Scrimba</p>
                                    </div>
                                    <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Development</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">UI/UX Design</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Muhib Ahmed, Udemy, YouTube</p>
                                    </div>
                                    <span class="bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Design</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">CompTIA IT Fundamentals IFT+</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Polytechnic, Udemy, YouTube</p>
                                    </div>
                                    <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Certification</span>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">CompTIA A+</h3>
                                        <p class="text-gray-600 dark:text-gray-300">Udemy, YouTube</p>
                                    </div>
                                    <span class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Certification</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WHY: Certifications section -->
                    <!-- WHAT: Professional certifications earned -->
                    <!-- HOW: Grid layout with certification cards -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 text-center">Certifications</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-lg shadow-lg p-6 text-center">
                                <div class="text-3xl mb-3">🏆</div>
                                <h3 class="text-lg font-semibold mb-2">EDGE – Microsoft Office</h3>
                                <p class="text-sm opacity-90">Microsoft Office Specialist</p>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-lg p-6 text-center">
                                <div class="text-3xl mb-3">🎯</div>
                                <h3 class="text-lg font-semibold mb-2">CompTIA IT Fundamentals IFT+</h3>
                                <p class="text-sm opacity-90">IT Fundamentals Certification</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-lg shadow-lg p-6 text-center">
                                <div class="text-3xl mb-3">💻</div>
                                <h3 class="text-lg font-semibold mb-2">CompTIA A+</h3>
                                <p class="text-sm opacity-90">Hardware & Software Certification</p>
                            </div>
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-lg shadow-lg p-6 text-center">
                                <div class="text-3xl mb-3">🌐</div>
                                <h3 class="text-lg font-semibold mb-2">Satrong System – Web Design</h3>
                                <p class="text-sm opacity-90">Web Design Certification</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    `,

    // WHY: Setup function for component logic
    // WHAT: Vue 3 composition API setup function
    // HOW: Returns reactive data and methods (currently minimal for skills page)
    setup() {
        // WHY: Component setup - currently no reactive data needed
        // WHAT: Placeholder for future reactive properties
        // HOW: Return empty object for now
        return {};
    }
};

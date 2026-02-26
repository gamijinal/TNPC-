 <?php 
 include 'header.php';
 ?>
 <html>
    <head>
<script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
 <!-- PROGRAMS SECTION -->
    <section id="programs" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h4 class="text-amber-500 font-bold uppercase tracking-wider mb-2">Academics</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Discover Your Path to Success</h2>
                <p class="text-slate-600">Our industry-linked programs are designed in collaboration with experts to match current market demands. Choose the path that shapes your career.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- BCA Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                    <div class="h-48 bg-blue-900 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')] bg-cover bg-center mix-blend-overlay"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i data-lucide="monitor" class="w-16 h-16 text-white opacity-80 group-hover:scale-110 transition-transform duration-500"></i>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-blue-900">BCA</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-full">3 Years / 6 Sem</span>
                        </div>
                        <h4 class="text-lg font-semibold text-slate-800 mb-3">Bachelor of Computer Applications</h4>
                        <p class="text-slate-600 mb-6">
                            Build the tech future. A degree focused on programming, app development, AI, cybersecurity, and cloud computing.
                        </p>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-amber-500"></div> Web & Mobile Dev (HTML, PHP, Android)
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-amber-500"></div> Programming (C, C++, Java, Python)
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-amber-500"></div> Database & Cloud Infrastructure
                            </div>
                        </div>
                        <button class="w-full py-3 bg-slate-100 hover:bg-blue-900 hover:text-white text-blue-900 font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <!-- BBA Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                    <div class="h-48 bg-amber-500 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')] bg-cover bg-center mix-blend-overlay"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i data-lucide="briefcase" class="w-16 h-16 text-white opacity-80 group-hover:scale-110 transition-transform duration-500"></i>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-blue-900">BBA</h3>
                            <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full">3 Years / 6 Sem</span>
                        </div>
                        <h4 class="text-lg font-semibold text-slate-800 mb-3">Bachelor of Business Administration</h4>
                        <p class="text-slate-600 mb-6">
                            Lead the business world. Equip yourself with the business knowledge and leadership skills to stand out in the corporate world.
                        </p>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div> Marketing & Finance Strategies
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div> Entrepreneurship & Startup Skills
                            </div>
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div class="w-2 h-2 rounded-full bg-blue-500"></div> Soft Skills & Corporate Leadership
                            </div>
                        </div>
                        
                        <button class="w-full py-3 bg-slate-100 hover:bg-amber-500 hover:text-white text-blue-900 font-bold rounded-lg transition-colors flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
    </html>
     <?php 
 include 'footer.php';
 ?>

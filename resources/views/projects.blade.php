<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Projects - Albert Melendres</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
      // Tailwind config with dark mode
      tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {
            colors: {
              primary: {
                50: "#eef6ff",
                100: "#d9eaff",
                200: "#bfdbfe",
                300: "#93c5fd",
                400: "#60a5fa",
                500: "#3b82f6",
                600: "#2563eb",
                700: "#1d4ed8",
                800: "#1e40af",
                900: "#1e3a8a",
              },
              slate: {
                50: "#f8fafc",
                100: "#f1f5f9",
                200: "#e2e8f0",
                300: "#cbd5e1",
                400: "#94a3b8",
                500: "#64748b",
                600: "#475569",
                700: "#334155",
                800: "#1e293b",
                900: "#0f172a",
                950: "#020617",
              },
            },
          },
        },
      };
    </script>
    <style>
      * {
        @apply transition-colors;
      }
    </style>
    <script>
      // Dark mode initialization
      const savedTheme = localStorage.getItem('theme') || 'light';
      if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      }
    </script>
  </head>
  <body class="bg-white text-slate-900 dark:bg-slate-950 dark:text-white transition-colors">
    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-white dark:from-slate-950 dark:to-slate-900">
      <!-- Navigation -->
      <nav class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur-sm dark:border-slate-800 dark:bg-slate-950/95">
        <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between">
            <a href="/" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
              <span class="font-semibold">Back to Home</span>
            </a>
            
            <h1 class="text-2xl font-bold">All Projects</h1>
            
            <!-- Dark Mode Toggle -->
            <button
              id="themeToggle"
              class="rounded-lg p-2 hover:bg-slate-100 dark:hover:bg-slate-800"
              aria-label="Toggle dark mode"
            >
              <svg
                id="sunIcon"
                class="h-6 w-6 text-yellow-500"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 3v1m0 16v1m9-9h-1m-16 0H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                />
              </svg>
              <svg
                id="moonIcon"
                class="h-6 w-6 hidden text-blue-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                />
              </svg>
            </button>
          </div>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="mb-8">
          <p class="text-slate-600 dark:text-slate-400">
            A collection of projects I've built and worked on throughout my career.
          </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Project 1 -->
          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 01
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Barangay 12 Health Management Center
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              CRM - Healthcare Appointment Scheduling System for managing patient appointments and health records.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

          <!-- Project 2 -->
          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 02
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Library Management System
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Library book tracking and management application for cataloging and organizing library resources.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

          <!-- Project 3 -->
          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 03
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Simple Calculator - Python
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Basic calculator web application for arithmetic operations with a clean and intuitive user interface.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

          <!-- Project 4 -->
          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 04
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Simple Automation of Leads
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Web scraping and automation of lead generation using N8N for efficient data collection and management.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

          <!-- Project 5 -->
          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 05
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              AHLuTang
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              An Online application showcasing the process and the UI/UX Design.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

          <a href="#" class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PROJECT 06
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                Decor Website
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              A Website gallery for decorating services, showcasing their own project and events.
            </p>
            <div class="mt-4 flex items-center text-primary-600 dark:text-primary-400 font-medium text-sm group-hover:gap-2 transition-all">
              <span>View Project</span>
              <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>

        </div>



      </main>

      <!-- Footer -->
      <footer class="mt-20 border-t border-slate-200 bg-slate-50 py-8 text-center text-sm text-slate-600 dark:border-slate-800 dark:bg-slate-900/50 dark:text-slate-400">
        © 2025 Albert Melendres. All rights reserved.
      </footer>
    </div>

    <!-- Dark Mode Script -->
    <script>
      const themeToggle = document.getElementById('themeToggle');
      const sunIcon = document.getElementById('sunIcon');
      const moonIcon = document.getElementById('moonIcon');
      const html = document.documentElement;

      function updateThemeUI() {
        const isDark = html.classList.contains('dark');
        sunIcon.classList.toggle('hidden', isDark);
        moonIcon.classList.toggle('hidden', !isDark);
      }

      themeToggle.addEventListener('click', () => {
        const isDark = html.classList.contains('dark');
        if (isDark) {
          html.classList.remove('dark');
          localStorage.setItem('theme', 'light');
        } else {
          html.classList.add('dark');
          localStorage.setItem('theme', 'dark');
        }
        updateThemeUI();
      });

      // Initialize UI on load
      updateThemeUI();
    </script>
  </body>
</html>

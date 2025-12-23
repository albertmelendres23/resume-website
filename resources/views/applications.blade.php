<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Applications - Albert Melendres</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Copyright CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/copyright.css') }}" />

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

            <h1 class="text-2xl font-bold">All Applications</h1>

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
            A collection of applications and tools I've used and mastered throughout my career.
          </p>
        </div>

        <!-- Applications Grid -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- CRM Applications -->
          <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              CRM
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              CRM Applications
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Customer Relationship Management tools for managing client interactions and data.
            </p>
            <div class="mt-4 space-y-2">
              <div class="chip">Salesforce</div>
              <div class="chip">Microsoft Dynamics 365</div>
              <div class="chip">Salesforce Health Cloud</div>
              <div class="chip">RainTree</div>
              <div class="chip">GHL</div>
            </div>
          </div>

          <!-- Phone Applications -->
          <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              PHONE APP
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Phone Applications
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Communication and telephony tools for professional calls and meetings.
            </p>
            <div class="mt-4 space-y-2">
              <div class="chip">Zoom</div>
              <div class="chip">Avaya</div>
              <div class="chip">CallTools</div>
              <div class="chip">Salesforce softphone</div>
            </div>
          </div>

          <!-- Other Tools -->
          <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              OTHER TOOLS
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Productivity Tools
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Essential software and AI tools for daily operations and efficiency.
            </p>
            <div class="mt-4 space-y-2">
              <div class="chip">Microsoft Office</div>
              <div class="chip">Excel</div>
              <div class="chip">Outlook and Gmail</div>
              <div class="chip">Calendly</div>
              <div class="chip">Google Calendar</div>
              <div class="chip">ChatGPT other AI tools</div>
            </div>
          </div>

          <!-- Tech Tools -->
          <div class="group rounded-2xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary-200 transition-all dark:border-slate-800 dark:bg-slate-900 dark:hover:border-primary-600">
            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">
              TECH TOOLS
            </p>
            <h3 class="mt-3 text-xl font-semibold text-slate-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
              Development & Design Tools
            </h3>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
              Software and platforms used for development, design, and database management.
            </p>
            <div class="mt-4 space-y-2">
              <div class="chip">VSCode</div>
              <div class="chip">Microsoft Studio</div>
              <div class="chip">MySQL</div>
              <div class="chip">pgAdmin4 (PostgreSQL)</div>
              <div class="chip">Laragon</div>
              <div class="chip">Supabase</div>
              <div class="chip">Figma</div>
              <div class="chip">Canva</div>
              <div class="chip">CapCut</div>
              <div class="chip">AI tools</div>
            </div>
          </div>
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

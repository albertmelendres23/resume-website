<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Albert Melendres Portfolio</title>

    <!-- Page CSS (fonts + small helpers + scrollbar) -->
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />

    <!-- Tailwind config (custom tokens) -->
    <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>

    <script>
      tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {
            fontFamily: {
              sans: ['"Inter var"', "Inter", "system-ui", "sans-serif"],
            },
            colors: {
              primary: {
                50: "#eef6ff",
                100: "#d9eaff",
                500: "#2563eb",
                600: "#1d4ed8",
                900: "#0f172a",
              },
            },
            boxShadow: {
              card: "0 20px 40px rgba(15, 23, 42, 0.08)",
            },
          },
        },
      };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Dark-mode initialization & overrides -->
    <script>
      (function(){
        const stored = localStorage.getItem('theme');
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (stored === 'dark' || (!stored && prefersDark)) {
          document.documentElement.classList.add('dark');
        } else {
          document.documentElement.classList.remove('dark');
        }
      })();
    </script>

    <style>
      /* Light mode: All borders should be black */
      html:not(.dark) [class*="border"] {
        border-color: #000000 !important;
      }
      /* Specifically target recommendation navigation buttons */
      html:not(.dark) #rec-prev,
      html:not(.dark) #rec-next {
        border-color: #000000 !important;
      }
      /* Light mode: All text should be black */
      html:not(.dark) .text-slate-400,
      html:not(.dark) .text-slate-500,
      html:not(.dark) .text-slate-600,
      html:not(.dark) .text-slate-700,
      html:not(.dark) .text-slate-800,
      html:not(.dark) .text-slate-900,
      html:not(.dark) [class*="text-slate"],
      html:not(.dark) .text-black {
        color: #000000 !important;
      }
      /* Keep primary text colors in light mode (blue for links/buttons) */
      html:not(.dark) .text-primary-600,
      html:not(.dark) .text-primary-500 {
        color: #2563eb !important;
      }
      
      /* Dark-mode overrides for utility classes used across the template */
      .dark .bg-white { background-color: #0b1226 !important; }
      .dark .bg-slate-50 { background-color: #071422 !important; }
      /* Dark mode: All text should be white */
      .dark .text-slate-400,
      .dark .text-slate-500,
      .dark .text-slate-600,
      .dark .text-slate-700,
      .dark .text-slate-800,
      .dark .text-slate-900,
      .dark [class*="text-slate"],
      .dark .text-black {
        color: #ffffff !important;
      }
      /* Dark mode: Override light mode black borders with appropriate dark colors */
      .dark [class*="border"] {
        border-color: #21303f !important;
      }
      .dark .border-primary-100,
      .dark .border-primary-200,
      .dark .border-primary-300 {
        border-color: rgba(59,130,246,0.4) !important;
      }
      .dark .bg-primary-50 { background-color: rgba(59,130,246,0.06) !important; }
      .dark .shadow-card { box-shadow: 0 20px 40px rgba(2,6,23,0.6) !important; }
      .dark .chip { background-color: rgba(255,255,255,0.04) !important; color: #cbd5e1 !important; border-color: rgba(255,255,255,0.06) !important; }
      .dark a.chip-link { color: #93c5fd !important; }
      .dark ::-webkit-scrollbar-track { background: #02121a; }
      .dark ::-webkit-scrollbar-thumb { background: #274155; }
    </style>
  </head>
  <body class="bg-gray-50 text-slate-900 font-sans transition-colors duration-200 leading-relaxed">
    <div class="relative mx-auto max-w-6xl px-4 py-10 lg:py-14">
      <div class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-start">
        <div class="space-y-8">
          <section
            class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card"
          >
            <div class="flex flex-col gap-8 lg:flex-row">
              <div class="shrink-0">
                <div
                  class="h-40 w-40 overflow-hidden rounded-3xl border border-slate-100"
                >
                  <img
                    src="{{ asset('images/albert.png') }}"
                    alt="Professional portrait of Albert Melendres"
                    class="h-full w-full object-cover"
                    loading="lazy"
                  />
                </div>
              </div>
              <div class="flex-1 space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-3">
                  <h1 class="text-4xl font-semibold tracking-tight leading-tight">
                    Albert Melendres
                  </h1>
                  <!-- Theme toggle -->
                  <button id="theme-toggle" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white/90 w-8 h-8 text-xs text-slate-800 shadow-sm hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:border-slate-700 dark:bg-slate-800/80 dark:text-slate-100">
                    <span id="theme-toggle-icon" class="text-sm">🌓</span>
                  </button>
                </div>
                <p class="text-sm text-slate-500">
                 Davao City, Philippines
                 
                <p class="text-lg font-medium text-slate-800">
                  Patient Core Coordinator · Technical Support Specialist · Project Manager
                </p>
                </p>
                <div class="flex flex-wrap items-center gap-3 pt-2">
                  <button
                    class="inline-flex items-center gap-2 rounded-xl bg-primary-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-primary-500"
                  >
                     
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 6.75 21 10.5m0 0-3.75 3.75M21 10.5H3"
                      />
                    </svg>
                  </button>
                  <a
                    href="mailto:albertmelendres07@gmail.com?subject=Hello%20Albert&body=Hi%20Albert,%0A%0A"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300 hover:bg-slate-50"
                  >
                    Send Email
                  </a>
                  <button
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-slate-300 hover:bg-slate-50"
                  >
                    Facebook
                  </button>
                </div>
              </div>
            </div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center gap-3">
              <div
                class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600"
              >
                About
              </div>
              <p class="text-sm text-slate-400">Short bio & focus areas</p>
            </div>
            <div class="space-y-4 text-base leading-relaxed text-slate-800">
              <p>
              I’m a skilled individual with a strong background in healthcare appointment setting and technical support. 
              I excel at managing patient schedules, coordinating with clinical teams, and ensuring seamless communication with insurance providers, all while maintaining accuracy and compliance.
              </p>
              <p>
               Beyond administrative support, I bring versatile technical skills—proficient in networking, web development, and various digital tools—which allow me to optimize workflows, troubleshoot issues, and implement solutions that improve efficiency. 
               My hands-on experience with technology gives me an edge in learning and adapting to new systems quickly.
              </p>
              <p>
               With experience working remotely, I deliver tasks accurately and reliably with minimal supervision, helping teams stay organized and focused while maintaining operational excellence.
              </p>
            </div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div
                class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600"
              >
                Applications
              </div>
              <a
                href="/applications"
                class="inline-flex items-center gap-2 text-sm font-semibold text-primary-600 hover:text-primary-500"
              >
                View All
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
              <div>

                <p class="text-xs uppercase tracking-widest text-slate-400">
                  CRM
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span class="chip">Salesforce</span>
                  <span class="chip">Microsoft Dynamics 365</span>
                  <span class="chip">Salesforce Health Cloud</span>
                  <span class="chip">RainTree</span>
                  <span class="chip">GHL</span>
                </div>
              </div>
              <div>

                <p class="text-xs uppercase tracking-widest text-slate-400">
                  Phone App
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span class="chip">Zoom</span>
                  <span class="chip">Avaya</span>
                  <span class="chip">CallTools</span>
                  <span class="chip">Salesforce softphone</span> 
                </div>
              </div>
              <div>
                <p class="text-xs uppercase tracking-widest text-slate-400">
                Other Tools
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                  <span class="chip">Microsoft Office</span>
                  <span class="chip">Excel</span>
                  <span class="chip">Outlook and Gmail</span>
                  <span class="chip">ChatGPT other AI tools</span>
                </div>
              </div>
            </div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center gap-3">
              <div
                class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600"
              >
              Beyond Work
              </div>
            </div>
            <p class="text-base leading-relaxed text-slate-700">
             I always try to upskill and push myself to learn more. I spend time improving what I can offer, exploring new opportunities, and thinking about how I can grow financially by providing 
             valuable services. And when I'm not focused on work, I unwind by watching anime, short series and movies.
            </p>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div
                class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600"
              >
                Recent Projects
              </div>
              <a
                href="/projects"
                class="inline-flex items-center gap-2 text-sm font-semibold text-primary-600 hover:text-primary-500"
              >
                View All
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
            <div class="grid gap-4 md:grid-cols-2">
              <article
                class="rounded-2xl border border-slate-100 p-5 hover:border-primary-100 hover:bg-primary-50/30"
              >
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                  PROJECT 01
                </p>
                <h4 class="mt-2 text-lg font-semibold text-slate-900">
                 Barangay 12 Health Management Center
                </h4>
                <p class="mt-1 text-sm text-slate-600">
                  CRM - Healthcare Appointment Scheduling System.
                </p>
                 
                  </svg>
                </a>
              </article>
              <article
                class="rounded-2xl border border-slate-100 p-5 hover:border-primary-100 hover:bg-primary-50/30"
              >
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                  PROJECT 02
                </p>
                <h4 class="mt-2 text-xl font-semibold text-slate-900 leading-snug">
                  Library Management System
                </h4>
                <p class="mt-1 text-sm text-slate-600">
                 Library book tracking and management application.
                </p>
            
              </article>
              <article
                class="rounded-2xl border border-slate-100 p-5 hover:border-primary-100 hover:bg-primary-50/30"
              >
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                  PROJECT 03
                </p>
                <h4 class="mt-2 text-lg font-semibold text-slate-900">
                  Simple Calculator - Python
                </h4>
                <p class="mt-1 text-sm text-slate-600">
                  Basic calculator web application for arithmetic operations.
                </p>
                 
              </article>
              <article
                class="rounded-2xl border border-slate-100 p-5 hover:border-primary-100 hover:bg-primary-50/30"
              >
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                  PROJECT 04
                </p>
                <h4 class="mt-2 text-lg font-semibold text-slate-900">
                  Simple Automation of Leads
                </h4>
                <p class="mt-1 text-sm text-slate-600">
                Web scraping and automation of lead generation using N8N.
                </p>
                
              </article>
            </div>
          </section>
        </div>

        <div class="space-y-10">

          <section class="rounded-3xl border border-slate-100 bg-white p-8 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600">
                Experience
              </div>
              <a
                href="https://drive.google.com/file/d/1ggXV4COSADkPWWjeSTBobEyiEzWrDlsa/view?usp=sharing"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 rounded-xl border border-primary-200 bg-primary-50 px-4 py-2 text-sm font-semibold text-primary-600 transition hover:border-primary-300 hover:bg-primary-100"
              >
                See Resume
                <svg
                  class="h-4 w-4"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                  />
                </svg>
              </a>
            </div>
            <div class="space-y-6">
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2025
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                   Patient Coordinator - Remote Work
                  </h4>
                  <p class="text-sm text-slate-600"> Professional Physical Therapy, USA</p>
                </div>
              </article>
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2024
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                   Appointment Setter - Remote Work
                  </h4>
                  <p class="text-sm text-slate-600">
                    Solar Exclusive, USA
                  </p>
                </div>
              </article>
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2023
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                    Technical Support Specialist
                  </h4>
                  <p class="text-sm text-slate-600">AT&T - Sutherland</p>
                </div>
              </article>
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2021-2022
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                    Subject Matter Expert - Mentor
                  </h4>
                  <p class="text-sm text-slate-600">TMobile - Alorica</p>
                </div>
              </article>
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2021
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                    Technical Customer Support  
                  </h4>
                  <p class="text-sm text-slate-600">TMobile - Alorica</p>
                </div>
              </article>
              <article class="flex gap-4">
                <div class="flex flex-col items-center">
                  <div
                    class="h-3 w-3 rounded-full border border-primary-200 bg-primary-500"
                  ></div>
                  <div class="mx-auto h-full w-px flex-1 bg-slate-200"></div>
                </div>
                <div>
                  <p class="text-xs uppercase tracking-widest text-slate-400">
                    2021
                  </p>
                  <h4 class="text-base font-semibold text-slate-900">
                  Senior High - Humanities and Social Sciences
                  </h4>
                  <p class="text-sm text-slate-600">Davao City National High School</p>
                </div>
              </article>
            </div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600">
                Certifications
              </div>
              <button
                class="text-sm font-semibold text-primary-600 hover:text-primary-500"
              >
                
              </button>
            </div>
            <div class="space-y-4 text-sm text-slate-700">
              <p>Healthcare 101 · HIPPA Regulations and Data Privacy</p>
              <p>AT&T - Technical Support Training</p>
              <p>TMobile - Technical Support Training</p>
              <p>IT Specialist Certiport · HTML CSS</p>
              <p>IT Specialist Certiport · Database Management</p>
               <p>Protecting Sensitive
Information 2025 -
Sutherland</p>
              <p>Healthcare Compliance and
Privacy - Fraud, Waste and
Abuse</p>
 <p>Healthcare Compliance and
Privacy - General
Compliance</p>
            </div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div
                class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600"
              >
                Recommendations
              </div>
              <div class="flex gap-2">
                <button
                  id="rec-prev"
                  class="rounded-full border border-slate-200 p-2 text-slate-500 hover:bg-slate-50"
                >
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
                </button>
                <button
                  id="rec-next"
                  class="rounded-full border border-slate-200 p-2 text-slate-500 hover:bg-slate-50"
                >
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
            <div id="rec-content" class="min-h-[160px] space-y-3"></div>
          </section>

          <section class="rounded-3xl border border-slate-100 bg-white p-10 shadow-card">
            <div class="mb-5 flex items-center justify-between">
              <div class="rounded-2xl bg-primary-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary-600">
                Social Links
              </div>
            </div>
            <div class="space-y-3">
             <a href="https://www.linkedin.com/in/albert-melendres-520ba533b?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 rounded-lg border border-slate-100 p-3 text-black dark:text-white hover:border-primary-100 hover:bg-primary-50/30 dark:hover:border-slate-600 dark:hover:bg-slate-800/50">
  <span class="text-lg">💼</span>
  <span class="text-sm font-medium">LinkedIn</span>
</a>

<a href="https://www.facebook.com/share/17p8HR8X3x/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 rounded-lg border border-slate-100 p-3 text-black dark:text-white hover:border-primary-100 hover:bg-primary-50/30 dark:hover:border-slate-600 dark:hover:bg-slate-800/50">
  <span class="text-lg">👥</span>
  <span class="text-sm font-medium">Facebook</span>
</a>

<a href="https://www.upwork.com/freelancers/~01ebea7e8b0804e681?mp_source=share" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 rounded-lg border border-slate-100 p-3 text-black dark:text-white hover:border-primary-100 hover:bg-primary-50/30 dark:hover:border-slate-600 dark:hover:bg-slate-800/50">
  <span class="text-lg">💻</span>
  <span class="text-sm font-medium">Upwork</span>
</a>

<a href="https://www.instagram.com/albertmelendres12/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 rounded-lg border border-slate-100 p-3 text-black dark:text-white hover:border-primary-100 hover:bg-primary-50/30 dark:hover:border-slate-600 dark:hover:bg-slate-800/50">
  <span class="text-lg">💻</span>
  <span class="text-sm font-medium">Instagram</span>
</a>

<a href="https://github.com/albertmelendres23" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 rounded-lg border border-slate-100 p-3 text-black dark:text-white hover:border-primary-100 hover:bg-primary-50/30 dark:hover:border-slate-600 dark:hover:bg-slate-800/50">
  <span class="text-lg">💻</span>
  <span class="text-sm font-medium">Github</span>
</a>


            </div>
          </section>
        </div>
      </div>

      <!-- Copyright section -->
      <div class="mt-12 border-t border-slate-200 pt-8 text-center text-sm copyright-text">
 
    </div>


    <!-- Page JS (carousel + chip helpers) -->
    <script src="{{ asset('assets/js/profile.js') }}"></script>

    <script>
      (function(){
        const toggle = document.getElementById('theme-toggle');
        const icon = document.getElementById('theme-toggle-icon');
        const setIcon = () => {
          icon.textContent = document.documentElement.classList.contains('dark') ? '🌙' : '☀️';
        };
        setIcon();
        toggle?.addEventListener('click', () => {
          const isDark = document.documentElement.classList.toggle('dark');
          localStorage.setItem('theme', isDark ? 'dark' : 'light');
          setIcon();
        });
      })();
    </script>
  </body>
</html>


// Tailwind config for the profile page (loaded before the CDN so it applies)
tailwind.config = {
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
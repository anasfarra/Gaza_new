tailwind.config = {
    corePlugins: { preflight: true },
    theme: {
        extend: {
            colors: {
                border: "hsl(var(--border))",
                input: "hsl(var(--input))",
                ring: "hsl(var(--ring))",
                background: "hsl(var(--background))",
                foreground: "hsl(var(--foreground))",
                primary: { DEFAULT: "#16a34a", foreground: "#ffffff" },
                card: { DEFAULT: "#ffffff", foreground: "#000000" },
            },
            borderRadius: { lg: "var(--radius)", md: "calc(var(--radius) - 2px)", sm: "calc(var(--radius) - 4px)" },
        }
    }
}
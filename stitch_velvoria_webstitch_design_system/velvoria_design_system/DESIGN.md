---
name: Velvoria Design System
colors:
  surface: '#fff8f3'
  surface-dim: '#dfd9d4'
  surface-bright: '#fff8f3'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f9f2ed'
  surface-container: '#f3ede8'
  surface-container-high: '#eee7e2'
  surface-container-highest: '#e8e1dc'
  on-surface: '#1d1b18'
  on-surface-variant: '#46464d'
  inverse-surface: '#33302d'
  inverse-on-surface: '#f6efeb'
  outline: '#77767e'
  outline-variant: '#c7c5ce'
  surface-tint: '#585d7b'
  primary: '#030722'
  on-primary: '#ffffff'
  primary-container: '#1a1f3a'
  on-primary-container: '#8286a7'
  inverse-primary: '#c0c4e8'
  secondary: '#7d5545'
  on-secondary: '#ffffff'
  secondary-container: '#ffc9b4'
  on-secondary-container: '#7a5242'
  tertiary: '#000d0c'
  on-tertiary: '#ffffff'
  tertiary-container: '#002625'
  on-tertiary-container: '#60918f'
  error: '#EF4444'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dee1ff'
  primary-fixed-dim: '#c0c4e8'
  on-primary-fixed: '#151a34'
  on-primary-fixed-variant: '#404562'
  secondary-fixed: '#ffdbce'
  secondary-fixed-dim: '#f0bba7'
  on-secondary-fixed: '#301408'
  on-secondary-fixed-variant: '#623e2f'
  tertiary-fixed: '#b9ece9'
  tertiary-fixed-dim: '#9dd0cd'
  on-tertiary-fixed: '#00201f'
  on-tertiary-fixed-variant: '#1a4e4c'
  background: '#fff8f3'
  on-background: '#1d1b18'
  surface-variant: '#e8e1dc'
  white: '#FFFFFF'
  surface-light: '#F5F5F5'
  text-primary: '#333333'
  text-secondary: '#808080'
  border-subtle: '#E0E0E0'
  success: '#10B981'
  warning: '#F59E0B'
typography:
  display-lg:
    fontFamily: Playfair Display
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 58px
    letterSpacing: -0.5px
  display-md:
    fontFamily: Playfair Display
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.5px
  headline-lg:
    fontFamily: Playfair Display
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: 0px
  headline-lg-mobile:
    fontFamily: Playfair Display
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
    letterSpacing: 0px
  headline-md:
    fontFamily: Playfair Display
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
    letterSpacing: 0px
  headline-sm:
    fontFamily: Playfair Display
    fontSize: 24px
    fontWeight: '700'
    lineHeight: 32px
    letterSpacing: 0px
  title-lg:
    fontFamily: Inter
    fontSize: 22px
    fontWeight: '600'
    lineHeight: 28px
    letterSpacing: 0px
  title-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: 0.15px
  title-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.1px
  body-lg:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
    letterSpacing: 0.5px
  body-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
    letterSpacing: 0.25px
  body-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
    letterSpacing: 0.4px
  label-lg:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.1px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.5px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 48px
  3xl: 64px
  4xl: 96px
  nav-height-desktop: 80px
  nav-height-mobile: 64px
---

## Brand & Style

The design system is anchored in **Luxury Minimalism**, targeting premium shoppers and high-end vendors. It evokes a sense of "effortless elegance" through a sophisticated interplay of traditional serif typography and modern, clean UI structures.

The brand personality is **sophisticated, trustworthy, and premium**. To achieve this, the system utilizes:
- **Generous Whitespace:** Utilizing large layout gaps (up to 96px) to let high-quality product imagery breathe.
- **Organic Tech:** A shift away from stark white to a warm Cream base, creating a tactile, "textile" feel that reduces eye strain.
- **Modern Refinement:** Combining the authority of Deep Navy with the warmth of Rose Gold accents.
- **Subtle Motion:** Low-velocity transitions and slow-zoom hero imagery to mimic the calm atmosphere of a physical luxury boutique.

## Colors

The palette is designed to reflect high-end fashion and premium service. 

- **Deep Navy** serves as the foundation for structural elements, providing a grounded, authoritative presence.
- **Rose Gold** is the primary conversion driver, used exclusively for high-priority actions and status indicators.
- **Emerald Green** provides a secondary accent, ideal for moments of organic luxury or hero-section gradients.
- **Cream** replaces pure white as the primary background to soften the interface and reinforce the premium positioning.

Use `text-primary` for all long-form reading and `Deep Navy` for headers and logo treatments to maintain hierarchy. Semantic colors (Success, Warning, Error) should be used sparingly to avoid disrupting the minimalist aesthetic.

## Typography

This design system uses a high-contrast typographic pairing:
- **Playfair Display (Serif):** Used for all headings and brand-centric titles. It communicates heritage and luxury.
- **Inter (Sans-serif):** Used for all functional UI, body text, and labels. It ensures maximum readability and a modern technical feel for the shopping experience.

For mobile devices, `display-lg` and `display-md` should scale down to `headline-lg` proportions to ensure content fits within the viewport without excessive wrapping.

## Layout & Spacing

The design system utilizes a **fixed-width grid** on desktop (max-width 1440px) and a **fluid grid** on mobile.

**Grid Rhythm:**
- **Desktop:** 12-column grid with 24px gutters and 48px side margins.
- **Tablet:** 8-column grid with 24px gutters and 32px side margins.
- **Mobile:** 4-column grid with 16px gutters and 16px side margins.

**Vertical Rhythm:**
Use the `4xl` (96px) unit for spacing between major sections on landing pages to maintain the minimalist luxury feel. Interior commerce pages (product listings) should use `xl` (32px) for row gaps to maintain a cohesive density.

## Elevation & Depth

The system uses **Tonal Layering** supplemented by soft, ambient shadows to create hierarchy without clutter.

- **Level 1 (Surface):** Cream background.
- **Level 2 (Cards/Nav):** White surfaces with `0 2px 8px rgba(0,0,0,0.08)`. This creates a subtle lift for primary content areas.
- **Level 3 (Hover/Active):** Increased depth with `0 8px 24px rgba(0,0,0,0.12)`. Applied to product cards on hover to signal interactivity.
- **Level 4 (Overlay):** High-contrast depth with `0 16px 40px rgba(0,0,0,0.16)`. Reserved exclusively for modals and dropdown menus.

Focus states utilize a 3px Deep Navy "glow" with 10% opacity to maintain clarity without the harshness of high-contrast outlines.

## Shapes

The shape language is **Rounded**, balanced to feel modern but not overly playful.

- **Standard Radius (8px):** Applied to buttons, inputs, and standard product cards.
- **Accent Radius (12px):** Applied to modals and featured highlight cards to give them a softer, distinct appearance.
- **Hard Radius (4px):** Reserved for small utility components like checkboxes.
- **Circle (50%):** Used for avatars, radio buttons, and pagination dots.

Borders are generally kept at 1px unless indicating a primary interaction (2px) or a featured accent line (4px).

## Components

### Buttons
- **Primary:** Deep Navy background, White text. 8px radius.
- **Secondary:** Transparent background, 2px Deep Navy border. 
- **Accent:** Rose Gold background, White text. Reserved for "Add to Cart" or "Buy Now".
- **Hover State:** 300ms transition with a slight increase in shadow depth.

### Navigation
- **Desktop:** 80px height, White background, subtle bottom shadow. Active links are indicated by a 2px Deep Navy bottom border.
- **Search Bar:** 8px radius, Light Gray (#F5F5F5) background, 300px max-width on desktop.

### Product Cards
- **Structure:** White background, 8px radius.
- **Hover:** Card lifts with Level 3 shadow and image scales subtly (1.05x).
- **Badge:** Rose Gold badges for "New" or "Limited," Error Red for "Sale."

### Inputs & Form Fields
- **Default:** 1px border (#E0E0E0), 8px radius, White background.
- **Focus:** 2px Deep Navy border with a 3px soft shadow.
- **Labels:** Use `Label Large` (Inter Medium) in Dark Gray (#333333).

### Featured Highlight Cards
- Unique styling with a 12px radius and a **4px Rose Gold solid vertical accent** on the left edge to denote premium content or curated collections.
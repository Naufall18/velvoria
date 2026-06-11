---
name: Velvoria
colors:
  surface: '#fbf9f8'
  surface-dim: '#dbd9d9'
  surface-bright: '#fbf9f8'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f3f3'
  surface-container: '#efeded'
  surface-container-high: '#eae8e7'
  surface-container-highest: '#e4e2e2'
  on-surface: '#1b1c1c'
  on-surface-variant: '#46464d'
  inverse-surface: '#303030'
  inverse-on-surface: '#f2f0f0'
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
  tertiary: '#0b0907'
  on-tertiary: '#ffffff'
  tertiary-container: '#23201d'
  on-tertiary-container: '#8c8783'
  error: '#ba1a1a'
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
  tertiary-fixed: '#e8e1dc'
  tertiary-fixed-dim: '#cbc5c1'
  on-tertiary-fixed: '#1d1b18'
  on-tertiary-fixed-variant: '#494643'
  background: '#fbf9f8'
  on-background: '#1b1c1c'
  surface-variant: '#e4e2e2'
typography:
  display-lg:
    fontFamily: Playfair Display
    fontSize: 64px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Playfair Display
    fontSize: 40px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Playfair Display
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.3'
  headline-sm:
    fontFamily: Playfair Display
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-caps:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1.0'
    letterSpacing: 0.1em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1280px
  gutter: 32px
  margin-desktop: 64px
  margin-mobile: 20px
---

## Brand & Style

The design system is anchored in **Minimalist Luxury**, targeting an affluent audience that values discretion, quality, and an editorial aesthetic. The UI should evoke an emotional response of calm exclusivity and quiet confidence.

The style leverages high-contrast typography and a restricted color palette to create an "uncluttered" environment. We employ a mix of **Modern Minimalism** with **Editorial-inspired** layouts. Key attributes include:
- **Generous Whitespace:** Space is treated as a luxury asset, used to frame content and reduce cognitive load.
- **Precision Geometry:** Alignment follows a strict grid, ensuring a sense of architectural stability.
- **Subtle Motion:** Interactions should be fluid and decelerated, mimicking the tactile feel of high-end physical materials.

## Colors

The palette is designed to feel timeless and balanced. 

- **Deep Navy (#1A1F3A):** Used for primary text, iconography, and high-impact structural elements. It provides a more sophisticated alternative to pure black.
- **Rose Gold (#E8B4A0):** Used sparingly as an accent color for calls to action, active states, and premium highlights. 
- **Cream (#FFF8F3):** The primary background color. It softens the interface compared to stark white, providing a warm, parchment-like quality.
- **Functional Grays:** Use low-saturation variants of the navy for secondary text and subtle borders to maintain the monochrome-adjacent luxury feel.

## Typography

This design system uses a high-contrast typographic pairing to signal an editorial hierarchy.

- **Playfair Display:** Utilized for all high-level headings and display moments. It should be typeset with tight tracking in display sizes to emphasize its elegant serifs.
- **Inter:** Used for body copy, UI labels, and data. It provides a functional, neutral counterpoint to the decorative serif. 
- **Hierarchy:** Maintain a clear distinction between "reading" text and "navigational" text. Navigational elements and labels should frequently use the `label-caps` style to provide a structured, architectural feel.

## Layout & Spacing

The layout philosophy is a **Fixed Grid** within a centered container for desktop, transitioning to a fluid model for mobile devices.

- **The 8px Rhythm:** All spacing (padding, margins, gap) must be multiples of 8px. 
- **Desktop:** A 12-column grid with generous 32px gutters. Hero sections should often utilize "negative space" by leaving 2–4 columns empty to enhance the premium feel.
- **Mobile:** A 4-column grid with 20px side margins. 
- **Vertical Rhythm:** Use exaggerated vertical padding (e.g., 120px or 160px) between major sections to allow the content to "breathe" and prevent the UI from feeling cramped.

## Elevation & Depth

This design system avoids heavy shadows and skeuomorphism in favor of **Tonal Layers** and **Low-Contrast Outlines**.

- **Layering:** Depth is communicated through color. Elements closer to the user should use the Cream background, while the base "canvas" can utilize a slightly darker tint of the neutral palette or thin 1px borders in `Navy` at 10% opacity.
- **Shadows:** If required for functional elevation (e.g., a floating menu), use an ultra-diffused "Ambient Shadow": `0px 12px 32px rgba(26, 31, 58, 0.04)`.
- **Interactions:** Use subtle shifts in background opacity (e.g., Navy at 5% opacity for hover states) rather than lifting the element via shadows.

## Shapes

The shape language reflects **Refined Geometry**. 

- **Corners:** While the overall vibe is structured, a `0.5rem` (8px) base radius is applied to buttons and containers to ensure the UI feels approachable and modern rather than cold and aggressive.
- **Interactive Elements:** Buttons and input fields follow the `rounded-lg` (16px) or `rounded-xl` (24px) patterns to create a "soft-luxury" tactile feel.
- **Media:** Photography should maintain sharp 90-degree corners or very minimal rounding to preserve the editorial magazine aesthetic.

## Components

- **Buttons:** Primary buttons are solid Deep Navy with Cream text. Secondary buttons are outlined in Navy (1px) or use the Rose Gold accent. Button labels always use `label-caps`.
- **Input Fields:** Minimalist design with only a bottom border (1px Navy, 20% opacity) that transitions to full Navy on focus. Floating labels in `Inter` small-caps.
- **Cards:** Use "Ghost Cards"—no background color or border, just structured typography and high-quality imagery, separated by generous whitespace. If a container is needed, use a 1px border in Navy at 10% opacity.
- **Chips:** Small, pill-shaped tags using the Rose Gold at 15% opacity with Rose Gold text for a soft, tonal highlight.
- **Lists:** Separated by thin 1px rules in Navy (10% opacity). Increase vertical padding to 24px per item to maintain the luxury spacing.
- **Imagery:** All images should feature high-key lighting or desaturated tones to complement the Deep Navy and Cream palette.
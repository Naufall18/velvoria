# 🎨 VELVORIA E-COMMERCE - COMPREHENSIVE WEB STITCH DESIGN PROMPT

## PROJECT OVERVIEW
**Project Name:** Velvoria - Premium Multi-Vendor E-Commerce Marketplace  
**Platform:** Web (Responsive - Desktop, Tablet, Mobile)  
**Current Tech:** React 19, TypeScript, Vite, TailwindCSS  
**Design System:** Luxury Minimalist Aesthetic  
**Target Users:** Premium shoppers & luxury brand vendors

---

## 🎯 DESIGN OBJECTIVES

1. **Modern Luxury Aesthetic** - Elegant, minimalist, high-end feel
2. **Seamless User Experience** - Intuitive navigation, micro-interactions
3. **Performance-First Design** - Fast load times, smooth animations
4. **Accessibility-First** - WCAG 2.1 AA compliance
5. **Mobile-First Responsive** - Perfect on all devices
6. **Trust & Credibility** - Professional, secure appearance

---

## 🌈 COLOR PALETTE

### Primary Colors
- **Deep Navy:** `#1A1F3A` - Primary brand color, headers, buttons
- **Rose Gold:** `#E8B4A0` - Accent for CTAs, highlights
- **Emerald Green:** `#2D5F5D` - Secondary accent, success states
- **Cream:** `#FFF8F3` - Background, light surfaces

### Extended Palette
- **White:** `#FFFFFF` - Card backgrounds, contrast
- **Light Gray:** `#F5F5F5` - Subtle backgrounds, dividers
- **Medium Gray:** `#808080` - Secondary text
- **Dark Gray:** `#333333` - Primary text
- **Success Green:** `#10B981` - Status indicators
- **Warning Orange:** `#F59E0B` - Alerts
- **Error Red:** `#EF4444` - Error states

### Semantic Colors
```
Background: #FFF8F3
Surface: #FFFFFF
Primary: #1A1F3A
Secondary: #E8B4A0
Accent: #2D5F5D
Text Primary: #333333
Text Secondary: #808080
Border: #E0E0E0
Success: #10B981
Warning: #F59E0B
Error: #EF4444
```

---

## 🔤 TYPOGRAPHY

### Font Families
- **Display/Headings:** Playfair Display (Serif)
  - Font weights: Regular (400), Bold (700)
  - Usage: Page titles, section headers, luxury branding
  
- **Body/UI:** Inter (Sans-serif)
  - Font weights: Regular (400), Medium (500), Semibold (600), Bold (700)
  - Usage: Body text, buttons, inputs, labels

### Type Scale
```
Display Large:    48px / 58px    |  Font Weight: 700  |  Letter Spacing: -0.5px
Display Medium:   40px / 48px    |  Font Weight: 700  |  Letter Spacing: -0.5px
Headline Large:   32px / 40px    |  Font Weight: 700  |  Letter Spacing: 0px
Headline Medium:  28px / 36px    |  Font Weight: 700  |  Letter Spacing: 0px
Headline Small:   24px / 32px    |  Font Weight: 700  |  Letter Spacing: 0px

Title Large:      22px / 28px    |  Font Weight: 600  |  Letter Spacing: 0px
Title Medium:     16px / 24px    |  Font Weight: 600  |  Letter Spacing: 0.15px
Title Small:      14px / 20px    |  Font Weight: 600  |  Letter Spacing: 0.1px

Body Large:       16px / 24px    |  Font Weight: 400  |  Letter Spacing: 0.5px
Body Medium:      14px / 20px    |  Font Weight: 400  |  Letter Spacing: 0.25px
Body Small:       12px / 16px    |  Font Weight: 400  |  Letter Spacing: 0.4px

Label Large:      14px / 20px    |  Font Weight: 500  |  Letter Spacing: 0.1px
Label Medium:     12px / 16px    |  Font Weight: 500  |  Letter Spacing: 0.5px
```

---

## 🎨 SPACING SYSTEM (8px Base Unit)

```
xs:  4px   (0.25rem)
sm:  8px   (0.5rem)
md:  16px  (1rem)
lg:  24px  (1.5rem)
xl:  32px  (2rem)
2xl: 48px  (3rem)
3xl: 64px  (4rem)
4xl: 96px  (6rem)
```

---

## 🔲 COMPONENT LIBRARY SPECS

### 1. NAVIGATION BAR
**Desktop (1024px+)**
- Height: 80px
- Background: White (#FFFFFF)
- Shadow: 0 2px 8px rgba(0,0,0,0.08)
- Left section: Logo (Velvoria in Playfair Display, 24px, Navy)
- Center section: Nav links (Home, Shop, Vendors, Live, Help)
  - Font: Inter, 14px, Medium (500)
  - Color: #333333
  - Active state: Navy (#1A1F3A) with underline 2px Rose Gold
  - Hover: Rose Gold color, smooth 300ms transition
- Right section: 
  - Search icon (magnifying glass)
  - User profile icon with dropdown
  - Cart icon with badge counter (Red dot with number)
  - Wishlist icon

**Mobile (320px - 768px)**
- Height: 64px
- Hamburger menu on left (3 lines, Navy)
- Logo centered
- Cart & search icons on right
- Mobile menu overlay: Full-screen, slides from left
- Menu items: Vertical stack with 16px padding between items

### 2. SEARCH BAR
- Width: 300px (desktop), full width (mobile)
- Height: 48px
- Background: #F5F5F5
- Border: 1px solid #E0E0E0
- Border radius: 8px
- Padding: 12px 16px
- Icon: Search (left side, gray #808080)
- Placeholder text: "Search products, vendors..."
- Font: Inter, 14px, Regular
- Focus state:
  - Border color: Navy #1A1F3A
  - Background: White #FFFFFF
  - Box shadow: 0 0 0 3px rgba(26, 31, 58, 0.1)
  - Transition: 200ms ease

### 3. HERO SECTION (Homepage)
**Desktop Layout:**
- Full width, min height: 600px
- Background: Gradient from #1A1F3A (top) to #2D5F5D (bottom)
- Content positioned on left (60% width):
  - Main heading: "Discover Premium Luxury" (48px, Playfair Display, White)
  - Subheading: "Curated collection from exclusive vendors" (18px, Inter, #FFF8F3)
  - CTA Buttons (below text, horizontal layout):
    - Primary: "Shop Now" (Rose Gold background, White text)
    - Secondary: "Explore Vendors" (Navy border, Navy text)
  - Padding: 80px from left, 80px from top
- Right side: Hero image (40% width)
  - Background image: Luxury product/fashion imagery
  - Overlay: Subtle gradient fade to transparent (left side)
  - Animation: Slow zoom effect (0.5px/s)

**Mobile Layout:**
- Full width, height: 400px
- Content centered and stacked vertically
- Image as background (overlay 70% opacity dark)
- Text positioned absolute bottom with 24px padding
- Buttons stack vertically (full width)

### 4. PRODUCT CARDS
**Grid Layout:**
- Desktop: 4 columns (1280px+), 3 columns (1024px), 2 columns (768px), 1 column (mobile)
- Column gap: 24px
- Row gap: 32px
- Card dimensions: 280px width × 360px height (desktop)

**Card Structure:**
```
┌─────────────────────────┐
│  Product Image (240×240)│  ← Image container
│  (Hover: Overlay +20%)  │     - Zoom 1.05x on hover
├─────────────────────────┤
│ Category Badge (Top-R)  │  ← "New" / "Sale" badge
│ ✓ Add to Wishlist (T-R) │     Rose Gold background
├─────────────────────────┤
│ Product Name (16px)     │  ← 2 lines max, ellipsis
│ Vendor Name (12px gray) │     Vendor link
├─────────────────────────┤
│ ⭐ 4.5 (24 reviews)     │  ← Rating + count clickable
├─────────────────────────┤
│ $299.00                 │  ← Price (18px, bold)
│ [Add to Cart Button]    │     Rose Gold button
└─────────────────────────┘
```

**Hover Effects:**
- Image: Zoom 1.05x, brightness +10%
- Card: Shadow elevation 0 8px 24px rgba(0,0,0,0.12)
- "Add to Cart" button: Background darkened slightly
- Transition: 300ms cubic-bezier(0.4, 0, 0.2, 1)

### 5. PRODUCT DETAIL PAGE
**Layout (Desktop):**
- Left: Product images (60%)
  - Main image: 400×500px centered
  - Thumbnails below (4 small 80px squares, horizontal)
  - Gallery: Click to expand to lightbox modal
  
- Right: Product info (40%)
  - Product title: 32px, Playfair Display, Navy
  - Rating: "⭐ 4.5 (120 reviews)" - clickable to reviews section
  - Price section:
    - Current price: 24px, bold, Navy
    - Original price: 16px, strikethrough, gray (if on sale)
    - Discount badge: "-20%" red background
  - Vendor info: Link to vendor profile
  - Stock status: "✓ In Stock" (green)
  - Quantity selector: - [Input box] +
  - Size/Variant selector: Radio buttons or dropdown
  - Primary CTA: "Add to Cart" (56px height, full width, Rose Gold)
  - Secondary CTAs: 
    - "Add to Wishlist" (icon + text)
    - "Share" (social icons)
  - Divider
  - Product details tabs:
    - Description
    - Specifications
    - Reviews
    - Shipping & Returns

**Mobile Layout:**
- Single column
- Image carousel (swipeable)
- Sticky "Add to Cart" button at bottom
- Collapsible sections for details

### 6. SHOPPING CART
**Desktop Layout:**
- 2 columns: Cart items (70%) | Order summary (30%)

**Cart Items Column:**
```
┌─ Cart Item ─────────────┐
│ [Image] Product         │
│         $299.00         │
│         Qty: [- 1 +]    │
│         [Remove] [Save] │
└─────────────────────────┘
```
- Item height: 120px
- Image: 100×100px
- Remove button: Link style (navy text)
- Qty controls: -/+ buttons with input between
- Animation: Smooth height transition on remove

**Order Summary Column (Sticky):**
```
Order Summary
──────────────
Subtotal:        $898.00
Shipping:        $20.00
Tax:            $71.84
──────────────
Total:          $989.84

[Proceed to Checkout]
[Continue Shopping]
```
- Background: #F5F5F5
- Padding: 24px
- Border radius: 8px
- Font: Inter, 14px
- Bold for totals

### 7. CHECKOUT PAGE
**Steps Indicator:**
- Horizontal progress: Cart → Shipping → Payment → Confirmation
- Current step: Rose Gold highlight
- Completed steps: Green checkmark
- Step height: 48px

**Form Sections:**
1. **Shipping Information**
   - Full name input
   - Address input
   - City / Postal code inputs
   - Country dropdown
   - Save address checkbox

2. **Shipping Method**
   - Radio button options
   - Standard: $20 (5-7 days)
   - Express: $50 (2-3 days)
   - Each option shows estimated delivery

3. **Payment Method**
   - Credit card form (Visa/Mastercard)
   - PayPal button
   - E-wallet options (GoPay, OVO, Dana)
   - Installment option if available

4. **Order Review**
   - Item summary
   - Total breakdown
   - "Place Order" button

**Form Styling:**
- Input height: 48px
- Font: Inter, 14px
- Label: 12px, medium gray
- Focus state: Border Navy, shadow light
- Error state: Border red, error message below
- Placeholder: Light gray, italic

### 8. BUTTONS

**Primary Button (CTA)**
- Background: Rose Gold (#E8B4A0)
- Text: White, Inter, 14px, Bold
- Height: 48px (default), 56px (large), 40px (small)
- Padding: 0 24px
- Border radius: 8px
- Hover: Background darker by 15%
- Disabled: Opacity 50%, cursor not-allowed
- Icon: 16px left of text with 8px gap

**Secondary Button**
- Background: Transparent
- Border: 2px Navy (#1A1F3A)
- Text: Navy
- Same sizing/spacing as primary
- Hover: Background light navy (opacity 5%)

**Tertiary Button (Ghost)**
- Background: Transparent
- Text: Navy or color variant
- Underline on hover
- No border

**Icon Button**
- 40×40px square
- Background transparent
- Icon: 20×20px, centered
- Hover: Background #F5F5F5

### 9. INPUT FIELDS

**Text Input**
- Height: 48px
- Padding: 12px 16px
- Border: 1px #E0E0E0
- Border radius: 8px
- Font: Inter, 14px
- Placeholder: Light gray
- Focus: Border Navy, box-shadow light
- Error: Border red, error text below in red (12px)

**Select Dropdown**
- Same dimensions as text input
- Arrow icon on right
- Open state: Border Navy, background white
- Options: Hover background #F5F5F5
- Selected: Navy text, bold

**Checkbox**
- Size: 20×20px
- Border radius: 4px
- Border: 2px #E0E0E0
- Checked: Navy background with white checkmark
- Label: 14px, gray, left of checkbox (8px gap)

**Radio Button**
- Size: 20×20px
- Border radius: 50%
- Border: 2px #E0E0E0
- Checked: Navy border, Rose Gold dot inside
- Label: Same as checkbox

### 10. MODALS & OVERLAYS

**Modal Card**
- Background: White
- Border radius: 12px
- Shadow: 0 16px 40px rgba(0,0,0,0.16)
- Max width: 500px
- Padding: 32px
- Close button: "X" top-right corner

**Modal Overlay**
- Background: Black with 40% opacity
- Animation: Fade in 200ms
- Clicking overlay closes modal

**Success Modal**
- Green checkmark (64px)
- Headline: "Success" (24px)
- Message: Descriptive text (14px)
- CTA button: "Continue" (Rose Gold)

### 11. CARDS & CONTAINERS

**White Card**
- Background: White (#FFFFFF)
- Border: 1px #E0E0E0
- Border radius: 8px
- Padding: 20px
- Shadow: 0 2px 8px rgba(0,0,0,0.08)

**Featured/Highlight Card**
- Background: Gradient from #FFF8F3 to White
- Border: 1px #E8B4A0
- Border radius: 12px
- Accent line: 4px Rose Gold on left

### 12. BADGES & TAGS

**Badge Styles**
```
New:       Background Navy, text white, 8px padding, 12px font
Sale:      Background red, text white
Featured:  Background Rose Gold, text white
```

### 13. NOTIFICATIONS/TOASTS

**Toast Position:** Bottom-right, 24px margin
**Width:** 320px (desktop), full - 16px (mobile)
**Height:** 64px
**Animation:** Slide in from right (300ms), auto-dismiss in 4s

**Success Toast:**
- Left icon: Green checkmark
- Background: #10B981
- Text: White, 14px

**Error Toast:**
- Left icon: Red X
- Background: #EF4444
- Text: White

**Info Toast:**
- Left icon: Navy info icon
- Background: Navy (#1A1F3A)
- Text: White

---

## 🎬 ANIMATIONS & TRANSITIONS

### Page Transitions
- Enter: Fade in + slide up 20px (300ms, ease-out)
- Exit: Fade out (200ms)

### Micro-interactions
- Button hover: Background shift (200ms)
- Input focus: Border color + shadow (200ms)
- Dropdown open: Scale 1.02, fade in (150ms)
- Loading spinner: Rotate 360° continuous (1.2s)

### Scroll Animations
- Parallax hero: Background moves 30% slower than scroll
- Fade-in on scroll: Elements fade in as they enter viewport (400ms)
- Lazy load images: Blur fade effect

---

## 📱 RESPONSIVE BREAKPOINTS

```
Mobile:    320px - 479px
Tablet:    480px - 1023px
Desktop:   1024px - 1279px
Large:     1280px+
```

### Key Responsive Changes:
- **Mobile:** Single column, hamburger menu, full-width buttons
- **Tablet:** 2 columns product grid, condensed spacing
- **Desktop:** Full 4-column grid, expanded sidebar

---

## 🎯 PAGE SPECIFICATIONS

### 1. HOME PAGE
**Sections (top to bottom):**
1. Navigation bar (sticky)
2. Hero section (600px height)
3. Featured products carousel (auto-scroll every 5s)
4. "New Arrivals" section (4-column grid)
5. "Top Vendors" section (vendor cards with images)
6. "Categories" showcase (6 category cards with icons)
7. "Luxury Collections" (2×2 grid, larger cards)
8. Newsletter signup section
9. Footer

### 2. SHOP/PRODUCTS PAGE
**Layout:**
- Left sidebar (250px, sticky):
  - Search
  - Category filter (checkbox list)
  - Price range slider
  - Rating filter
  - Vendor filter
  - Brand filter
  - Sort dropdown (top-right)
  
- Main area: Product grid
  - Pagination at bottom
  - Items per page selector

### 3. PRODUCT DETAIL PAGE
- Image gallery (left 60%)
- Product info (right 40%)
- Reviews section below (full width)
- Related products carousel (bottom)

### 4. VENDOR PROFILE PAGE
- Vendor header with banner
- Vendor info card (rating, reviews, followers)
- Vendor's product grid
- About vendor section

### 5. CART PAGE
- Cart items with edit/remove
- Order summary (sticky right)
- "Proceed to Checkout" CTA
- "Continue Shopping" button

### 6. CHECKOUT PAGE
- Stepper (Cart → Shipping → Payment → Confirmation)
- Form sections with validation
- Order summary sidebar

### 7. ORDER CONFIRMATION PAGE
- Success icon/message
- Order number & date
- Item summary
- Estimated delivery date
- Track order link
- Continue shopping link

### 8. USER DASHBOARD/PROFILE
- Left sidebar: Menu (Orders, Addresses, Wishlist, Settings)
- Main content area: Dynamic based on menu selection
- User info card at top

### 9. WISHLIST PAGE
- Grid layout (4 columns)
- Remove from wishlist button
- Add to cart from card
- Share wishlist feature

### 10. 404 ERROR PAGE
- Large "404" heading
- "Page not found" message
- "Go back home" button
- Subtle illustration

---

## ✨ SPECIAL FEATURES

### 1. Product Image Gallery
- Main image: 400×500px
- Thumbnail carousel: 4 items visible, scroll horizontally
- Lightbox: Click to expand, keyboard nav (arrow keys), close on ESC

### 2. Live Chat Widget
- Fixed bottom-right, 300×400px
- Minimize/maximize
- Message bubbles (user left, agent right)
- Typing indicator (3 dots animation)

### 3. Loading States
- Skeleton loaders (pulse animation) for product cards
- Spinner for page transitions
- Progress bar for uploads

### 4. Product Comparison
- Side-by-side table view
- Max 3 products
- Hover to highlight column
- Remove product button per column

### 5. Wishlist Sharing
- Modal with social share buttons
- Copy link button
- QR code option

---

## 🎨 DESIGN PATTERNS

### Empty States
```
[Large icon/illustration]
"No items here"
"You haven't added any products to your wishlist yet"
[Primary CTA: "Explore Products"]
```

### Error States
```
[Warning/Error icon in red]
"Oops! Something went wrong"
"[Specific error message]"
[Retry button] [Go back button]
```

### Loading States
```
[Skeleton card animation]
[Skeleton card animation]
[Skeleton card animation]
```

---

## 🔐 SECURITY & TRUST ELEMENTS

1. **Trust Badges:**
   - "Verified Secure" badge (SSL padlock)
   - Payment method icons (Visa, Mastercard, PayPal)
   - "Money-back guarantee" badge

2. **Security Indicators:**
   - Green lock icon in address bar section
   - "Secure checkout" label on payment page
   - "Your data is encrypted" message

3. **Trust Signals:**
   - Customer review count
   - Vendor rating
   - Number of followers/customers
   - Verified vendor checkmark

---

## 📊 ACCESSIBILITY REQUIREMENTS

1. **WCAG 2.1 AA Compliance:**
   - Minimum contrast ratio 4.5:1 for text
   - All interactive elements keyboard accessible
   - Focus indicators visible (2px Navy outline)
   - ARIA labels for icon buttons
   - Semantic HTML structure

2. **Screen Reader Support:**
   - Alt text for all images
   - Form labels associated with inputs
   - Skip to main content link
   - Announce loading states

3. **Motion & Animation:**
   - Respect `prefers-reduced-motion`
   - All animations < 2 seconds
   - No infinite auto-play video

---

## 🚀 PERFORMANCE TARGETS

- First Contentful Paint (FCP): < 1.5s
- Largest Contentful Paint (LCP): < 2.5s
- Cumulative Layout Shift (CLS): < 0.1
- Page size: < 150KB (gzipped)
- Images: WebP format with JPEG fallback
- Lazy load: Images below fold, modals, heavy components

---

## 📝 IMPLEMENTATION NOTES

This design is built for React 19 + TypeScript with:
- TailwindCSS for styling
- Framer Motion for animations
- Lucide React for icons
- React Query for data fetching
- Zustand for state management

All components should be:
- Fully responsive
- Accessible (WCAG 2.1 AA)
- Performant (lazy loading, code splitting)
- Type-safe (full TypeScript coverage)
- Reusable across pages

---

**Design Version:** 1.0  
**Last Updated:** June 2026  
**Status:** Ready for implementation
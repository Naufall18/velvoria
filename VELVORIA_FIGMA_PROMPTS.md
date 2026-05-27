# 🎨 FIGMA UX COPILOT PROMPTS - Velvoria MARKETPLACE

## 📱 KONSEP PROJECT: Velvoria
**Tagline:** "Premium Multi-Vendor Marketplace for Luxury & Lifestyle Products"

**Deskripsi:** Platform marketplace premium yang menghubungkan brand luxury, artisan lokal, dan konsumen dengan sistem multi-vendor, live shopping, AR try-on, dan social commerce features.

---

## 🎯 PROMPT 1: MOBILE APP - BUYER INTERFACE

```
Design a premium luxury marketplace mobile app called "Velvoria" with the following specifications:

APP TYPE: Multi-vendor e-commerce marketplace for luxury goods and lifestyle products

COLOR SCHEME:
- Primary: Deep Navy (#1A1F3A)
- Secondary: Rose Gold (#E8B4A0)
- Accent: Emerald Green (#2D5F5D)
- Background: Soft Cream (#FAF8F5)
- Text: Charcoal (#2C2C2C)
- Success: Sage Green (#7FA99B)
- Error: Burgundy (#8B2635)

TYPOGRAPHY:
- Headings: Playfair Display (serif, elegant)
- Body: Inter (sans-serif, modern)
- Accent: Cormorant Garamond (for luxury feel)

DESIGN STYLE:
- Modern luxury with minimalist approach
- Generous white space
- Subtle animations and micro-interactions
- Glass morphism effects for cards
- Soft shadows and gradients
- High-quality product imagery focus

SCREENS TO DESIGN (BUYER FLOW):

1. SPLASH SCREEN & ONBOARDING
   - Animated logo reveal with particle effects
   - 3 onboarding slides with illustrations
   - Skip option and progress indicators

2. AUTHENTICATION
   - Welcome screen with brand imagery
   - Login with email/phone/social (Google, Apple, Facebook)
   - Sign up with multi-step form
   - OTP verification screen
   - Biometric login option (Face ID/Fingerprint)
   - Password recovery flow

3. HOME SCREEN (Main Dashboard)
   - Premium header with search bar and notification bell
   - User greeting with profile picture
   - Horizontal scrolling category chips with icons
   - Featured banner carousel (auto-play)
   - "Live Shopping Now" section with live indicator badges
   - "Trending Luxury" grid with heart icons
   - "New Arrivals" horizontal scroll
   - "Recommended for You" AI-powered section
   - "Top Brands" logo carousel
   - "Flash Deals" countdown timer section
   - Bottom navigation: Home, Categories, Live, Cart, Profile

4. ADVANCED SEARCH & FILTERS
   - Search bar with voice input and camera icon
   - Recent searches with delete option
   - Trending searches tags
   - Search suggestions dropdown
   - Filter panel with:
     * Price range slider (min-max)
     * Brand multi-select checkboxes
     * Category tree selection
     * Condition (New/Pre-owned)
     * Size, Color swatches
     * Rating filter (stars)
     * Shipping options
     * Sort by: Relevance, Price, Rating, Newest
   - Active filters chips with clear all option
   - Results count display

5. PRODUCT LISTING
   - Grid view (2 columns) and List view toggle
   - Product cards with:
     * High-quality image with wishlist heart
     * Brand name
     * Product title (truncated)
     * Price with discount badge
     * Rating stars and review count
     * "Verified Seller" badge
     * Quick view button
   - Infinite scroll with loading skeleton
   - Floating filter button
   - Sort dropdown at top

6. PRODUCT DETAIL PAGE (PDP)
   - Image gallery with zoom and 360° view
   - AR "Try On" button for applicable products
   - Video review section
   - Product title and brand
   - Price with original price strikethrough
   - Discount percentage badge
   - Rating summary with bar chart
   - Size selector with size guide link
   - Color swatches with names
   - Quantity selector (+/-)
   - Stock availability indicator
   - "Add to Cart" and "Buy Now" CTAs
   - "Add to Wishlist" button
   - Shipping info with delivery date estimate
   - Return policy expandable section
   - Product description with "Read More"
   - Specifications table
   - Seller information card with rating
   - "Ask Seller" chat button
   - Customer reviews section with:
     * Filter by rating
     * Verified purchase badges
     * Review images gallery
     * Helpful votes
     * Sort options
   - "You May Also Like" recommendations
   - Recently viewed products

7. AR TRY-ON FEATURE
   - Camera view with face/body detection
   - Product overlay (glasses, watches, jewelry)
   - Capture photo button
   - Share button
   - Switch camera button
   - Lighting adjustment slider
   - "Add to Cart" from AR view

8. LIVE SHOPPING
   - Live video stream with chat overlay
   - Viewer count and like animation
   - Product showcase panel (swipe up)
   - "Add to Cart" quick action
   - Host information
   - Share live session button
   - Gift/tip host feature
   - Scheduled live sessions calendar
   - Replay available indicator

9. SHOPPING CART
   - Cart items list with:
     * Product image thumbnail
     * Title and variant info
     * Price per unit
     * Quantity selector
     * Remove button
     * Save for later option
   - Seller grouping (multiple vendors)
   - Promo code input field
   - Voucher selection button
   - Price breakdown:
     * Subtotal
     * Shipping fee
     * Discount
     * Tax
     * Total (prominent)
   - "Proceed to Checkout" CTA
   - Recommended products carousel
   - Empty cart state with illustration

10. CHECKOUT FLOW
    - Progress stepper (Shipping > Payment > Review)
    - Shipping address selection/add new
    - Address form with map picker
    - Delivery options:
      * Standard (3-5 days)
      * Express (1-2 days)
      * Same day
      * Pickup point
    - Delivery time slot picker
    - Gift options (message, wrapping)
    - Payment method selection:
      * Credit/Debit card
      * Digital wallets (GoPay, OVO, Dana)
      * Bank transfer
      * Installment plans
      * COD (Cash on Delivery)
    - Card input form with security badges
    - Order review summary
    - Terms checkbox
    - "Place Order" CTA
    - Order confirmation screen with:
      * Success animation
      * Order number
      * Estimated delivery
      * Track order button
      * Continue shopping button

11. ORDER TRACKING
    - Order status timeline with icons:
      * Order placed
      * Payment confirmed
      * Processing
      * Shipped
      * Out for delivery
      * Delivered
    - Live map tracking
    - Courier information with photo
    - Contact courier button
    - Estimated arrival time
    - Order details expandable
    - "Received Order" confirmation button
    - "Report Issue" button

12. WISHLIST
    - Grid view of saved products
    - Move to cart button
    - Remove from wishlist
    - Price drop notification badge
    - Back in stock indicator
    - Share wishlist option
    - Create multiple lists (Collections)
    - Empty state with browse suggestions

13. NOTIFICATIONS CENTER
    - Tabs: All, Orders, Promotions, Updates
    - Notification cards with:
      * Icon/image
      * Title and description
      * Timestamp
      * Action button
      * Mark as read
    - Clear all option
    - Notification settings link

14. USER PROFILE
    - Profile header with:
      * Avatar with edit button
      * Name and member since
      * Loyalty tier badge
      * Points balance
    - Menu items:
      * My Orders
      * Wishlist
      * Addresses
      * Payment Methods
      * Loyalty Program
      * Vouchers & Coupons
      * Reviews & Ratings
      * Help Center
      * Settings
      * Invite Friends (referral)
      * Logout

15. ORDER HISTORY
    - Tabs: All, To Pay, To Ship, To Receive, Completed, Cancelled
    - Order cards with:
      * Order number and date
      * Product thumbnails
      * Total amount
      * Status badge
      * Action buttons (Track, Review, Reorder, Contact Seller)
    - Search orders
    - Filter by date range

16. REVIEW & RATING
    - Product info header
    - Star rating selector (1-5)
    - Review text area
    - Photo/video upload (multiple)
    - Anonymous option checkbox
    - Submit button
    - Review guidelines

17. LOYALTY PROGRAM
    - Current tier display with progress bar
    - Points balance (large)
    - Tier benefits comparison table
    - Points history timeline
    - Redeem rewards catalog
    - Referral program section
    - How to earn points guide

18. CHAT/MESSAGING
    - Conversation list with:
      * Seller avatar
      * Last message preview
      * Timestamp
      * Unread badge
    - Chat interface with:
      * Product context card
      * Message bubbles
      * Image/file sharing
      * Quick replies
      * Order inquiry templates
      * Typing indicator
    - Customer service bot option

19. SETTINGS
    - Account settings
    - Notification preferences (toggle switches)
    - Language selection
    - Currency selection
    - Privacy settings
    - Security (change password, 2FA)
    - App preferences (theme, data saver)
    - About & Legal
    - Delete account option

20. HELP CENTER
    - Search FAQs
    - Category cards (Orders, Payments, Shipping, Returns)
    - Popular articles
    - Contact support options:
      * Live chat
      * Email
      * Phone
      * WhatsApp
    - Submit ticket form

SPECIAL FEATURES TO INCLUDE:
- Dark mode support
- Pull-to-refresh animations
- Skeleton loading states
- Empty states with illustrations
- Error states with retry options
- Success confirmations with animations
- Bottom sheets for quick actions
- Floating action buttons where appropriate
- Haptic feedback indicators
- Accessibility features (large text, screen reader support)
- Offline mode indicators
- Loading progress indicators

INTERACTIONS & ANIMATIONS:
- Smooth page transitions
- Card hover effects
- Button press states
- Swipe gestures (delete, save)
- Parallax scrolling effects
- Lottie animations for success/loading
- Micro-interactions on icons
- Shimmer effects on loading

Make the design feel premium, trustworthy, and user-friendly with attention to detail in spacing, alignment, and visual hierarchy.
```

---

## 🎯 PROMPT 2: MOBILE APP - SELLER/VENDOR INTERFACE

```
Design a seller dashboard mobile app for "Velvoria" marketplace with the following specifications:

APP TYPE: Vendor management interface for luxury marketplace sellers

USE THE SAME COLOR SCHEME AND TYPOGRAPHY as the buyer app for brand consistency.

DESIGN STYLE:
- Professional and data-focused
- Dashboard-style layouts
- Charts and analytics visualizations
- Quick action buttons
- Status indicators and badges

SCREENS TO DESIGN (SELLER FLOW):

1. SELLER ONBOARDING
   - Welcome screen for sellers
   - Business type selection (Individual, Business, Brand)
   - Multi-step registration:
     * Business information
     * Legal documents upload
     * Bank account details
     * Tax information
     * Store branding (logo, banner)
   - Verification pending screen
   - Approval confirmation

2. SELLER DASHBOARD (Home)
   - Header with store name and avatar
   - Quick stats cards:
     * Today's sales
     * Pending orders
     * Total products
     * Store rating
   - Sales chart (daily/weekly/monthly toggle)
   - Recent orders list (quick view)
   - Low stock alerts
   - Performance metrics
   - Quick actions: Add Product, View Orders, Messages
   - Bottom nav: Dashboard, Products, Orders, Analytics, More

3. PRODUCT MANAGEMENT
   - Product list with:
     * Thumbnail
     * Title and SKU
     * Price
     * Stock quantity
     * Status (Active/Inactive)
     * Edit/Delete actions
   - Search and filter products
   - Bulk actions (activate, deactivate, delete)
   - "Add New Product" FAB button

4. ADD/EDIT PRODUCT
   - Product images upload (multiple, drag to reorder)
   - Product title input
   - Category selection (multi-level)
   - Brand input
   - Description rich text editor
   - Pricing:
     * Regular price
     * Sale price
     * Discount percentage (auto-calculated)
   - Inventory:
     * SKU
     * Stock quantity
     * Low stock threshold
     * Allow backorders toggle
   - Variants section:
     * Add size/color/material options
     * Variant-specific pricing and stock
     * Variant images
   - Shipping:
     * Weight and dimensions
     * Shipping class
     * Processing time
   - SEO section (meta title, description, keywords)
   - Product status (Draft, Active, Scheduled)
   - Save and publish buttons

5. ORDER MANAGEMENT
   - Order tabs: New, Processing, Shipped, Completed, Cancelled
   - Order cards with:
     * Order number
     * Customer name
     * Order date
     * Total amount
     * Status badge
     * Quick actions
   - Order detail view:
     * Customer information
     * Shipping address
     * Product items list
     * Payment status
     * Order timeline
     * Action buttons: Accept, Process, Ship, Cancel
   - Print invoice/packing slip
   - Bulk order processing

6. SHIPPING MANAGEMENT
   - Create shipment form:
     * Courier selection
     * Tracking number input
     * Shipping date
     * Notes
   - Print shipping label
   - Shipment tracking
   - Shipping history

7. INVENTORY MANAGEMENT
   - Stock overview dashboard
   - Low stock alerts list
   - Out of stock products
   - Bulk stock update
   - Stock movement history
   - Import/export stock CSV

8. ANALYTICS & REPORTS
   - Date range selector
   - Revenue chart (line/bar graph)
   - Top selling products
   - Sales by category pie chart
   - Customer demographics
   - Traffic sources
   - Conversion rate
   - Average order value
   - Export reports button

9. CUSTOMER MANAGEMENT
   - Customer list with:
     * Name and avatar
     * Total orders
     * Total spent
     * Last order date
   - Customer detail view
   - Order history per customer
   - Send message to customer

10. REVIEWS & RATINGS
    - Overall rating display
    - Rating distribution chart
    - Review list with:
      * Customer name
      * Rating stars
      * Review text
      * Product
      * Date
      * Reply option
    - Filter by rating
    - Respond to reviews

11. PROMOTIONS & MARKETING
    - Create discount codes:
      * Code name
      * Discount type (percentage/fixed)
      * Minimum purchase
      * Usage limit
      * Validity period
    - Active promotions list
    - Flash sale scheduler
    - Featured product selection
    - Marketing campaign performance

12. LIVE SHOPPING STUDIO
    - Schedule live session:
      * Date and time
      * Duration
      * Title and description
      * Featured products
      * Thumbnail image
    - Go live button
    - Live streaming interface:
      * Camera view
      * Chat overlay
      * Viewer count
      * Product showcase panel
      * Pin product to stream
      * End stream button
    - Live session analytics
    - Replay management

13. FINANCIAL MANAGEMENT
    - Earnings overview:
      * Available balance
      * Pending clearance
      * Total earnings
    - Transaction history
    - Payout requests
    - Payment method management
    - Invoice generation
    - Tax reports

14. MESSAGES/INBOX
    - Conversation list with customers
    - Chat interface
    - Quick reply templates
    - Product sharing in chat
    - Order inquiry handling
    - Unread message counter

15. STORE SETTINGS
    - Store profile:
      * Store name
      * Logo and banner
      * Description
      * Contact information
      * Business hours
      * Location
    - Shipping settings:
      * Shipping zones
      * Shipping methods
      * Rates
      * Processing time
    - Return policy
    - Terms and conditions
    - Vacation mode toggle

16. NOTIFICATIONS
    - New order alerts
    - Low stock warnings
    - Customer messages
    - Review notifications
    - Payment received
    - Payout completed
    - System announcements

17. SELLER PROFILE & ACCOUNT
    - Profile information
    - Verification status
    - Seller rating and badges
    - Performance metrics
    - Account settings
    - Subscription/plan details
    - Help and support
    - Logout

SPECIAL SELLER FEATURES:
- Real-time order notifications
- Quick action shortcuts
- Barcode scanner for inventory
- Bulk operations
- Export data functionality
- Performance insights
- Competitor analysis
- Inventory forecasting
- Multi-user access (team members)

Make the seller interface efficient, data-rich, and easy to manage multiple products and orders simultaneously.
```

---

## 🎯 PROMPT 3: WEB APPLICATION - RESPONSIVE DESIGN

```
Design a responsive web application for "Velvoria" luxury marketplace with the following specifications:

PLATFORM: Desktop and tablet web application (responsive)

USE THE SAME COLOR SCHEME AND TYPOGRAPHY as the mobile apps for brand consistency.

DESIGN STYLE:
- Wide-screen optimized layouts
- Multi-column grids
- Hover states and interactions
- Mega menus
- Sidebar navigation where appropriate
- Modal dialogs and overlays

PAGES TO DESIGN (WEB VERSION):

1. HOMEPAGE (Desktop)
   - Full-width hero banner with carousel
   - Sticky navigation bar with:
     * Logo
     * Category mega menu
     * Search bar (expanded)
     * Icons: Wishlist, Cart (with count), Profile
   - Category grid (6-8 columns)
   - Featured collections with large imagery
   - Live shopping section with multiple streams
   - Product grid (4-5 columns)
   - Brand showcase
   - Newsletter subscription
   - Footer with:
     * About links
     * Customer service
     * Social media
     * Payment methods
     * App download badges

2. PRODUCT LISTING PAGE (Desktop)
   - Left sidebar with filters (always visible)
   - Breadcrumb navigation
   - Results header with count and sort
   - Product grid (3-4 columns)
   - Pagination
   - Recently viewed sidebar

3. PRODUCT DETAIL PAGE (Desktop)
   - Two-column layout:
     * Left: Image gallery with thumbnails
     * Right: Product information and actions
   - Sticky "Add to Cart" on scroll
   - Tabbed content: Description, Specifications, Reviews, Shipping
   - Related products carousel
   - Zoom on hover functionality

4. SHOPPING CART (Desktop)
   - Two-column layout:
     * Left: Cart items table
     * Right: Order summary (sticky)
   - Quantity controls
   - Remove items
   - Continue shopping link
   - Recommended products

5. CHECKOUT (Desktop)
   - Multi-step with sidebar summary
   - Form layouts optimized for desktop
   - Inline validation
   - Progress indicator at top

6. USER DASHBOARD (Desktop)
   - Left sidebar navigation
   - Main content area with widgets
   - Order history table
   - Quick stats cards

7. SELLER DASHBOARD (Desktop)
   - Top navigation bar
   - Left sidebar menu
   - Main dashboard with charts and graphs
   - Data tables with sorting and filtering
   - Multi-panel layouts

8. ADMIN PANEL (Desktop)
   - Comprehensive admin interface with:
     * User management
     * Vendor approval
     * Product moderation
     * Order overview
     * Analytics dashboard
     * Content management
     * System settings
     * Reports generation

RESPONSIVE BREAKPOINTS:
- Desktop: 1920px, 1440px, 1280px
- Tablet: 1024px, 768px
- Mobile: 375px, 414px

DESKTOP-SPECIFIC FEATURES:
- Hover effects on products
- Mega menus with images
- Multi-column layouts
- Sidebar filters (always visible)
- Larger image galleries
- Tabbed interfaces
- Data tables
- Advanced charts and graphs
- Keyboard shortcuts
- Drag and drop functionality

INTERACTIONS:
- Smooth scrolling
- Parallax effects
- Fade-in animations on scroll
- Hover zoom on images
- Dropdown menus
- Modal dialogs
- Toast notifications
- Loading overlays

Make the web version feel spacious, professional, and take advantage of the larger screen real estate while maintaining the luxury brand feel.
```

---

## 🎯 PROMPT 4: ADMIN DASHBOARD - WEB INTERFACE

```
Design a comprehensive admin dashboard for "Velvoria" marketplace platform with the following specifications:

APP TYPE: Super admin control panel for marketplace management

USE THE SAME COLOR SCHEME with slight modifications:
- Primary: Deep Navy (#1A1F3A)
- Secondary: Steel Blue (#4A5F7A)
- Accent: Amber (#F59E0B)
- Background: Light Gray (#F5F7FA)
- Sidebar: Dark Navy (#0F1419)

DESIGN STYLE:
- Professional dashboard aesthetic
- Data-dense layouts
- Advanced data visualization
- Multi-level navigation
- Complex tables and forms

PAGES TO DESIGN (ADMIN PANEL):

1. ADMIN LOGIN
   - Centered login form
   - Two-factor authentication
   - Remember device option
   - Security badges

2. MAIN DASHBOARD
   - Top navigation bar with:
     * Logo
     * Global search
     * Notifications
     * Admin profile
   - Left sidebar navigation (collapsible)
   - Main content area with:
     * KPI cards (Total Sales, Active Users, Vendors, Products)
     * Revenue chart (line graph)
     * Sales by category (pie chart)
     * Recent orders table
     * Top selling products
     * User growth chart
     * Geographic sales map
     * Real-time activity feed

3. USER MANAGEMENT
   - User list table with:
     * Avatar
     * Name and email
     * Role (Buyer, Seller, Admin)
     * Status (Active, Suspended, Banned)
     * Registration date
     * Last login
     * Actions (View, Edit, Suspend, Delete)
   - Advanced filters and search
   - Bulk actions
   - Export users
   - Add new user
   - User detail view with:
     * Profile information
     * Order history
     * Activity log
     * Permissions management

4. VENDOR MANAGEMENT
   - Vendor list with approval status
   - Pending approvals queue
   - Vendor detail view:
     * Business information
     * Documents verification
     * Product catalog
     * Sales performance
     * Customer reviews
     * Payout history
   - Approve/reject vendors
   - Suspend vendor account
   - Commission settings per vendor

5. PRODUCT MANAGEMENT
   - All products table
   - Product moderation queue
   - Approve/reject products
   - Featured products management
   - Category management (tree view)
   - Brand management
   - Bulk product operations
   - Product import/export

6. ORDER MANAGEMENT
   - All orders table with advanced filters
   - Order status overview
   - Order detail view
   - Dispute management
   - Refund processing
   - Order analytics
   - Export orders

7. PAYMENT MANAGEMENT
   - Transaction list
   - Payment gateway settings
   - Payout management:
     * Pending payouts
     * Processed payouts
     * Payout schedule
   - Commission tracking
   - Financial reports
   - Tax management

8. CONTENT MANAGEMENT
   - Homepage banner management
   - Category images
   - Static pages editor (About, Terms, Privacy)
   - Blog management
   - FAQ management
   - Email templates
   - Push notification composer

9. MARKETING & PROMOTIONS
   - Campaign management
   - Discount code generator
   - Flash sale scheduler
   - Featured products selection
   - Banner ad management
   - Email marketing campaigns
   - SMS marketing
   - Push notification campaigns

10. ANALYTICS & REPORTS
    - Custom date range selector
    - Revenue reports
    - Sales by category/vendor/product
    - User acquisition reports
    - Conversion funnel
    - Traffic analytics
    - Customer lifetime value
    - Cohort analysis
    - Export reports (PDF, Excel)

11. REVIEW & RATING MODERATION
    - All reviews list
    - Flagged reviews queue
    - Approve/reject/delete reviews
    - Fake review detection
    - Review analytics

12. CUSTOMER SUPPORT
    - Support ticket system
    - Live chat monitoring
    - Canned responses management
    - Support agent assignment
    - Ticket analytics
    - Customer satisfaction scores

13. LOGISTICS MANAGEMENT
    - Shipping provider integration
    - Shipping zones configuration
    - Delivery tracking
    - Return/refund management
    - Warehouse management

14. SYSTEM SETTINGS
    - General settings
    - Payment gateway configuration
    - Shipping settings
    - Tax configuration
    - Email/SMS settings
    - API keys management
    - Security settings
    - Backup and restore

15. ROLE & PERMISSIONS
    - Admin roles management
    - Permission matrix
    - Activity log
    - Access control

16. NOTIFICATIONS CENTER
    - System alerts
    - User reports
    - Vendor requests
    - Low stock alerts
    - Payment issues
    - Security alerts

ADMIN-SPECIFIC FEATURES:
- Advanced data tables with sorting, filtering, pagination
- Bulk operations
- Data export (CSV, Excel, PDF)
- Real-time updates
- Activity logs
- Audit trails
- Multi-level user roles
- API documentation
- System health monitoring
- Database backup tools

Make the admin panel powerful, efficient, and capable of managing all aspects of the marketplace platform.
```

---

## 📋 ADDITIONAL DESIGN GUIDELINES

### ACCESSIBILITY
- WCAG 2.1 AA compliance
- Minimum contrast ratio 4.5:1
- Touch targets minimum 44x44px
- Screen reader support
- Keyboard navigation
- Alt text for images
- Focus indicators

### PERFORMANCE
- Lazy loading images
- Skeleton screens
- Optimized assets
- Progressive web app (PWA) capabilities
- Offline mode support

### SECURITY VISUAL INDICATORS
- SSL badges
- Secure payment icons
- Verified seller badges
- Trust signals
- Privacy indicators

### LOCALIZATION
- RTL support
- Multi-currency display
- Date/time format flexibility
- Number format localization

---

## 🎨 DESIGN ASSETS TO REQUEST

When using UX Copilot, also request:
- Icon set (custom icons for categories, actions, status)
- Illustration set (empty states, onboarding, errors)
- Loading animations (Lottie files)
- Success/error animations
- Product placeholder images
- Avatar placeholders
- Logo variations (light/dark mode)

---

## 📱 PROTOTYPE INTERACTIONS

Request interactive prototype with:
- Page transitions
- Button states
- Form validations
- Modal animations
- Swipe gestures
- Pull-to-refresh
- Infinite scroll
- Tab switching
- Accordion expand/collapse

---

## ✅ CHECKLIST BEFORE FINALIZING

- [ ] All user flows are complete
- [ ] Consistent spacing and alignment
- [ ] Responsive breakpoints covered
- [ ] Dark mode variants
- [ ] Loading and error states
- [ ] Empty states with CTAs
- [ ] Success confirmations
- [ ] Accessibility features
- [ ] Brand consistency across all screens
- [ ] Interactive prototype ready



# 🗄️ Velvoria DATABASE SCHEMA (DETAIL)

## USERS
- `id` (UUID, PK)
- `email` (unique, required)
- `password_hash` (required)
- `first_name`, `last_name`
- `phone`, `avatar_url`, `bio`
- `role` (buyer, seller, admin)
- `status`
- `email_verified_at`, `phone_verified_at`
- `2fa_enabled`
- `created_at` / `updated_at`

## VENDORS
- `id` (UUID, PK)
- `user_id` (FK)
- `business_name`, `business_type`
- `commission_rate`
- `rating`
- `status` (pending/approved/suspended)
- `kyc_verified`, `bank_account_verified`
- `created_at` / `updated_at`

## PRODUCTS
- `id` (UUID, PK)
- `vendor_id` (FK)
- `category_id` (FK)
- `brand_id` (FK)
- `title`, `description`, `sku`
- `price`, `original_price`, `discount_percentage`
- `rating`, `reviews_count`, `stock_quantity`
- `status` (enum)
- `created_at` / `updated_at`

## PRODUCT_IMAGES
- `id`
- `product_id` (FK)
- `url`
- `is_primary` (bool)

## CATEGORIES
- `id`, `name`
- `parent_id` (self-reference)

## BRANDS
- `id`, `name`, `logo_url`

## ORDERS
- `id` (UUID, PK)
- `user_id` (FK)
- `order_number`
- `status`
- `total_amount`, `tax_amount`, `discount_amount`, `shipping_amount`
- `shipping_address_id`, `billing_address_id`
- `payment_method`, `payment_status`
- `notes`
- `created_at` / `updated_at`

## ORDER_ITEMS
- `id` (PK)
- `order_id` (FK)
- `product_id` (FK)
- `product_snapshot` (JSON)
- `qty`
- `unit_price`

## TRANSACTIONS
- `id` (UUID, PK)
- `user_id` (FK)
- `order_id` (FK)
- `amount`
- `type` (payment, refund, wallet_topup)
- `status`
- `gateway_response` (JSON)
- `created_at` / `updated_at`

## WISHLIST
- `id`
- `user_id` (FK)
- `product_id` (FK)
- `created_at`

## ADDRESSES
- `id`, `user_id` (FK)
- `type` (shipping/billing)
- `address`, `city`, `province`
- `postal_code`, `country`, `lat`, `lng`

## REVIEWS
- `id`
- `user_id` (FK)
- `product_id` (FK)
- `rating`
- `content`
- `images` (JSON array)
- `created_at`

## VOUCHERS / COUPONS
- `id`, `code`
- `discount_type`, `discount_value`
- `min_purchase`, `usage_limit`
- `valid_from`, `valid_to`, `status`

## LOYALTY_POINTS
- `id`, `user_id`
- `points`, `tier`
- `history` (array)
- `created_at`

## MESSAGES / CHATS
- Thread id, sender_id, receiver_id, message, type, created_at
- Support for product/order context

## NOTIFICATIONS
- `id`, `user_id`, `type`
- `title`, `body`, `data`, `is_read`, `created_at`

## ADMIN
- `id`, `email`, `password_hash`, `role`, `status`, `permissions`, `2fa_enabled`, `created_at`

---
_Note: Auxiliary linking tables for many-to-many as needed (flash sales, collections, shipping zones, etc). Standard soft-deletes, audit logging (updated_by, deleted_at, etc) on all main tables._
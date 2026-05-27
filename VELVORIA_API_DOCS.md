# 🌐 Velvoria API DOCUMENTATION (ESSENTIAL ENDPOINTS)

All endpoints RESTful. Auth: Bearer JWT (unless stated).

---

## AUTH / USER

**POST /api/v1/auth/register**
- Req: { email, name, password, phone }
- Res: { token, user }

**POST /api/v1/auth/login**
- Req: { email/phone, password }
- Res: { token, user }

**POST /api/v1/auth/social**
- Req: { provider, token }
- Res: { token, user }

**POST /api/v1/auth/refresh**
- Req: { refresh_token }
- Res: { token }

**POST /api/v1/auth/logout**
- Req: {}
- Res: { success }

**GET /api/v1/users/me**
- Auth: Bearer
- Res: { profile, addresses, loyalty_points }

**PATCH /api/v1/users/me**
- Auth: Bearer
- Req: { ...fields }

---

## PRODUCT / CATEGORY / BRAND

**GET /api/v1/products**
- Params: q, category, brand, min_price, max_price, page, per_page, sort
- Res: { products: [], pagination }

**GET /api/v1/products/{id}**
- Res: { product }

**POST /api/v1/products**
- Auth: Seller
- Req: { ... }
- Res: { product }
  
**PATCH /api/v1/products/{id}**
- Auth: Seller
- Req: { ... }
- Res: { product }
  
**DELETE /api/v1/products/{id}**
- Auth: Seller
- Res: { success }

**GET /api/v1/categories**
- Res: [ ... ]
**GET /api/v1/brands**
- Res: [ ... ]

---

## VENDOR

**GET /api/v1/vendors/{id}**
- Public vendor profile/info

**GET /api/v1/vendors**
- List/search vendors

**PATCH /api/v1/vendors/{id}**
- Auth: Vendor
- Update vendor profile/settings

---

## ORDER / CART

**GET /api/v1/carts/me**
- View shopping cart

**POST /api/v1/carts/add**
- Add item to cart

**POST /api/v1/orders**
- Place order ({ shipping, items, payment, ... })

**GET /api/v1/orders/me**
- List user's orders

**GET /api/v1/orders/{order_id}**
- Order detail

**PATCH /api/v1/orders/{order_id}/cancel**
- Cancel order

**POST /api/v1/orders/{order_id}/pay**
- Payment endpoint (if not automatic)

---

## PAYMENT

**GET /api/v1/payments/methods**
- List enabled payment methods

**POST /api/v1/payments/checkout**
- Trigger payment intent, get redirect url/virtual account/QR

---

## WISHLIST

**GET /api/v1/wishlist**
**POST /api/v1/wishlist/add**
**DELETE /api/v1/wishlist/{product_id}**

---

## CHAT

**GET /api/v1/chat/threads**
**GET /api/v1/chat/threads/{id}**
**POST /api/v1/chat/threads**
**POST /api/v1/chat/send**

---

## REVIEW & RATING

**GET /api/v1/products/{id}/reviews**
**POST /api/v1/products/{id}/reviews**

---

## NOTIFICATIONS

**GET /api/v1/notifications**
**PATCH /api/v1/notifications/{id}/read**

---

## ADMIN

**GET /api/v1/admin/users**
**PATCH /api/v1/admin/vendors/{id}/approve**
**DELETE /api/v1/admin/products/{id}**

---

_For full OpenAPI/Swagger docs, see /docs endpoint of deployed API._
# PHP OOP Mini Web Shop – Exercise

A tiny **MVC-ish** PHP site to practice OOP in a real web context. It demonstrates:

- Namespaces + PSR-4-style autoloading (`App\` via `src/Autoloader.php`)
- **Abstract class** (`AbstractEntity`)
- **Trait** (`Timestampable`)
- **Interfaces** (Repository, DiscountStrategy)
- **Strategy pattern** (`NoDiscountStrategy`, `PercentageDiscountStrategy`)
- **Dependency Injection** (controllers receive `CartService`, which receives a `ProductRepositoryInterface` and a `DiscountStrategyInterface`)
- **Encapsulation** (entities have private fields with getters)
- **Static method** (`CartService::formatMoney`)
- **Custom exception** placeholder (`DomainException`)

## How to run (XAMPP / PHP built-in server)

1. Put the project folder somewhere accessible by your web server (e.g., `htdocs/oop-php-web-exercise`).
2. Start Apache (or run `php -S localhost:8000 -t public` from the project root).
3. Visit `http://localhost/oop-php-web-exercise/public/` (or `http://localhost:8000/`).

## Your Tasks

### Part A — Core OOP
1. **Add a new discount strategy**: Implement `CouponCodeDiscountStrategy` that takes a coupon code (e.g., `SAVE10` => 10%). Switch strategies based on a query param or form input.
2. **Add inheritance**: Create `BookProduct` that extends `Product` and adds `author` and `isbn`. Display it in the products list.
3. **Add a domain exception**: Throw a custom `DomainException` if someone tries to add a product ID that doesn't exist.

### Part B — Persistence Layer
4. **Swap repository**: Create `FileProductRepository` that loads products from `data/products.json`. It must implement `ProductRepositoryInterface`. Demonstrate polymorphism by wiring it in `public/*.php`.
5. **(Stretch)** Create a `PdoProductRepository` using MySQL (DSN, prepared statements).

### Part C — Web and Forms
6. Add an input on the Products page to apply a coupon code. Persist it in session and apply via the selected `DiscountStrategy`.
7. Add server-side validation for `qty` (1..100). On invalid input, show a Bootstrap alert.
8. Create a "Checkout" page that lists totals and a fake "Place Order" button which **clears** the cart on success.

### Part D — Testing Concepts (Optional)
9. Extract `CartService::formatMoney` into a small `Money` value object class with tests (PHPUnit).

## Acceptance Criteria
- Uses **at least**: one abstract class, one trait, two interfaces, one strategy implementation, and one custom exception.
- No fatal errors; basic add/remove/clear cart flows work.
- Clean code, sensible namespaces, and no business logic in views.

---

**Tip:** To wire a different repository, change the lines in `public/*.php` where `$repo` is created. Because controllers and services depend on **interfaces**, swapping implementations is easy.

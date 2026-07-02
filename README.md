# CoreAlign 🧘‍♀️💻

CoreAlign is a comprehensive studio management and customer engagement platform built for modern Pilates and fitness studios. It bridges the gap between studio administration and the client experience by offering a dual-platform solution: a robust **Web Admin Portal** and a sleek **Customer Android App**.

Built on a powerful **Laravel** backend with a responsive **React (Inertia.js)** frontend, CoreAlign provides a seamless, lightning-fast experience for both staff and customers.

---

## 🌟 The Web Admin Portal (Studio Management)

The Web App is designed specifically for studio owners, administrators, and instructors. It provides a highly visual, data-rich environment for managing day-to-day operations.

### Key Features
- **Authentication:** Secure Staff and Admin login & signup flows.
- **Admin Dashboard:** High-level overview of studio performance, recent bookings, and active members.
- **Member Database:** A comprehensive CRM for managing client profiles, memberships, and visit history.
- **Booking Management:** Detailed calendars and list views for managing class schedules, instructor assignments, and capacity limits.
- **Instructor Portal:** A dedicated space for instructors to view their upcoming classes, manage attendance, and review schedules.
- **Finance Reports:** Deep dive into revenue, membership sales, and transaction history.
- **Branch Management:** Tools for studios with multiple locations to manage permissions and settings per branch.

*Tech Stack:* Laravel, React, Inertia.js, Tailwind CSS, Vite.

---

## 📱 The Customer Android App (Client Experience)

The mobile experience is tailored for studio members, offering a frictionless way to engage with their fitness journey directly from their smartphones.

### Key Features
- **Splash & Onboarding:** A beautiful introduction to the studio's brand.
- **Customer Home:** A personalized dashboard showing upcoming classes, membership status, and quick actions.
- **Class Schedule & Details:** Browse the weekly schedule, view detailed class descriptions (instructor, difficulty, duration), and book a spot instantly.
- **Membership Management:** Purchase new memberships, view active plans, and track usage.
- **Payment & Wallet:** Securely add, edit, and confirm credit cards for seamless checkouts.
- **Checkout Flow:** A smooth transaction experience for buying classes or memberships, complete with success confirmations.

*Tech Stack:* Laravel Blade (Mobile-Optimized Web Views), Tailwind CSS.

---

## 🛠️ Technical Setup & Installation

### Requirements
- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL or compatible database

### Getting Started

1. **Clone the repository:**
   ```bash
   git clone https://github.com/michelle07-09/CoreAlign.git
   cd CoreAlign
   ```

2. **Install PHP and Node dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Make sure to configure your `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in the `.env` file.*

4. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

5. **Build Assets & Start the Server:**
   ```bash
   npm run build
   php artisan serve
   ```
   *The application will automatically detect your device. Access the URL via a desktop browser to view the Admin Web Portal, or via a mobile browser/emulator to view the Customer Android App.*

---

## 🔒 Session Configuration Note
For the best local development experience on Windows (especially when using `php artisan serve`), the application uses `SESSION_DRIVER=file` by default to prevent concurrent request deadlocks.

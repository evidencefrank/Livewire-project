# Ticket Selling System

A simple ticket-booking system built with the TALL stack (Laravel, Livewire, Alpine.js, TailwindCSS).

---

## Setup Instructions

1. **Clone the repository**

   ```bash
   git clone git@github.com:evidencefrank/Livewire-project.git
   cd livewire-project
   ```
2. **Environment setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. **Install dependencies**

   ```bash
   composer install
   npm install
   npm run dev
   ```
4. **Database migration & seeding**

   ```bash
   php artisan migrate
   # (Optional) Seed example data:
   php artisan db:seed
   ```
5. **Generate seats for an event**
   ```bash
   php artisan event:generate-seats {event_id} {rows} {cols}
   ```
6. **Serve the application**

   ```bash
   composer run dev
   ```

---

## Feature Overview

* **Events Management**: Create, edit, delete, and list events with customizable date ranges.
* **Seat Map**: Dynamic grid display of seats (available vs. sold) per event, powered by Livewire + Alpine.js.
* **Purchase Flow**: Users can select and purchase specific seats; backend prevents overbooking under high concurrency.
* **Concurrency Test**: Artisan command to simulate 100+ concurrent purchase attempts against the same seat, ensuring only one succeeds.
* **Admin Panel**: Livewire-driven CRUD interface for events, seat maps, users, and purchases with search & filter support.
* **Testing**: Comprehensive unit and feature tests covering service logic, booking flows, and booking concurrency scenarios.

---

## Concurrency Handling

---

## Architectural Decisions

* **TALL Stack**: Chosen for rapid UI development (Livewire) and minimal JavaScript overhead (Alpine.js + TailwindCSS).

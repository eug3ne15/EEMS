#  Court Exhibit & Evidence Management System (EEMS)

> A modern, lightweight web application built to digitize and secure the physical evidence registry for the **Judiciary of Kenya**. Replaces manual ledger books with real-time location mapping, role-based custody tracking, and high-security OTP-authorized disposal workflows.

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)


---

## Problem Statement
In traditional court stations, tracking physical exhibits (documents, electronics, weapons, narcotics) relies heavily on physical paper ledgers. This creates operational bottlenecks:
* Difficulty locating exhibits quickly during active court sessions.
* Risk of misplaced evidence or unverified physical handoffs between registry staff and courtrooms.
* Inefficient storage management and lack of authorization controls during evidence disposal.

**EEMS** solves this by providing a clean, high-performance digital registry that enforces accountability without adding operational friction to daily court schedules.

---

## Core Features

*  **Digitized Evidence Intake & Location Mapping:** Log incoming exhibits with case numbers (e.g., `CR/104/2026`), upload photo previews, and assign them to specific physical vaults, shelves, and bins.
*  **Zero-Friction Courtroom Handoffs:** Rapid dropdown-based dispatching (`In Storage` ➔ `In Court`) and bulk returns post-session—designed to keep daily court schedules moving fast.
*  **High-Security OTP Disposal Approval:** irreversible actions (exhibit destruction or release) require a **2-Factor OTP** sent to the Executive Officer’s email (powered by Laravel Cache & SMTP), acting as a binding digital signature.
*  **Automated PDF Certificate Generation:** Automatically compiles tamper-evident disposal and release certificates using DomPDF upon authorized sign-off.
*  **Role-Based Access Control (RBAC):**
  * **Registry Clerk:** Intake, storage mapping, dispatching, and receiving exhibits.
  * **Court Assistant:** Receives dispatched items for daily court cause lists.
  * **Magistrate:** Read-only bench view of active exhibits checked out to their courtroom.
  * **Executive Officer:** Super-admin view, capacity analytics, audit log inspection, and final OTP disposal approval.
*  **Minimalist Dark-Mode Bento Dashboard:** Visual capacity cards, quick-action feeds, and status distribution at a glance.
*  **Append-Only Audit Logging:** Non-repudiable transaction logs for every status modification across the system lifecycle.

---

##  Tech Stack

* **Framework:** [Laravel 11](https://laravel.com/)
* **Database:** MySQL 8.0 / MariaDB
* **Frontend:** Blade Templates, [Tailwind CSS](https://tailwindcss.com/)
* **Testing & Mail:** Mailtrap (Local SMTP Testing), PHPUnit

---

##  System Architecture & Database Schema

The core workflow relies on 5 primary relational entities:

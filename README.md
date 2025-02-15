# BF Therapy

## Table of Contents

1. [Overview](#overview)
   - [Solution Architecture](#solution-architecture)
   - [Wireframes (Draft)](#wireframes-draft)
   - [Features](#features)
   - [Technologies Used](#technologies-used)
   - [Installation & Setup](#installation--setup)
   - [Deployment](#deployment)

7. [User Stories](#user-stories)
8. [Use Cases](#use-cases)
   - [Use Case Diagram](#use-case-diagram)
   - [Contact Form Submission](#contact-form-submission)
10. [UML Diagram](#uml-diagram)
11. [Project Requirements Table](#project-requirements-table)


## Overview

BF Therapy is a simple Applied Behavior Analysis (ABA) landing page designed to provide information about ABA therapy and autism, offer resources, and facilitate communication through a contact form. The project uses **HTML, CSS, Bootstrap, and PHP** for its structure and functionality.

## Features
- **Home Page**: A welcoming section introducing the organization and ABA therapy.
- **ABA & Autism**: Provides information about Applied Behavior Analysis and its benefits for individuals with autism.
- **Resources**: Offers helpful links and materials for parents, caregivers, and professionals.
- **About Us**: Introduces the team and their mission.
- **Contact Form**: A PHP-based contact form for inquiries with spam prevention mechanisms.

## Technologies Used
- **Frontend:**
  - HTML, CSS, JavaScript
  - Bootstrap for responsive design
- **Backend:**
  - ASP .NET Framework (exploring replacement of PHP)
  - PHP (temporarily used for contact form submissions)
  - Considering Node.js for future backend needs
- **Hosting:** Hosted on HostGator with the domain name registered through GoDaddy.

## Installation & Setup

```sh
# Clone the repository
git clone https://github.com/Manduco/bftherapy.git

# Navigate to the project directory
cd bftherapy

# Start a local PHP server
php -S localhost:8000
```

Open [`http://localhost:8000`](http://localhost:8000) in your browser to view the site.

## Deployment

The project will be deployed on **HostGator**, with **GoDaddy** handling the domain name service. Ensure PHP is enabled on the hosting platform.

## User Stories

- **Parent**: Learn about ABA therapy to make informed decisions for my child.
- **Caregiver**: Find helpful resources on ABA therapy to support individuals with autism.
- **Website Visitor**: Easily navigate through the site to find relevant information quickly.
- **Potential Client**: Fill out a contact form and receive a response promptly.
- **Administrator**: Filter spam from contact form submissions to maintain site integrity.

## Use Cases

### Contact Form Submission

**Actors**: Website Visitor, System

**Description**: A visitor fills out and submits the contact form.

**Precondition**: The form is accessible on the Contact Us page.

**Steps:**

1. Visitor navigates to the Contact Us page.
2. Visitor enters required details (name, email, message).
3. Visitor submits the form.
4. System validates input and checks for spam.
5. If valid, system sends an email notification.
6. Administrator reviews the inquiry and responds.

**Postcondition**: Inquiry is successfully recorded and responded to.

## UML Diagram



## Project Requirements Table

| ID | Requirement         | Description                                                |
| -- | ------------------- | ---------------------------------------------------------- |
| R1 | Responsive Design   | Ensure the website is fully responsive using Bootstrap.    |
| R2 | Contact Form        | Implement a contact form with spam filtering.              |
| R3 | Informational Pages | Provide detailed information about ABA therapy and autism. |
| R4 | Hosting             | Deploy the project on HostGator with GoDaddy DNS.          |
| R5 | Security            | Implement basic security measures for form handling.       |





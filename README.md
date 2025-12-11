# GROCE EASY – Smart Grocery Shopping System

GROCE EASY is a user-friendly online grocery shopping platform designed to provide a seamless and efficient buying experience. 
The system enables customers to browse products, manage their cart, place orders, and schedule doorstep delivery with ease. 
It focuses on convenience, speed, and real-time updates.

**Overview**

  GROCE EASY is built to simplify daily grocery purchases by providing:
  
  A clean and intuitive interface
  
  Easy product search and filtering
  
  Cart management with real-time updates
  
  Delivery slot selection
  
  User authentication
  
  Admin product/stock management
  
  The system aims to bring grocery shopping to users’ fingertips with maximum efficiency.

**Project Objective**

  To develop a reliable, responsive, and secure web application for grocery shopping that enables:
  
      Streamlined browsing
      
      Smooth cart/checkout flow
      
      Efficient order processing
      
      Controlled inventory management

**Key Features**

  User Features

      Account Registration & Login
      
      Browse groceries by category
      
      Add/remove products from cart
      
      Update item quantities
      
      Search & filter products
      
      Select delivery timing and address
      
      Place orders and view order history

  Admin Features

      Add, edit, and delete products
      
      Manage stock levels
      
      Track customer orders
      
      Update order status
      
      View customer details

  System Features

      Fully dynamic product management
      
      AJAX-based cart updates
      
      Responsive UI for mobile & desktop
      
      Secure user authentication
      
      Real-time notifications

  Tech Stack
      Frontend
      
      HTML5
      
      CSS3
      
      JavaScript
      
      AJAX (for cart updates)
      
      Backend
      
      PHP
      
      MySQL (database)
      
      XAMPP / WAMP server
      
      Tools
      
      Git & GitHub
      
      VS Code / NetBeans
      
      phpMyAdmin

**Database Modules**
  1. Users Table- 
    Stores user account details

  2. Products Table- 
    Stores product name, price, category, stock, and image

  3. Orders Table- 
    Order details, address, delivery slot & status

  4. Order Items Table- 
    Tracks items placed inside each order

  5.  Admin Table- 
    Admin login details

**Project Structure**

    GROCE-EASY/
    │── index.php
    │── login.php
    │── register.php
    │── cart.php
    │── checkout.php
    │── order_success.php
    │── admin/
    │   ├── add_product.php
    │   ├── manage_stock.php
    │   ├── orders.php
    │── assets/
    │   ├── css/
    │   ├── js/
    │   ├── images/
    │── includes/
    │   ├── db_connect.php
    │   ├── header.php
    │   ├── footer.php
    │── database/
    │   └── grocery.sql
    └── README.md

**How to Run This Project**
  1. Install Requirements

          XAMPP / WAMP
     
          PHP 7+
     
          MySQL
  
  2. Setup

          Download/clone the project
          
          Move folder to htdocs/
          
          Import grocery.sql in phpMyAdmin
          
          Run project in browser:
          
          http://localhost/GROCE-EASY/

**Security Features**

  Password encryption

  Validation for forms

  SQL injection prevention

  Secure login sessions

**Future Enhancements**

  Mobile application (Android/iOS)

  Online payment integration

  AI-based recommendation system

  Voice-enabled product search

  Discount & coupon system

**Conclusion**

GROCE EASY offers a fast, efficient, and modern grocery shopping experience.
With robust backend functionality and a smooth user interface, it simplifies day-to-day shopping and provides reliable service for both customers and admins.

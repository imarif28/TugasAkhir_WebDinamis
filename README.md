# Student Department Consultation System

A dynamic web application built with native PHP for helping students choose the right academic department through an intelligent consultation system.

## Project Overview

This system provides personalized department recommendations based on student preferences, interests, and academic background through an interactive questionnaire interface.

## Tech Stack

- **Backend**: PHP Native
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Server**: XAMPP (Apache + MySQL)
- **Development Environment**: Visual Studio Code

## Documentation
<div align="center">
<img src="https://drive.google.com/uc?export=view&id=1aGOmg5ubQ0xmIW_XrVKIxW4aVVkQELjt" width="600" alt="Gambar1">
<img src="https://drive.google.com/uc?export=view&id=1TgX20WwOmdn36AV0rOE6T4xX5GQlDU7H" width="600" alt="Gambar2">
<img src="https://drive.google.com/uc?export=view&id=1QXGk0m3O6S4dvVf3XcfHfkadXTkLOFVN" width="600" alt="Gambar3">
<img src="https://drive.google.com/uc?export=view&id=1a5TR7t16FngTJEGom1YYN_7Umx2clRVz" width="600" alt="Gambar4">
<img src="https://drive.google.com/uc?export=view&id=1pQNR9T0Y6NOvJAoQwpOtweNS7ppKtfHH" width="600" alt="Gambar5">
</div>



## Features

### User Interface
- **Landing Page**: Introduction and system overview
- **User Registration**: Name and age collection
- **Interactive Questionnaire**: Multi-step questions about interests and preferences
- **Results Display**: Personalized department recommendations
- **Responsive Design**: Compatible across different screen sizes

### Admin Panel
- **Secure Login**: Admin authentication system
- **Fact Management**: Add new consultation facts and rules
- **User Management**: View and manage user entries
- **Results Overview**: Monitor consultation outcomes

### Core Functionality
- **Expert System Logic**: Rule-based recommendation engine
- **Dynamic Content**: Real-time question generation
- **Data Persistence**: Store user responses and results
- **Report Generation**: Consultation history and analytics

## System Architecture

```
consultation-system/
├── index.php              # Landing page
├── user-identity.php      # User registration
├── questions/             # Question modules
│   ├── question1.php
│   ├── question2.php
│   └── ...
├── conclusion.php         # Results display
├── admin/
│   ├── login.php         # Admin authentication
│   ├── dashboard.php     # Admin panel
│   ├── add-facts.php     # Fact management
│   └── manage-users.php  # User management
├── assets/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── images/           # Static images
└── config/
    └── database.php      # Database configuration
```

## Installation Guide

### Prerequisites
- XAMPP or similar local server environment
- Web browser (Chrome, Firefox, Edge)
- Text editor (VS Code recommended)

### Setup Instructions

1. **Download and Install XAMPP**
   ```
   Download from: https://www.apachefriends.org/
   ```

2. **Clone/Download Project**
   ```
   Place files in: xampp/htdocs/consultation-system/
   ```

3. **Database Setup**
   - Start Apache and MySQL in XAMPP Control Panel
   - Access phpMyAdmin: `http://localhost/phpmyadmin`
   - Create database: `consultation_db`
   - Import SQL schema (if provided)

4. **Run Application**
   ```
   Access: http://localhost/consultation-system/
   ```

## Database Schema

### Tables Structure

| Table | Purpose | Key Fields |
|-------|---------|------------|
| users | Store user information | id, name, age, timestamp |
| questions | Question bank | id, question_text, type |
| facts | Expert system rules | id, condition, recommendation |
| results | Consultation outcomes | user_id, department, confidence |
| admin | Admin authentication | username, password |

## User Journey

### Student Flow
1. **Welcome Screen**: System introduction and navigation
2. **Identity Collection**: Name and age input with validation
3. **Questionnaire**: Sequential questions about interests and preferences
4. **Processing**: Expert system analyzes responses
5. **Results**: Personalized department recommendations with explanations

### Admin Flow
1. **Login**: Secure authentication
2. **Dashboard**: Overview of system statistics
3. **Fact Management**: Add/edit consultation rules
4. **User Management**: View consultation history
5. **Analytics**: System performance metrics



## Developer

- **Name:** Ilham Muhammad Arif  
- **Institution:** Politeknik Negeri Semarang  
- **Course**: Dynamic Web Programming  

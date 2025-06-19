# 📄 Smart Resume Builder (AI-Enhanced)

### 🧠 Project Description  
Smart Resume Builder is a modern web tool that allows users to input their career information and generate a beautifully styled, professional resume using AI (GPT-3.5). The resume is returned in clean HTML, saved in a MySQL database, and styled with TailwindCSS — perfect for career websites or SaaS resume platforms.

## 🚀 Features
- 🧠 AI-generated, customized resumes
- 🎨 TailwindCSS-styled form interface
- 🗃️ Resume HTML stored in MySQL for future retrieval
- ⚡ Real-time resume generation using OpenAI API

## ⚙️ How to Run

### 1. 📁 Clone the Repository
```bash
git clone https://github.com/yourusername/smart-resume-builder-php.git
cd smart-resume-builder-php
```

### 2. 🗃️ Set Up MySQL Database
```sql
CREATE DATABASE smart_resume;

USE smart_resume;

CREATE TABLE resumes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  html TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

### 3. 🔧 Configure API & DB
In `config.php`, update your:
- MySQL credentials
- OpenAI API key (`gpt-3.5-turbo` recommended)

### 4. ▶️ Run the App
Place project in your XAMPP/WAMP `htdocs` folder and access via:
```
http://localhost/smart-resume-builder-php/index.php
```

## 📂 File Structure
```
index.php           # Tailwind form interface
generate.php        # AI prompt + resume generation logic
config.php          # Database + API setup
README.md           # Project overview and setup
```

## 🧰 Tech Stack
- PHP 8+
- MySQL
- OpenAI API (GPT-3.5)
- TailwindCSS

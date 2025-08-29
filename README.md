# 🚀 Bulk Directory Creation in PHP

This project demonstrates how to **create multiple directories (folders) in PHP** using the built-in [`mkdir()`](https://www.php.net/manual/en/function.mkdir.php) function and loops.  
It is designed for beginners who want to learn **file system automation in PHP** with real-world use cases.  

---

## 📌 Problems This Solves
- ⏳ Wasting time creating folders manually.  
- ❓ Confusion about how to use `mkdir()` in PHP.  
- 📂 Lack of clear examples for **bulk directory creation**.  
- 🛠️ Beginners struggling to automate directory structures in real projects.  

---

## ✨ Features
- Create multiple directories in one go.  
- Beginner-friendly PHP code with comments.  
- Practical use cases: uploads, user profiles, category-based folders.  
- Lightweight and easy to integrate into existing projects.  

---

## 📂 Project Structure
```
/Bulk-Directory-Creation
  ├── create.php    # Main script to create directories
  └── README.md    # Documentation
```

---

## 🛠️ How to Use
1. Clone this repository:
   ```bash
   git clone https://github.com/cybergears/Bulk-Directory-Creation.git
   ```
2. Move into the project folder:
   ```bash
   cd Bulk-Directory-Creation
   ```
3. Run the project on your PHP server (XAMPP, WAMP, MAMP, or PHP built-in server).  
4. Open `create.php` in your browser.  
5. The script will automatically create the required folders.  

---

## 💡 Example Code
```php
<?php
$folders = ['images', 'videos', 'documents', 'uploads'];

foreach ($folders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
        echo "Directory '$folder' created successfully.<br>";
    } else {
        echo "Directory '$folder' already exists.<br>";
    }
}
?>
```

---

## 🎥 Tutorial Video
👉 Watch the full step-by-step tutorial here:  
[**How to Create Bulk Directories in PHP | Step-by-Step Tutorial for Beginners**](https://youtu.be/5hYCaEHQ6A8)  

---

## 🌐 More From Me
- 🔗 Website: [**www.shahrukhsheikh.com**](https://www.shahrukhsheikh.in)  
- 🎥 YouTube Channel: [**Code with SRK**](https://www.youtube.com/@CodeSRK)  

---

## 👨‍💻 About Me
Hi, I’m **Shahrukh Sheikh** – an IT professional, freelancer, educator, and content creator from India 🇮🇳.  
I love solving problems with code, building **real-world inspired tutorials**, and making technology easy to understand for everyone.  

- 💼 Freelancer & Entrepreneur  
- 🎥 YouTuber: *Code with SRK*  
- 🌱 Passionate about teaching, tech, and personal growth  
- 🛠️ Experienced in PHP, JavaScript, React Native, and full-stack development  

Let’s connect and build something amazing together 🚀  

---

## 🤝 Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.  

---

## 📜 License
This project is open-source and available under the **MIT License**.

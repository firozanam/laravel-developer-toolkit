# 🚀 Laravel Developer Toolkit

**A comprehensive collection of web-based tools for Laravel developers working on shared hosting environments where terminal access is limited.**

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Laravel](https://img.shields.io/badge/Laravel-Compatible-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://php.net)

---

## 📋 Table of Contents

- [Overview](#-overview)
- [Key Benefits](#-key-benefits)
- [Available Tools](#-available-tools)
- [Installation](#-installation)
- [Usage Instructions](#-usage-instructions)
- [Security Considerations](#-security-considerations)
- [Troubleshooting](#-troubleshooting)
- [Support & Donations](#-support--donations)
- [Creator Information](#-creator-information)
- [License](#-license)

---

## 🎯 Overview

The Laravel Developer Toolkit is a free, open-source collection of web-based utilities designed specifically for Laravel developers who work on shared hosting environments (like cPanel) where SSH/terminal access is restricted or unavailable. These tools provide a user-friendly web interface to perform essential Laravel development and maintenance tasks directly through your browser.

**Perfect for:**
- Shared hosting environments (cPanel, Plesk, etc.)
- Situations where SSH access is unavailable
- Quick Laravel maintenance tasks
- Emergency fixes and deployments
- Learning Laravel development workflows

---

## 🌟 Key Benefits

### ✅ **No Terminal Required**
- Execute Laravel commands through a web interface
- Perfect for shared hosting environments
- No SSH access needed

### ✅ **Production-Ready**
- Built with security best practices
- Comprehensive error handling and logging
- Real-time command output streaming

### ✅ **User-Friendly Interface**
- Modern, responsive design
- Clear status indicators and progress tracking
- Detailed execution logs and diagnostics

### ✅ **Comprehensive Toolkit**
- 7 essential Laravel development tools
- Database management capabilities
- Asset compilation and optimization
- Permission and configuration fixes

### ✅ **Free & Open Source**
- MIT License - completely free to use
- Open source - contribute and customize
- No subscription fees or limitations

---

## 🛠️ Available Tools

### .htaccess file to strip '/public' from the URL of a Laravel installation.
Upload the .htaccess file to the root directory "public_html" of your Laravel installation.
- This wil allow you to access your Laravel application without the '/public' in the URL.
- This is useful for Laravel applications that are installed in a subdirectory of the web root.
- This is not necessary if your Laravel application is installed in the web root.
- You don't need to break the Laravel folder structure.

### 1. **🏠 Main Dashboard** (`laravel_developer_toolkit.php`)
Central hub providing access to all tools with:
- Modern, intuitive interface
- Tool descriptions and quick access buttons
- Creator information and support links
- Donation integration (Buy Me Coffee, PayPal, Google Pay, Binance)

### 2. **🗄️ Database Migration Manager** (`laravel_db_migrate.php`)
Comprehensive database migration management:
- **Run Migrations**: Execute pending migrations with real-time progress
- **Rollback**: Safely rollback migrations with confirmation prompts
- **Refresh**: Drop all tables and re-run migrations
- **Fresh**: Fresh migration with optional seeding
- **Status Tracking**: View migration status and history
- **Safety Features**: Confirmation codes for destructive operations

### 3. **💾 Database Restore Tool** (`laravel_db_restore.php`)
Advanced database restoration capabilities:
- **SQL File Import**: Upload and import large SQL files
- **Table Management**: Drop existing tables before import
- **Memory Optimization**: Handles large imports with increased limits
- **Progress Tracking**: Real-time import progress monitoring
- **Error Handling**: Comprehensive error reporting and recovery

### 4. **📦 NPM Build Manager** (`laravel_npm_build.php`)
Complete Node.js and NPM management:
- **Environment Detection**: Automatic Node.js and NPM version detection
- **Dependency Installation**: npm install with legacy-peer-deps support
- **Build Processes**: Production and development builds
- **Cache Management**: Clear NPM and build caches
- **Real-time Output**: Live command execution feedback

### 5. **🔐 Permissions Fixer** (`laravel_permissions_fixer.php`)
Automated Laravel permission management:
- **Directory Creation**: Ensure all required directories exist
- **Permission Setting**: Set proper 755/644 permissions
- **Storage Security**: Create .htaccess files for storage protection
- **Comprehensive Scanning**: Process entire Laravel application
- **Progress Tracking**: Real-time permission fixing progress

### 6. **🚨 Production Error Fixer** (`laravel_prod_error-fixer.php`)
Automated production issue resolution:
- **Hot File Removal**: Remove development hot files
- **Directory Setup**: Ensure all required directories exist
- **Cache Clearing**: Clear all Laravel caches using internal Artisan
- **Environment Validation**: Check .env file accessibility
- **Storage Link Verification**: Validate storage symlinks
- **Detailed Diagnostics**: Comprehensive error reporting

### 7. **⚡ Artisan Command Runner** (`laravel_run_artisan.php`)
Safe Laravel Artisan command execution:
- **Predefined Commands**: Curated list of safe commands
- **Security Restrictions**: Only allows whitelisted commands
- **Real-time Output**: Live command execution feedback
- **Common Commands**: Quick access to frequently used commands
- **Server Information**: Display PHP and server details

### 8. **🔗 Storage Symlink Creator** (`laravel_symlink_creator.php`)
Advanced storage symlink management:
- **Automatic Creation**: Create storage symlinks with one click
- **Conflict Resolution**: Handle existing files/directories
- **Test Image Generation**: Create and test image accessibility
- **Access Rules**: Generate proper .htaccess files
- **Diagnostics**: Comprehensive symlink testing and validation

---

## 📥 Installation

### Prerequisites
- Laravel application (any version)
- PHP 7.4 or higher
- Web server with PHP support
- File upload permissions

### Step-by-Step Installation

1. **Download the Toolkit**
   ```bash
   git clone https://github.com/firozanam/laravel-developer-toolkit.git
   ```
   Or download the ZIP file and extract it.

2. **Upload Scripts to Your Server**
   - Upload the entire `scripts` folder to your Laravel application's `public` directory
   - Your structure should look like:
     ```
     your-laravel-app/
     ├── public/
     │   ├── scripts/
     │   │   ├── laravel_developer_toolkit.php
     │   │   ├── laravel_db_migrate.php
     │   │   ├── laravel_db_restore.php
     │   │   ├── laravel_npm_build.php
     │   │   ├── laravel_permissions_fixer.php
     │   │   ├── laravel_prod_error-fixer.php
     │   │   ├── laravel_run_artisan.php
     │   │   ├── laravel_symlink_creator.php
     │   │   └── placeholder.png
     │   └── index.php
     ├── app/
     ├── config/
     └── ...
     ```

3. **Set Proper Permissions**
   ```bash
   chmod 755 public/scripts/
   chmod 644 public/scripts/*.php
   ```

4. **Access the Toolkit**
   - Open your browser and navigate to: `https://yourdomain.com/scripts/laravel_developer_toolkit.php`
   - You'll see the main dashboard with all available tools

### Quick Start
1. Start with the **Permissions Fixer** to ensure proper file permissions
2. Use **Production Error Fixer** to resolve common issues
3. Run **Storage Symlink Creator** if you use file storage
4. Access other tools as needed for your specific requirements

---

## 📖 Usage Instructions

### 🏠 Main Dashboard
1. Navigate to `yourdomain.com/scripts/laravel_developer_toolkit.php`
2. Click on any tool button to access specific functionality
3. Each tool opens in the same window with a "Return to Dashboard" option

### 🗄️ Database Migration Manager
1. **Running Migrations**:
   - Click "Run Migrations" button
   - Monitor real-time progress
   - Review execution log for details

2. **Rolling Back**:
   - Select rollback option
   - Enter confirmation code when prompted
   - Specify number of steps to rollback

3. **Fresh Migration**:
   - Use for complete database reset
   - Option to run seeders after migration
   - ⚠️ **Warning**: This will delete all data

### 💾 Database Restore Tool
1. **Prepare SQL File**:
   - Export your database to SQL format
   - Ensure file is accessible via web

2. **Import Process**:
   - Enter SQL file URL or path
   - Choose whether to drop existing tables
   - Monitor import progress
   - Review detailed logs

### 📦 NPM Build Manager
1. **Check Environment**:
   - Tool automatically detects Node.js and NPM versions
   - Displays current environment status

2. **Install Dependencies**:
   - Click "NPM Install" for standard installation
   - Use "NPM Install (Legacy)" for compatibility issues

3. **Build Assets**:
   - "NPM Run Dev" for development builds
   - "NPM Run Build" for production builds
   - Monitor real-time output

### 🔐 Permissions Fixer
1. **Automatic Execution**:
   - Tool runs automatically when accessed
   - Scans entire Laravel application
   - Sets proper permissions (755 for directories, 644 for files)

2. **Review Results**:
   - Check processing summary
   - Review any errors or warnings
   - Verify permission verification summary

### 🚨 Production Error Fixer
1. **Comprehensive Check**:
   - Automatically runs all diagnostic checks
   - Displays overall status (Success/Warning/Error)

2. **Review Issues**:
   - Check each category (Hot File, Directories, Cache, Environment, Storage)
   - Review detailed execution log
   - Address any remaining issues manually

### ⚡ Artisan Command Runner
1. **Select Command**:
   - Choose from dropdown of safe commands
   - Add optional parameters if needed

2. **Execute**:
   - Click "Run Command" button
   - Monitor real-time output
   - Review execution results

3. **Quick Commands**:
   - Use quick-access cards for common commands
   - One-click execution for frequently used tasks

### 🔗 Storage Symlink Creator
1. **Create Symlink**:
   - Click "Create Symlink" button
   - Monitor creation process
   - Review detailed logs

2. **Test Access**:
   - Click "Test Storage Access" button
   - Verifies HTTP accessibility
   - Automatically cleans up test files

---

## 🔒 Security Considerations

### ⚠️ **CRITICAL SECURITY NOTICE**

**These tools are intended for temporary use only. DELETE ALL SCRIPTS immediately after completing your tasks.**

### Security Best Practices

1. **Temporary Usage Only**
   - Upload scripts only when needed
   - Delete immediately after use
   - Never leave scripts on production servers permanently

2. **Access Control**
   - Restrict access to authorized personnel only
   - Consider IP-based access restrictions
   - Use strong authentication if available

3. **File Permissions**
   - Ensure scripts are not executable by unauthorized users
   - Set proper file permissions (644 for PHP files)
   - Restrict directory access where possible

4. **Monitoring**
   - Monitor server logs for unauthorized access attempts
   - Review script execution logs
   - Watch for unusual activity

5. **Environment Considerations**
   - Use only on development/staging environments when possible
   - Exercise extreme caution on production servers
   - Have backups before running any destructive operations

### Built-in Security Features

- **Command Whitelisting**: Artisan runner only allows predefined safe commands
- **Confirmation Codes**: Destructive operations require confirmation
- **Input Validation**: All inputs are sanitized and validated
- **Error Handling**: Comprehensive error reporting without exposing sensitive data
- **Automatic Cleanup**: Test files are automatically removed after testing

---

## 🔧 Troubleshooting

### Common Issues and Solutions

#### **Issue: "Permission Denied" Errors**
**Solution:**
1. Run the Permissions Fixer tool first
2. Ensure your hosting provider allows file permission changes
3. Contact hosting support if permissions cannot be modified

#### **Issue: "Class not found" or "Autoloader" Errors**
**Solution:**
1. Ensure you're in the correct Laravel root directory
2. Run `composer install` if vendor directory is missing
3. Check that all Laravel files are properly uploaded

#### **Issue: Database Connection Errors**
**Solution:**
1. Verify `.env` file exists and is readable
2. Check database credentials in `.env`
3. Ensure database server is accessible from your hosting environment

#### **Issue: NPM Commands Fail**
**Solution:**
1. Check if Node.js is installed on your hosting environment
2. Try the "Legacy" option for NPM install
3. Clear NPM cache using the provided option
4. Contact hosting provider about Node.js availability

#### **Issue: Storage Symlink Creation Fails**
**Solution:**
1. Check if your hosting provider supports symbolic links
2. Ensure proper permissions on both source and target directories
3. Try manual symlink creation if automated method fails

#### **Issue: Artisan Commands Don't Work**
**Solution:**
1. Verify PHP CLI is available
2. Check that Laravel application is properly configured
3. Ensure all required directories exist and are writable

### Getting Help

If you encounter issues not covered here:

1. **Check Server Logs**: Review your hosting provider's error logs
2. **Test Environment**: Try tools on a local development environment first
3. **Contact Support**: Reach out using the contact information below
4. **Community**: Check Laravel community forums and documentation

---

## 💝 Support This Project To Keep It Free

This toolkit is **completely free** and open-source. If you find it helpful and would like to support continued development, consider making a donation:

### 🎁 Support Options

- **₿ Binance**: Cryptocurrency support payments are accepted
```
Binance ID: 780196125
```
### Currently Unavailable Support Options
- **☕ Buy Me a Coffee**: [buymeacoffee.com/firozanam](https://buymeacoffee.com/firozanam)
- **💳 PayPal**: [paypal.me/firozanam](https://paypal.me/firozanam)
- **📱 Google Pay**: Available through the toolkit interface


### 🤝 Other Ways to Support

- ⭐ **Star this repository** on GitHub
- 🐛 **Report bugs** and suggest improvements
- 📢 **Share** with other Laravel developers
- 📝 **Write tutorials** or blog posts about the toolkit

### 📞 Professional Services

Need custom Laravel development or consulting? Contact me for:

- **Custom Laravel Applications**
- **Performance Optimization**
- **Code Reviews and Audits**
- **Training and Mentoring**
- **Emergency Support**

---

## 👨‍💻 Creator Information

**Firoz Anam**
*Full Stack Developer & Laravel Specialist*

### 📬 Contact Information

- **📧 Email**: [engr.firozanam@gmail.com](mailto:engr.firozanam@gmail.com)
- **🐙 GitHub**: [github.com/firozanam](https://github.com/firozanam)
- **💼 LinkedIn**: [linkedin.com/in/firozanam](https://www.linkedin.com/in/firozanam)
- **🌐 Website**: [neurotechsystem.com](https://neurotechsystem.com)

### 🏆 Expertise

- **Laravel Development** (5+ years)
- **PHP & MySQL** (Expert level)
- **Frontend Technologies** (Vue.js, React, JavaScript)
- **DevOps & Deployment** (Docker, CI/CD, Cloud platforms)
- **Database Design** (MySQL, PostgreSQL, MongoDB)

---

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

### MIT License Summary

✅ **Commercial Use** - Use in commercial projects
✅ **Modification** - Modify and customize the code
✅ **Distribution** - Share and distribute freely
✅ **Private Use** - Use in private projects
❌ **Liability** - No warranty or liability
❌ **Warranty** - No warranty provided

### Attribution

While not required, attribution is appreciated:

```
Laravel Developer Toolkit by Firoz Anam
https://github.com/firozanam/laravel-developer-toolkit
```

---

## 🚀 Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

### Development Guidelines

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/AmazingFeature`)
3. **Commit** your changes (`git commit -m 'Add some AmazingFeature'`)
4. **Push** to the branch (`git push origin feature/AmazingFeature`)
5. **Open** a Pull Request

---

## ⚠️ Disclaimer

**USE AT YOUR OWN RISK**: These tools are provided as-is without any warranty. Always test on development environments first and ensure you have proper backups before using on production servers. The creator is not responsible for any damage or data loss that may occur from using these tools.

---

## 🙏 Acknowledgments

- **Laravel Community** for the amazing framework
- **PHP Community** for continuous innovation
- **Open Source Contributors** who make projects like this possible
- **Users and Testers** who provide valuable feedback

---

**⭐ If this toolkit helped you, please consider giving it a star on GitHub!**

*Made with ❤️ by [Firoz Anam](https://github.com/firozanam)*

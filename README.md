# Modern Medical Clinic WordPress Theme

A custom, high-performance WordPress theme developed for a modern medical clinic. This theme was built from scratch, converting a static design into a fully dynamic CMS-driven website.

## 🚀 Features

- **Custom Template Routing:** Engineered a custom routing engine in `functions.php` using the `template_include` filter to map URL slugs (e.g., `/about`, `/services`) to specialized PHP templates automatically, even before pages are created in the database.
- **Responsive Design:** Mobile-first architecture using CSS Design Tokens for consistent styling and modern ES6+ JavaScript.
- **Dynamic Content:** Full support for WordPress standard features like Post Thumbnails, Custom Navigation, and Title Tags.
- **Performance Optimized:** Standard asset enqueuing and lightweight code structure for fast loading speeds.
- **Automated Deployment:** Includes a Bash script for seamless synchronization between local development and Pantheon cloud hosting.

## 🛠️ Technologies Used

- **CMS:** WordPress
- **Backend:** PHP
- **Frontend:** HTML5, CSS3 (Custom Properties/Design Tokens), Vanilla JavaScript (ES6+)
- **DevOps:** Git, Pantheon Cloud, Bash Scripting, Rsync

## 📂 Project Structure

- `assets/css/`: Design tokens (`tokens.css`) and main stylesheet.
- `assets/js/`: Modular scripts for carousel, mobile interaction, and main logic.
- `functions.php`: Core theme functionality, asset management, and custom routing logic.
- `*.php`: Standard WordPress template hierarchy (header, footer, front-page, page templates, etc.).
- `pantheon-deploy.sh`: Deployment automation script for Pantheon environments.

## ⚙️ Setup & Installation

1.  Clone this repository into your local WordPress installation's `wp-content/themes/` directory:
    ```bash
    cd wp-content/themes/
    git clone [repo-url] modern-medical-clinic
    ```
2.  Activate the "Modern Medical Clinic" theme via the WordPress Admin Dashboard (**Appearance > Themes**).
3.  Configure your permalinks to **"Post name"** under **Settings > Permalinks** to support the custom routing engine.

## 🚢 Deployment to Pantheon

This project is optimized for the Pantheon workflow (Dev > Test > Live).

1.  Ensure you have SSH access to your Pantheon site.
2.  The provided `pantheon-deploy.sh` script automates pushing your local changes to the Pantheon Dev environment.
3.  Run the deployment script:
    ```bash
    chmod +x pantheon-deploy.sh
    ./pantheon-deploy.sh
    ```
4.  After the script finishes, log into your Pantheon Dashboard to promote the code to the **Test** and **Live** environments.

---
*Developed as a modern, scalable solution for clinical web presence.*

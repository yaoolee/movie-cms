# Movie CMS 🎬

A simple PHP + MySQL based CMS for managing a movie database.

## 📁 Features

- Display a list of movies
- Add new movies (via SQL or admin UI)
- Store info like:
  - Title
  - Runtime
  - Language
  - Type (Real / Animate)
  - Release date
  - Director

## 🛠️ Technologies

- PHP (Vanilla)
- MySQL (with phpMyAdmin or CLI)
- MAMP (local testing)
- Git / GitHub for version control
- InfinityFree (final deployment)

---

## 🗃️ Database Schema

**Table:** `movies`

| Field        | Type            | Description          |
|--------------|------------------|----------------------|
| `id`         | INT UNSIGNED     | Primary key (auto)   |
| `title`      | VARCHAR(100)     | Movie title          |
| `runtime`    | INT              | Length in minutes    |
| `lang`       | VARCHAR(100)     | Language             |
| `type`       | ENUM             | Real / Animate       |
| `release_date` | DATE          | Release date         |
| `director`   | VARCHAR(100)     | Director name        |

> Sample data can be found in `cms.sql`

## 🖥️ Local Setup (MAMP)

1. Clone this repo
2. Import `cms.sql` into your local MySQL (use phpMyAdmin or terminal)
3. Update `includes/database.php` with your local DB credentials
4. Run with MAMP (htdocs folder)

## 🧪 Sample Data

20 sample movies are pre-inserted in `cms.sql`.



## 🌐 Deployment

The final project will be deployed on InfinityFree (free PHP hosting).

## 🌐 Team Member
- Qianyi Dong
- Pallavi Dhawan
- Yao Tiem Lee
- Alyssa Austin
- Anjaney Athikavil Binoj

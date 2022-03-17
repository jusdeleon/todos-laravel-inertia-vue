<div id="top"></div>

<div align="center">
    <h3 align="center">Todos</h3>
    <p align="center">
    <a href="https://todos-laravel-inertia-vue.herokuapp.com/">View Demo</a>
    ·
    <a href="https://github.com/jusdeleon/todos-laravel-inertia-vue/issues">Report Bug</a>
    ·
    <a href="https://github.com/jusdeleon/todos-laravel-inertia-vue/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->

## About The Project

Todos app built with Laravel, Inertia, Vue.js, and Tailwind CSS

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

To get the app up and running, follow the steps below


### Prerequisites

* Git
* composer
* PHP ^8.0
* npm
* PostgreSQL

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/jusdeleon/todos-laravel-inertia-vue.git
   ```
2. Copy the contents of the `env.example` to a new file named `.env` in the same directory. Fill out corresponding values.
3. Run all of these commands in the root directory of the project in order:
   ```sh
   composer install
   php artisan key:generate
   php artisan migrate
   npm install
   npm run dev
   ```
<p align="right">(<a href="#top">back to top</a>)</p>

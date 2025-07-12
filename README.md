<h1>🛠️ Project_Ksop_Laravel</h1>

<h2>📦 Cara Menjalankan Project Laravel</h2>

<h3>1️⃣ Clone Repository</h3>
<pre>
git clone https://github.com/MhmmdIlyas/Project_Ksop_Laravel.git
</pre>


<h3>2️⃣ Install Dependencies Laravel</h3>
<pre>
composer install
</pre>

<h3>3️⃣ Copy File <code>.env</code> dan Atur Konfigurasi</h3>
<pre>
cp .env.example .env
</pre>
<p>
Setelah itu, buka file <code>.env</code> dan sesuaikan konfigurasi berikut sesuai kebutuhan lokal kamu:
<ul>
  <li>DB_DATABASE</li>
  <li>DB_USERNAME</li>
  <li>DB_PASSWORD</li>
</ul>
</p>

<h3>4️⃣ Generate Application Key</h3>
<pre>
php artisan key:generate
</pre>

<h3>5️⃣ Jalankan Migrasi</h3>
<pre>
php artisan migrate
</pre>

<h3>6️⃣ Jalankan Server Laravel</h3>
<pre>
php artisan serve
</pre>
<p>Buka browser dan akses: <a href="http://localhost:8000" target="_blank">http://localhost:8000</a></p>

<hr />

<h2>✅ Persyaratan Sistem</h2>
<ul>
  <li>PHP >= 8.2</li>
  <li>Composer</li>
  <li>MySQL / MariaDB</li>
  <li>Node.js & npm (opsional untuk frontend)</li>
</ul>

<h2>👥 Kontributor</h2>
<h4>Follow akun github kami : </h4>
<ul>
  <li><a href="https://github.com/MhmmdIlyas" target="_blank">@MhmmdIlyas</a></li>
  <li><a href="https://github.com/nurzan1026" target="_blank">M NUR ICHSAN IN</a></li>
</ul>

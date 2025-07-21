<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hubungi Kami</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #2f6eff;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 60px 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
      justify-content: center;
    }
    .contact-info {
      flex: 1;
      min-width: 300px;
    }
    .contact-info h2 {
      margin-bottom: 30px;
      color: #000;
    }
    .contact-info p {
      margin-bottom: 20px;
      font-size: 16px;
    }
    .contact-form {
      flex: 1;
      min-width: 300px;
      background: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .contact-form h3 {
      margin-bottom: 20px;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 10px;
      border: 1px solid #F16722;
      background: #fdf6f6;
      font-size: 15px;
    }
    .form-row {
      display: flex;
      gap: 10px;
    }
    .form-row input {
      flex: 1;
    }
    .contact-form button {
      width: 100%;
      padding: 15px;
      background-color: #f5421e;
      color: #fff;
      border: none;
      border-radius: 25px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }
    .contact-form button:hover {
      background-color: #d83c1c;
    }
  </style>
</head>
<body>
  <section>
    <div class="container">
      <!-- Info Kontak -->
      <div class="contact-info">
  <h2>Hubungi Kami</h2>
  <p><strong>WORKSHOP</strong><br>Jl. Raya Tajur No 58 Kota Bogor</p>
  <p>📷 Instagram: <a href="https://instagram.com/royallaundress" target="_blank">@royallaundress</a></p>
  <p>📱 WhatsApp: <a href="https://wa.me/6281292204477" target="_blank">+62 812 9220 4477</a></p>
  <p><em>Ask us for free pick up & delivery!</em></p>
</div>

      <!-- Formulir -->
      <div class="contact-form">
        <h3>Get in Touch</h3>
        <form action="#" method="POST">
          <input type="text" name="name" placeholder="Your Name" required>
          <div class="form-row">
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
          </div>
          <textarea name="message" rows="5" placeholder="Your Question" required></textarea>
          <button type="submit">Send Question</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>

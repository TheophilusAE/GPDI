# GPDI Website Portfolio

Website portfolio modern dan animatif untuk Gereja Pentakosta Di Indonesia (GPDI) yang dirancang dengan Laravel dan Tailwind CSS.

## 🚀 Fitur Utama

### ✨ Design & UI/UX
- **Modern Design**: Interface yang clean, modern, dan profesional
- **Responsive**: Fully responsive untuk semua device (desktop, tablet, mobile)
- **Animasi**: Smooth animations dengan AOS (Animate On Scroll) library
- **Gradient Design**: Beautiful gradient combinations untuk visual appeal
- **Typography**: Font Inter dan Poppins untuk readability yang optimal

### 🎯 Sections
1. **Hero Section**: Landing page dengan background gradient dan CTA buttons
2. **About Section**: Informasi tentang GPDI dengan visi & misi
3. **Services Section**: 6 pelayanan utama dengan card design yang menarik
4. **Events Section**: Acara-acara terbaru dan kegiatan rutin
5. **Contact Section**: Form kontak dan informasi lengkap
6. **Map Section**: Lokasi gereja (placeholder untuk integrasi Google Maps)

### 🛠️ Technology Stack
- **Backend**: Laravel 10+
- **Frontend**: Tailwind CSS 4.0
- **JavaScript**: Vanilla JS dengan ES6+ features
- **Animation**: AOS (Animate On Scroll)
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter, Poppins)

## 📁 Struktur File

```
GPDI/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Layout utama
│   │   └── home.blade.php             # Halaman utama
│   ├── css/
│   │   ├── app.css                    # CSS utama dengan Tailwind
│   │   └── custom.css                 # CSS custom untuk animasi
│   └── js/
│       └── app.js                     # JavaScript utama
├── routes/
│   └── web.php                        # Routes untuk website
└── README_WEBSITE.md                  # Dokumentasi ini
```

## 🚀 Cara Menjalankan

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & NPM
- Laravel 10+

### Installation
1. **Clone project** (jika belum)
   ```bash
   cd GPDI
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Serve application**
   ```bash
   php artisan serve
   ```

7. **Development mode** (untuk development)
   ```bash
   npm run dev
   ```

## 🎨 Customization

### Colors
Website menggunakan color scheme berikut:
- **Primary**: Blue (#3b82f6)
- **Secondary**: Purple (#8b5cf6)
- **Accent**: Pink (#ec4899)
- **Neutral**: Gray scale (#f9fafb to #111827)

### Typography
- **Heading**: Poppins (Bold, Semi-bold)
- **Body**: Inter (Regular, Medium)

### Animations
- **Scroll Animations**: AOS library
- **Hover Effects**: CSS transitions dan transforms
- **Loading States**: Custom loading animations
- **Parallax Effects**: Subtle parallax pada hero section

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🔧 Konfigurasi

### Tailwind CSS
Website menggunakan Tailwind CSS 4.0 dengan konfigurasi custom:
- Custom color palette
- Extended spacing scale
- Custom animations
- Responsive utilities

### JavaScript Features
- Smooth scrolling navigation
- Mobile menu toggle
- Form validation
- Notification system
- Parallax effects
- Loading states
- Ripple effects pada buttons

## 📝 Content Management

### Update Content
Untuk mengupdate konten website, edit file berikut:
- **Hero Section**: `resources/views/home.blade.php` (line 15-45)
- **About Section**: `resources/views/home.blade.php` (line 47-95)
- **Services**: `resources/views/home.blade.php` (line 97-200)
- **Events**: `resources/views/home.blade.php` (line 202-280)
- **Contact**: `resources/views/home.blade.php` (line 282-380)

### Add New Sections
1. Buat section baru di `home.blade.php`
2. Tambahkan navigation link di `layouts/app.blade.php`
3. Update routes jika diperlukan

## 🌟 Performance Features

- **Lazy Loading**: Images dan components
- **Optimized CSS**: Tailwind dengan purging
- **Minified Assets**: Production build optimization
- **Smooth Animations**: Hardware-accelerated CSS transforms
- **Responsive Images**: Optimized untuk berbagai screen sizes

## 🔒 Security Features

- **CSRF Protection**: Laravel built-in CSRF tokens
- **XSS Prevention**: Proper HTML escaping
- **Form Validation**: Client dan server-side validation
- **Secure Headers**: Laravel security middleware

## 📊 SEO Features

- **Meta Tags**: Proper title, description, keywords
- **Semantic HTML**: Proper heading structure
- **Alt Tags**: Image accessibility
- **Structured Data**: Ready untuk schema markup
- **Performance**: Core Web Vitals optimization

## 🚀 Deployment

### Production Build
```bash
npm run build
```

### Environment Variables
Pastikan set environment variables berikut:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_URL=https://yourdomain.com`

### Server Requirements
- PHP 8.1+
- MySQL/PostgreSQL
- Web server (Apache/Nginx)
- SSL certificate (HTTPS)

## 🤝 Contributing

1. Fork project
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## 📄 License

Project ini dibuat untuk GPDI. Semua hak dilindungi.

## 📞 Support

Untuk pertanyaan atau support:
- Email: info@gpdi.org
- Phone: +62 21 1234 5678

---

**Dibuat dengan ❤️ untuk GPDI**
*Website Portfolio Modern & Animatif*

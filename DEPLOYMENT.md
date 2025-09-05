# Free Hosting Guide for GPDI Website

## Vercel Deployment (Recommended for Laravel + Vite)

### Step 1: Prepare Your Code
1. Push your code to GitHub repository
2. Make sure all files are committed

### Step 2: Deploy on Vercel
1. Go to [vercel.com](https://vercel.com)
2. Sign up with GitHub
3. Click "New Project" → Import your repository
4. Vercel will automatically detect it's a Laravel app

### Step 3: Configure Build Settings
In Vercel dashboard, set these build settings:
- **Framework Preset**: Other
- **Build Command**: `npm run build`
- **Output Directory**: `public`
- **Install Command**: `npm install`

### Step 4: Set Environment Variables
In Vercel dashboard, go to Settings → Environment Variables and add:
```
APP_KEY=base64:your-generated-key
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.vercel.app
```

### Step 5: Deploy
1. Vercel will automatically build and deploy
2. Your site will be available at `https://your-app-name.vercel.app`

---

## Alternative: Vercel CLI Method

### Step 1: Install Vercel CLI
```bash
npm i -g vercel
```

### Step 2: Build Your Assets
```bash
npm run build
```

### Step 3: Deploy
```bash
vercel
```

---

## Option 3: 000WebHost (Simplest)

### Step 1: Sign Up
1. Go to [000webhost.com](https://000webhost.com)
2. Create free account

### Step 2: Upload Files
1. Download your project as ZIP
2. Upload to 000WebHost via File Manager
3. Extract files to public_html folder

### Step 3: Configure
1. Set document root to public folder
2. Create database in cPanel
3. Update .env file with database credentials

---

## Pre-Deployment Checklist

- [ ] Push code to GitHub
- [ ] Run `npm run build` to build assets
- [ ] Test locally with `php artisan serve`
- [ ] Check all images and assets load correctly
- [ ] Verify contact form works (if using)

## Environment Variables Needed

```
APP_KEY=base64:your-generated-key
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
DB_CONNECTION=pgsql (for Railway) or mysql (for others)
```

## Database Setup

For Railway: PostgreSQL (automatic)
For others: MySQL or SQLite

## Build Commands

```bash
# Install dependencies
composer install --no-dev --optimize-autoloader
npm install
npm run build

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate --force
```

## Troubleshooting

1. **Assets not loading**: Run `npm run build` before deployment
2. **Database errors**: Check environment variables
3. **500 errors**: Check logs in hosting dashboard
4. **CSS not working**: Ensure Vite build completed successfully

## Free Hosting Comparison

| Platform | Database | Storage | Bandwidth | Ease |
|----------|----------|---------|-----------|------|
| Railway | ✅ PostgreSQL | 1GB | Unlimited | ⭐⭐⭐⭐⭐ |
| Vercel | ❌ External | 100GB | 100GB | ⭐⭐⭐⭐ |
| 000WebHost | ✅ MySQL | 1GB | 1GB | ⭐⭐⭐ |
| Heroku | ✅ PostgreSQL | 1GB | 2TB | ⭐⭐⭐⭐ |

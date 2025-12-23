# Railway Deployment Guide for Resume Website

## Step 1: Prepare Your Project

All necessary files have been created:
- ✅ `Procfile` - Tells Railway how to run your app
- ✅ `railway.json` - Railway configuration
- ✅ `.env.example` - Environment variables template

## Step 2: Push to GitHub

Railway deploys directly from GitHub. Make sure your code is on GitHub:

```bash
git add .
git commit -m "Add Railway deployment configuration"
git push origin main
```

## Step 3: Create Railway Account

1. Go to https://railway.app
2. Sign up with GitHub (easiest option)
3. Authorize Railway to access your repositories

## Step 4: Create a New Project on Railway

1. Click "New Project" 
2. Select "Deploy from GitHub repo"
3. Find and select your `resume-website` repository
4. Click "Deploy Now"

## Step 5: Configure Environment Variables

Railway will show a dashboard. Go to **Variables** tab and add:

```
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.railway.app  (will be shown in Railway)
DB_CONNECTION=sqlite
LOG_CHANNEL=stack
SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
```

**Important:** Railway will automatically generate:
- `APP_KEY` (for encryption - do NOT change)

## Step 6: Deploy

1. Railway will automatically deploy when you push to GitHub
2. Check the **Deployments** tab to see build progress
3. Once green checkmark appears, your site is live!

## Step 7: Get Your Live URL

- Go to your Railway project dashboard
- Look for the **Public URL** or **Domain** section
- Your site will be at: `https://your-random-name.railway.app`

## Step 8: Custom Domain (Optional)

1. In Railway, go to **Settings** → **Domains**
2. Add your custom domain (e.g., albertmelendres.com)
3. Update your domain's DNS records as instructed

## Troubleshooting

**Build fails?**
- Check the build logs in Railway dashboard
- Make sure `composer.json` and `package.json` are correct

**App crashes after deploy?**
- Check logs in the **Logs** tab
- Usually means missing environment variables
- Add missing variables in **Variables** tab

**Database errors?**
- Railway uses SQLite by default (as per your config)
- Database file is stored in `/var/www/storage/database.sqlite`
- This persists between deployments automatically

## Free Tier Benefits

- Free for first $5/month
- After that: $5 usage credit every month
- Perfect for portfolio/resume sites
- Pay only for what you use

## After Deployment

Any time you push to GitHub:
```bash
git push origin main
```

Railway automatically rebuilds and redeploys your site! ✨

---

**Need help?** Check Railway docs: https://docs.railway.app

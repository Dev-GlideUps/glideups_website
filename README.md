# GlideUps Landing Page

A modern, responsive landing page for GlideUps built with Bootstrap 5, HTML, and CSS.

## Project Structure

```
glideups_web/
├── index.html              # Main HTML file
├── components/             # Reusable HTML components
│   ├── hero.html          # Hero section with navigation
│   ├── services.html      # Services grid section
│   ├── case-study.html    # Portfolio/case studies
│   ├── process.html       # Development process
│   ├── testimonials.html  # Client testimonials
│   ├── faqs.html          # FAQ accordion
│   ├── contact.html       # Contact form
│   └── footer.html        # Footer with links
├── css/
│   └── style.css          # Custom styles
├── js/
│   └── main.js            # JavaScript functionality
└── assets/
    ├── images/            # Image assets
    └── icons/             # Icon assets
```

## Features

### 1. Hero Section
- Full-width hero with background image
- Sticky navigation bar with dropdown menus
- Call-to-action buttons
- Responsive mobile menu

### 2. Services Section
- 6 service cards in a grid layout
- Hover animations
- Icon displays for each service
- Learn more links

### 3. Case Study Section
- Horizontal scrolling carousel
- Project showcase cards
- CTA card for new projects
- Smooth animations

### 4. Process Section
- Dark themed section
- Sticky left content on desktop
- 6-step development process
- Connected timeline design

### 5. Testimonials Section
- Auto-scrolling testimonial cards
- Star ratings
- Client information with avatars
- Bidirectional scroll animation

### 6. FAQs Section
- Bootstrap accordion
- Expandable/collapsible questions
- Clean, modern design
- Primary color highlights for active items

### 7. Contact Form
- Validated contact form
- Dark themed form design
- Success/error notifications
- Name, email, number, and project description fields

### 8. Footer
- Multi-column footer layout
- Link sections for services, industries, products, etc.
- Contact information
- Social media links
- Copyright notice

## Technologies Used

- **Bootstrap 5.3.0** - CSS framework
- **HTML5** - Markup
- **CSS3** - Custom styling with animations
- **JavaScript (ES6+)** - Interactive functionality
- **Google Fonts** - Plus Jakarta Sans typography

## Design Features

### Typography
- **Large Heading**: 64px, Semi-Bold, line-height: 80px
- **Semi Heading**: 24px, Semi-Bold, line-height: 36px
- **Regular Body**: 16px, Regular, line-height: 24px
- **Small Body**: 12px, Regular, line-height: 18px

### Color Palette
- **Primary**: #1dbf73 (Green)
- **Black**: #141414
- **Gray**: #707070
- **Light Gray**: #f5f5f5
- **White**: #ffffff

## Setup Instructions

### Option 1: Using XAMPP (Current Setup)
1. Place the project in `C:\xampp\htdocs\glideups_web\`
2. Start Apache server in XAMPP Control Panel
3. Open browser and navigate to: `http://localhost/glideups_web/`

### Option 2: Using Live Server (VS Code)
1. Install "Live Server" extension in VS Code
2. Right-click on `index.html`
3. Select "Open with Live Server"

### Option 3: Simple HTTP Server (Python)
```bash
# Navigate to project directory
cd C:\xampp\projects\glideups_web

# Python 3
python -m http.server 8000

# Open browser to http://localhost:8000
```

## JavaScript Features

### Smooth Scrolling
- Smooth scroll to sections when clicking navigation links
- Automatic offset for fixed navbar

### Form Validation
- Email format validation
- Phone number validation
- Required field checks
- Success/error notifications

### Animations
- Intersection Observer for section animations
- Pause on hover for sliders
- Fade-in effects on scroll

### Navigation
- Active link highlighting based on scroll position
- Navbar background change on scroll
- Mobile menu auto-close on link click

## Customization

### Changing Colors
Edit the CSS variables in `css/style.css`:
```css
:root {
    --primary-color: #1dbf73;
    --black-pri: #141414;
    --gray: #707070;
    --light-gray: #f5f5f5;
}
```

### Adding New Sections
1. Create a new HTML file in `components/`
2. Add the section to `index.html`
3. Update the loader script in `index.html`
4. Add corresponding styles in `css/style.css`

### Modifying Content
- Edit component HTML files in `components/` directory
- Update text, images, and links as needed
- Image URLs are currently pointing to Figma localhost server

## Important Notes

### Image Assets
The current implementation uses Figma's localhost server for images:
```
http://localhost:3845/assets/...
```

**To use in production:**
1. Download all images from Figma
2. Place them in `assets/images/` directory
3. Update image URLs in component HTML files
4. Replace URLs like:
   ```html
   <img src="http://localhost:3845/assets/IMAGE_ID.png">
   ```
   With:
   ```html
   <img src="assets/images/IMAGE_NAME.png">
   ```

### Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- IE11 not supported (uses modern CSS features)

### Responsive Breakpoints
- Desktop: 1200px and above
- Tablet: 768px - 1199px
- Mobile: Below 768px

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Future Enhancements

- [ ] Add backend integration for contact form
- [ ] Implement analytics tracking
- [ ] Add loading animations
- [ ] Optimize images for web
- [ ] Add SEO meta tags
- [ ] Implement dark mode toggle
- [ ] Add blog section
- [ ] Create admin panel for content management

## Contact

For questions or support, contact:
- Email: contact@glideups@gmail.com
- Phone: +92 322 222 2222

## License

Copyright © 2024 GlideUps. All rights reserved.

# Ask Free Legal Advice India 🏛️

[![Website](https://img.shields.io/badge/website-asklegaladviceindia.com-orange)](http://www.asklegaladviceindia.com)
[![License](https://img.shields.io/badge/license-All%20Rights%20Reserved-red)](./disclaimer.html)

A free legal advice platform for people in India who cannot afford costly legal services. Founded by a retired District Judge and family, this site offers general legal guidance across a wide range of areas of Indian law — entirely free of charge.

---

##  About the Project

India has one of the world's strongest judiciaries, yet access to legal counsel remains out of reach for millions due to prohibitive costs. This platform was built to bridge that gap — providing free, confidential, general legal guidance to anyone in India who needs it.

---

##  Areas of Legal Advice

| Area | Topics Covered |
|---|---|
| **Family Law** | Marriage, Divorce, Child Custody, Maintenance |
| **Business Law** | Contracts, Sale of Goods, Partnership, Cheque Dishonour, Power of Attorney |
| **Accident Law** | Insurance, Damages, Criminal Negligence, Compensation |
| **Property Law** | Gift, Settlement, Sale, Trespass/Encroachment, Easements, Registration |
| **Criminal Law** | Arrest, Bail, Trial, Prosecution, Defence, Domestic Violence, Dowry Harassment |
| **Miscellaneous** | Name Change, Power of Attorney |

---

##  How It Works

1. Visit the **Submit Your Inquiry** section on the homepage.
2. Click **"Submit Your Inquiries!"** to fill out the Google Form.
3. Our advisors will review your query and **email you back** with guidance.

It's free, confidential, and no strings attached.

---

##  Scope & Limitations

To maintain quality and relevance, we do **not** respond to:
- Requests for drafting legal documents or deeds
- Citation of case laws or judgments
- Third-party queries (involving persons not directly affected)
- Hypothetical or anonymised questions
- Matters currently pending before any court or tribunal
- Cases where an order has already been passed by a court

Please read the full [Disclaimer](./disclaimer.html) before submitting.

---

##  Tech Stack

This is a classic static/PHP website with a lightweight structure:

- **HTML / PHP** — page structure and templates
- **CSS** — custom stylesheets (`resources/css/style.css`, `css/style.css`)
- **Ionicons** — icon font (via `vendors/`)
- **Lato** — typography (Google Fonts)
- **jQuery** — sticky nav + scroll behaviour
- **Google Forms** — inquiry submission (replaces the legacy PHP mailer)
- **Google Analytics** — traffic tracking (`UA-154573205-1`)

### Local Development

A lightweight Node.js dev server is included for local preview (no PHP required):

```bash
node serve.js
# → http://localhost:3000/
```

---

##  Project Structure

```
Ask Free Legal Advice Old Site/
├── index.php              # Main homepage (modern layout)
├── ask.php                # Legacy "Ask Us" page → now redirects to Google Form
├── about.html             # About the initiative
├── disclaimer.html        # Full legal disclaimer (updated 2025)
├── faqs.html              # Frequently asked questions
├── articles.html          # Legal articles
├── bare_acts.html         # Reference to bare acts
├── judgements.html        # Notable judgements
├── feedback.php           # Feedback page
├── resources/
│   ├── css/
│   │   ├── style.css      # Main modern stylesheet
│   │   └── queries.css    # Responsive breakpoints
│   ├── js/
│   │   └── script.js      # Sticky nav + scroll JS
│   └── img/               # Images and logos
├── css/
│   └── style.css          # Legacy stylesheet (for older pages)
├── vendors/               # Normalize, grid, Ionicons
├── includes/
│   ├── header1.php        # PHP mailer logic (legacy, now inactive)
│   └── header2.php        # PHP feedback mailer (legacy, now inactive)
└── serve.js               # Local Node.js dev server
```

---

##  Disclaimer

All content on this website is provided for **general informational purposes only** and does not constitute formal legal advice. No attorney-client relationship is created by use of this site. See the full [Disclaimer](./disclaimer.html) for details.

---

##  Credits

- **Founded by:** Patrick George, Roubla Nailini

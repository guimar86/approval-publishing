<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Approval-Based Content Publishing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap 5 is assumed to be globally loaded -->

    <style>
        /* ==================================================
       Design tokens (safe to reuse across the app)
       ================================================== */
        :root {
            --brand-primary: #2563eb;
            /* blue */
            --brand-primary-dark: #1e40af;
            --brand-dark: #0f172a;
            --brand-muted: #64748b;
            --brand-bg: #f8fafc;
            --brand-card: #ffffff;
            --radius-md: 0.75rem;
        }

        body {
            background-color: var(--brand-bg);
            color: var(--brand-dark);
        }

        /* ==================================================
       Subtle Bootstrap overrides (intentionally minimal)
       ================================================== */
        .btn-brand {
            background-color: var(--brand-primary);
            border-color: var(--brand-primary);
            color: #fff;
            font-weight: 600;
            border-radius: var(--radius-md);
        }

        .btn-brand:hover {
            background-color: var(--brand-primary-dark);
            border-color: var(--brand-primary-dark);
            color: #fff;
        }

        .btn-outline-brand {
            border-color: var(--brand-primary);
            color: var(--brand-primary);
            font-weight: 600;
            border-radius: var(--radius-md);
        }

        .btn-outline-brand:hover {
            background-color: var(--brand-primary);
            color: #fff;
        }

        /* ==================================================
       Custom components (non-obvious Bootstrap usage)
       ================================================== */
        .app-navbar {
            background-color: var(--brand-card);
            border-bottom: 1px solid #e5e7eb;
        }

        .app-logo {
            font-weight: 700;
            color: var(--brand-primary);
            letter-spacing: 0.3px;
        }

        .hero-section {
            padding: 5rem 1rem 4rem;
            text-align: center;
        }

        .hero-section h1 {
            font-weight: 800;
            font-size: clamp(2rem, 4vw, 2.6rem);
            margin-bottom: 1rem;
        }

        .hero-section p {
            max-width: 680px;
            margin: 0 auto 2rem;
            color: var(--brand-muted);
            font-size: 1.1rem;
        }

        .feature-card {
            background-color: var(--brand-card);
            border: 1px solid #e5e7eb;
            border-radius: var(--radius-md);
            padding: 1.75rem;
            height: 100%;
        }

        .feature-card h5 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-card p {
            color: var(--brand-muted);
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        .workflow-section {
            background-color: #fff;
            padding: 4rem 1rem;
            border-top: 1px solid #e5e7eb;
        }

        .workflow-step {
            padding: 0.6rem 1.25rem;
            border-radius: 999px;
            background-color: var(--brand-bg);
            border: 1px solid #e5e7eb;
            font-weight: 600;
            font-size: 0.85rem;
            white-space: nowrap;
        }

        footer {
            border-top: 1px solid #e5e7eb;
            padding: 2rem 1rem;
            font-size: 0.9rem;
            color: var(--brand-muted);
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="app-navbar">
        <div class="container d-flex align-items-center justify-content-between" style="height:70px;">
            <span class="app-logo">Approval Publishing</span>
            <div class="d-flex gap-3">
                <a href="/login" class="btn btn-sm btn-outline-brand">Login</a>
                <a href="/register" class="btn btn-sm btn-brand">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section container">
        <h1>Approval-Based Content Publishing</h1>
        <p>
            A structured workflow for publishing content with approvals,
            role-based access, and real accountability — designed for business‑grade systems.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/register" class="btn btn-brand btn-lg">Get Started</a>
            <a href="/login" class="btn btn-outline-brand btn-lg">Sign In</a>
        </div>
    </section>

    <!-- Features -->
    <section class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <h5>Role-Based Workflow</h5>
                    <p>Clear separation of Author, Reviewer, and Admin responsibilities.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <h5>Approval States</h5>
                    <p>Draft → Pending → Approved → Published → Rejected lifecycle.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <h5>Audit & Feedback</h5>
                    <p>Reviewer comments, rejection reasons, and activity tracking.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <h5>Notifications</h5>
                    <p>Email or in-app alerts at every approval step.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow -->
    <section class="workflow-section">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Publishing Workflow</h2>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <span class="workflow-step">Draft</span>
                <span class="workflow-step">Pending Review</span>
                <span class="workflow-step">Approved</span>
                <span class="workflow-step">Published</span>
                <span class="workflow-step">Rejected</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            © 2026 Approval-Based Content Publishing
        </div>
    </footer>

</body>

</html>

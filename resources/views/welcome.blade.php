<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Approval-Based Content Publishing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap 5 is assumed to be globally loaded -->


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

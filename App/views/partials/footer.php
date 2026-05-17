<footer class="modern-footer mt-20 text-white">
    <div class="footer-container">

        <div class="footer-brand">
            <div class="footer-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase">
                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    <rect width="20" height="14" x="2" y="6" rx="2" />
                </svg>
                <h3>JobSeek</h3>
            </div>
            <p>Connecting talented professionals with outstanding opportunities. Find your dream career or discover top-tier talent today.</p>

            <div class="footer-socials">
                <a href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/listings">Explore Jobs</a></li>
                <li><a href="/listings/create">Post a Job</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>Resources</h4>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Support</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Get weekly job alerts and career tips straight to your inbox.</p>
            <form action="#" method="POST" onsubmit="event.preventDefault();">
                <input type="email" placeholder="Your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p>&copy; <?= date('Y'); ?> JobSeek. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Settings</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>
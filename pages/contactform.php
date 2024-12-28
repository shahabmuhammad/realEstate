<!-- Modal -->
<div id="modalGlobalContactUs" class="modal">
  <div class="modal-overlay" id="modalOverlay"></div>
  <button class="close-button" id="closeModal" aria-label="Close Modal">
    <!-- &times; -->
  </button>
  <div class="modal-content">
    <div class="modal-header">
      <h6 class="subheadline">Paragon Heights</h6>
      <h2 class="heading_">Let's Connect</h2>
    </div>
    <div class="modal-body">
      <div class="form-section">
        <h4>Online Inquiry</h4>
        <form id="contactForm" class="contact-form">
          <div class="form-input-div">
            <label for="contactFullName">Full Name</label>
            <input type="text" id="contactFullName" name="name" placeholder="Name" required />
          </div>
          <div class="form-input-div">
            <label for="contactEmail">Email</label>
            <input type="email" id="contactEmail" name="email" placeholder="Email" required />
          </div>
          <div class="form-input-div">
            <label for="contactPhone">Phone</label>
            <input type="tel" id="contactPhone" name="phone" placeholder="Phone" required />
          </div>
          <div class="form-input-div">
            <label for="contactInterest">Your Interest</label>
            <select id="contactInterest" name="interest" required>
              <option value="" disabled selected>Select an interest</option>
              <option value="buying">Buying</option>
              <option value="selling">Selling</option>
              <option value="home valuation">Home Valuation</option>
              <option value="media">Media</option>
              <option value="area information">Area Information</option>
              <option value="join newsletter">Join Newsletter</option>
            </select>
          </div>
          <div class="form-input-div custom-label-textarea">
            <label for="contactMessage">Message</label>
            <textarea id="contactMessage" name="message" placeholder="Message" required></textarea>
          </div>
          <div class="lp-disclaimer">
            <label>
              <input type="checkbox" name="termsAccepted" required />
              By providing your contact information, you agree to our
              <a href="/privacy-policy" target="_blank">Privacy Policy</a>.
            </label>
          </div>
          <div class="submit-btn_">
            <button type="submit" class="submit-button">Submit</button>
          </div>
        </form>
      </div>
      <div class="info-section">
        <h4>Contact Details</h4>
        <div class="contct-details">
          <p>
            Email:
            <a href="mailto:sultan@paragonheights-gwadar.com">sultan@paragonheights-gwadar.com</a>
          </p>
          <p>Phone: <a href="tel:+923327272448">0332-7272448</a></p>
          <p>Airport Road, Gwadar, Balochistan, Pakistan</p>
        </div>
        <ul class="social-icons_">
          <li>
            <a href="https://www.instagram.com/paragonheightsgwadar/" aria-label="Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/paragon-heights-gwadar" aria-label="LinkedIn">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/paragonheightsgwadar/" aria-label="facebook">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/@paragonheightsgwadar/" aria-label="youtube">
              <i class="fa fa-youtube-play"></i>
            </a>
          </li>
        </ul>
        <div id="formResponse" style="margin-top: 15px;display: block;color: green;font-weight: 600;font-size: 24px;"></div>
      </div>
    </div>
  </div>
</div>

<script>
  // Open modal when any element with the class 'openModal' is clicked
  document.querySelectorAll(".openModal").forEach(button => {
    button.addEventListener("click", function() {
      document.getElementById("modalGlobalContactUs").classList.add("visible");
    });
  });

  // Close modal when the close button or overlay is clicked
  document.getElementById("closeModal").addEventListener("click", function() {
    document.getElementById("modalGlobalContactUs").classList.remove("visible");
  });
  document.getElementById("modalOverlay").addEventListener("click", function() {
    document.getElementById("modalGlobalContactUs").classList.remove("visible");
  });


  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const contactform = this;
    const form = e.target;
    const formData = new FormData(form);
    const responseDiv = document.getElementById("formResponse");
    fetch("pages/process_contact_form.php", {
        method: "POST",
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
        responseDiv.style.display = "block";
        if (data.status === "success") {
          contactform.reset();
          responseDiv.style.color = "green";
        } else {
          responseDiv.style.color = "red";
        }
        responseDiv.textContent = data.message;
      })
      .catch(error => {
        responseDiv.style.display = "block";
        responseDiv.style.color = "red";
        responseDiv.textContent = "An error occurred. Please try again.";
      });
  });
</script>
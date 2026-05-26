<?php
include 'header.php';
?>

<style>
    .privacy-page{
  padding-top:120px;
}

.privacy-intro-card{
  max-width:980px;
  margin:0 auto 28px;
}

.privacy-grid{
  margin-top:28px;
}

.privacy-disclaimer,
.privacy-pcpndt-card{
  margin-top:28px;
}

.notice-card a{
  color:var(--orange);
  font-weight:900;
}

.privacy-pcpndt-card .about-actions{
  margin-top:24px;
}

@media(max-width:640px){
  .privacy-page{
    padding-top:100px;
  }
}
</style>

<!-- ================= PRIVACY POLICY PAGE ================= -->
<section class="review-section privacy-page" id="privacy">
  <div class="review-wrap">

    <div class="review-header reveal">
      <div class="section-tag">Privacy Policy</div>

      <h2>
        Patient Data <span>Protection</span>
      </h2>

      <div class="divider"></div>

      <p>
        This Privacy Policy explains how Ambika Sonography Diagnostic & Intervention Clinic
        collects, uses, and protects information submitted through this website.
      </p>
    </div>

    <!-- Privacy Intro -->
    <div class="notice-card reveal privacy-intro-card">
      <div class="notice-label">Effective Policy</div>

      <h3>Ambika Sonography respects your privacy</h3>

      <p>
        When you use our website to request an appointment, contact the clinic, or communicate
        through WhatsApp, we may collect limited personal information only for appointment
        coordination and patient communication.
      </p>

      <div class="legal-note">
        This website does not provide emergency medical consultation online. For urgent cases,
        please call the clinic directly at <strong>9288287771</strong> or <strong>9288287772</strong>.
      </div>
    </div>

    <!-- Main Grid -->
    <div class="compliance-grid privacy-grid">

      <!-- Data Collected -->
      <div class="notice-card reveal">
        <div class="notice-label">Data Collected</div>

        <h3>Information we may collect</h3>

        <p>
          When you submit an appointment request or contact form, the clinic may collect the
          following details:
        </p>

        <ul class="feature-list">
          <li>Full name</li>
          <li>Phone number</li>
          <li>Age and gender</li>
          <li>Required diagnostic service</li>
          <li>Preferred appointment date and time</li>
          <li>Notes, symptoms, or referral details shared by you</li>
        </ul>
      </div>

      <!-- How We Use Data -->
      <div class="notice-card reveal">
        <div class="notice-label">Purpose</div>

        <h3>How we use your information</h3>

        <p>
          Your submitted information is used only for clinic-related communication and
          appointment coordination.
        </p>

        <ul class="feature-list">
          <li>To confirm appointment requests</li>
          <li>To contact you through phone or WhatsApp</li>
          <li>To understand your required diagnostic service</li>
          <li>To coordinate report delivery or patient follow-up</li>
          <li>To respond to your queries</li>
        </ul>
      </div>

      <!-- WhatsApp Sharing -->
      <div class="notice-card reveal">
        <div class="notice-label">WhatsApp Communication</div>

        <h3>Use of WhatsApp</h3>

        <p>
          Appointment requests submitted through this website may open WhatsApp with your
          submitted details pre-filled so that you can send the request directly to the clinic.
        </p>

        <ul class="feature-list">
          <li>Your message is sent only after you press send on WhatsApp</li>
          <li>WhatsApp communication is used for appointment coordination</li>
          <li>Reports may be shared digitally only when required or requested</li>
        </ul>
      </div>

      <!-- Data Sharing -->
      <div class="notice-card reveal">
        <div class="notice-label">Data Sharing</div>

        <h3>We do not sell your data</h3>

        <p>
          Ambika Sonography does not sell, rent, or trade patient information to third parties.
          Your details may be accessed only by authorised clinic staff for patient coordination.
        </p>

        <ul class="feature-list">
          <li>Not sold to advertisers</li>
          <li>Not used for unrelated marketing without consent</li>
          <li>Shared only with clinic team for service coordination</li>
        </ul>
      </div>

      <!-- Patient Rights -->
      <div class="notice-card reveal">
        <div class="notice-label">Patient Rights</div>

        <h3>Correction and deletion requests</h3>

        <p>
          You may contact the clinic to update, correct, or request deletion of information
          submitted through the website.
        </p>

        <ul class="feature-list">
          <li>Phone: <a href="tel:9288287771">9288287771</a> / <a href="tel:9288287772">9288287772</a></li>
          <li>WhatsApp: <a href="https://wa.me/919288287771" target="_blank">9288287771</a></li>
          <li>Email: <a href="mailto:info@ambikasonographydic.in">info@ambikasonographydic.in</a></li>
        </ul>
      </div>

      <!-- Data Security -->
      <div class="notice-card reveal">
        <div class="notice-label">Security</div>

        <h3>Data protection measures</h3>

        <p>
          We take reasonable precautions to protect information submitted through the website.
          However, no digital platform can guarantee absolute security.
        </p>

        <ul class="feature-list">
          <li>Information is used only for clinic communication</li>
          <li>Access is limited to authorised clinic personnel</li>
          <li>Users should avoid sharing highly sensitive details through open forms</li>
        </ul>
      </div>

    </div>

    <!-- Important Medical Disclaimer -->
    <div class="notice-card critical reveal privacy-disclaimer">
      <div class="notice-label">Important Notice</div>

      <h3>Medical and emergency disclaimer</h3>

      <p>
        Information submitted through this website is used only for appointment coordination.
        This website does not provide online diagnosis, emergency consultation, or medical
        treatment advice.
      </p>

      <div class="notice-box">
        <strong>For emergencies, call the clinic directly.</strong>
        <span>
          Please do not rely only on the website appointment form for emergency diagnostic needs.
          Contact the clinic immediately at 9288287771 or 9288287772.
        </span>
      </div>
    </div>

    <!-- PCPNDT Link Notice -->
    <div class="notice-card reveal privacy-pcpndt-card">
      <div class="notice-label">PCPNDT Compliance</div>

      <h3>Fetal imaging and legal compliance</h3>

      <p>
        Ambika Sonography strictly follows PCPNDT rules. Prenatal sex determination,
        sex selection, or disclosure of fetal sex is strictly prohibited and is not performed
        at this clinic.
      </p>

      <div class="about-actions">
        <a href="index#compliance" class="btn-primary">
          View PCPNDT Notice
        </a>

        <a href="tel:9288287771" class="btn-outline">
          Contact Clinic
        </a>
      </div>
    </div>

  </div>
</section>

<?php
include 'footer.php';
?>
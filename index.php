<?php
include 'header.php'
?>
<section class="hero" id="home">
  <div class="slides-wrap" id="slidesWrap">

    <div class="slide">
      <div class="slide-bg" style="background:linear-gradient(135deg,#061020,#0f4c8a)">
        <div style="position:absolute;inset:0;opacity:.05;background-image:radial-gradient(circle,rgba(255,255,255,.8) 1px,transparent 1px);background-size:32px 32px"></div>
      </div>
      <div class="slide-content">
        <div class="slide-tag">Ambikapur's Premier Diagnostic Centre</div>
        <h1>Advanced <span>Sonography &</span><br>Diagnostic Services</h1>
        <p>State-of-the-art imaging technology with expert radiological care. 24-hour diagnostic services for your complete peace of mind.</p>
        <div class="hero-btns">
          <a href="#appointment" class="btn-primary">Book Appointment</a>
          <a href="#services" class="btn-outline">Our Services</a>
        </div>
        <p class="local-tagline">Ambikapur ka trusted diagnostic centre — accurate report, timely care.</p>
      </div>
      <div class="badge-24">24<br>HRS<br><span style="font-size:10px;font-weight:700">OPEN</span></div>
    </div>

    <div class="slide">
      <div class="slide-bg" style="background:linear-gradient(160deg,#061224,#1a4f7a)">
        <div style="position:absolute;inset:0;opacity:.04;background-image:linear-gradient(45deg,rgba(255,122,0,.5) 25%,transparent 25%),linear-gradient(-45deg,rgba(255,122,0,.5) 25%,transparent 25%);background-size:40px 40px"></div>
      </div>
      <div class="slide-content">
        <div class="slide-tag">Expert Radiologist</div>
        <h1>Dr. Tushar Anand<br><span>Gold Medalist</span> Radiologist</h1>
        <p>MBBS from Darbhanga Medical College & Hospital, Bihar; DMRD from Patna Medical College & Hospital, Bihar; DNB in Radio-Diagnosis from Sir Gangaram Hospital, New Delhi. Experienced in interventional radiology and fetal imaging.</p>
        <div class="hero-btns">
          <a href="#about" class="btn-primary">Meet the Doctor</a>
          <a href="tel:9288287771" class="btn-outline">Call Now</a>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="slide-bg" style="background:linear-gradient(135deg,#071020,#0c3d6e)">
        <div style="position:absolute;top:0;right:0;width:60%;height:100%;background:radial-gradient(circle at center,rgba(255,122,0,.12),transparent 60%)"></div>
      </div>
      <div class="slide-content">
        <div class="slide-tag">CT Scan & Digital X-Ray</div>
        <h1>Whole Body <span>CT Scan</span><br>& Digital X-Ray</h1>
        <p>CT angiography, CT-guided interventions, digital X-ray, and special diagnostic procedures — all under one roof in Ambikapur.</p>
        <div class="hero-btns">
          <a href="#appointment" class="btn-primary">Book Scan</a>
          <a href="#services" class="btn-outline">Explore Services</a>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="slide-bg" style="background:linear-gradient(135deg,#091520,#0d3560)">
        <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 70% 50%,rgba(255,122,0,.13),transparent 60%)"></div>
      </div>
      <div class="slide-content">
        <div class="slide-tag">Women's Health</div>
        <h1>3D/4D Fetal Scans &<br><span>Mammography</span></h1>
        <p>Advanced 3D/4D fetal scanning and breast mammography for early cancer detection. Specialized diagnostic care for women’s health.</p>
        <div class="hero-btns">
          <a href="#appointment" class="btn-primary">Book Appointment</a>
          <a href="#compliance" class="btn-outline">Read PCPNDT Notice</a>
        </div>
      </div>
    </div>

  </div>

  <div class="hero-dots">
    <button class="dot active" onclick="goSlide(0)" aria-label="Slide 1"></button>
    <button class="dot" onclick="goSlide(1)" aria-label="Slide 2"></button>
    <button class="dot" onclick="goSlide(2)" aria-label="Slide 3"></button>
    <button class="dot" onclick="goSlide(3)" aria-label="Slide 4"></button>
  </div>

  <div class="slide-arrows">
    <button class="arrow-btn" onclick="prevSlide()" aria-label="Previous slide">&#8592;</button>
    <button class="arrow-btn" onclick="nextSlide()" aria-label="Next slide">&#8594;</button>
  </div>
</section>

<section class="trust-strip" aria-label="Clinic highlights">
  <div class="trust-grid">
    <div class="trust-item reveal">
      <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
      <h3>24/7</h3><p>Emergency diagnostic support</p>
    </div>
    <div class="trust-item reveal">
      <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 12a8 8 0 0 1 8-8"/><path d="M4 12a8 8 0 0 0 8 8"/><path d="M14 7c2.2 1.1 3.5 2.8 3.5 5S16.2 15.9 14 17"/></svg></div>
      <h3>6+</h3><p>Diagnostic service categories</p>
    </div>
    <div class="trust-item reveal">
      <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></div>
      <h3>Digital</h3><p>WhatsApp and printed report support</p>
    </div>
    <div class="trust-item reveal">
      <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 12c2.8 0 5-2.2 5-5s-2.2-5-5-5-5 2.2-5 5 2.2 5 5 5Z"/><path d="M20 21a8 8 0 0 0-16 0"/></svg></div>
      <h3>Doctor-Led</h3><p>Reporting by consultant radiologist</p>
    </div>
  </div>
</section>

<section class="review-section alt" id="compliance">
  <div class="review-wrap">
    <div class="review-header reveal">
      <div class="section-tag">Patient Safety & Compliance</div>
      <h2>Responsible <span>Diagnostic Care</span></h2>
      <div class="divider"></div>
      <p>Clear patient communication, legal compliance, and ethical diagnostic care are part of our commitment.</p>
    </div>

    <div class="compliance-grid">
      <div class="notice-card critical reveal">
        <div class="notice-label">Mandatory Notice</div>
        <h3>PCPNDT Compliance Notice</h3>
        <p>Ambika Sonography follows ethical and legal standards for ultrasound and fetal imaging services.</p>
        <div class="notice-box">
          <strong>Sex determination is strictly prohibited.</strong>
          <span>Pre-natal sex determination, sex selection, or disclosure of fetal sex is illegal and punishable under the PCPNDT Act. Our clinic does not conduct or support sex determination in any form.</span>
        </div>
        <div class="pcpndt-number">
          <!--<div><strong>PCPNDT Registration No.:</strong> ADD_PCPNDT_REG_NO_HERE</div>-->
          <div><strong>Registered Centre:</strong> Ambika Sonography Diagnostic & Intervention Clinic</div>
          <div><strong>Address:</strong> Near CMO Office, Darripara, Ambikapur, Chhattisgarh</div>
        </div>
      </div>

      <div class="notice-card reveal">
        <div class="notice-label">Data Privacy</div>
        <h3>Your information is handled with care</h3>
        <p>Appointment forms may collect name, phone number, age, gender, service requirement, preferred date/time, and patient notes. This information is used only to respond to appointment requests and coordinate clinic communication.</p>
        <ul class="feature-list">
          <li>Appointment data is sent to clinic WhatsApp for follow-up.</li>
          <li>Patient details are not sold or used for unrelated marketing.</li>
          <li>Users can request correction or deletion of submitted details.</li>
          <li>Emergency cases should call the clinic directly.</li>
        </ul>
        <!--<div class="legal-note">Get this privacy policy reviewed by a qualified healthcare lawyer before final publication.</div>-->
      </div>
      
        <!--<div class="notice-card reveal">-->
        <!--  <div class="notice-label">Clinic Notice Board</div>-->
        <!--  <h3>PCPNDT Notice Display</h3>-->
        <!--  <p>-->
        <!--    Public notice displayed at the clinic stating that prenatal sex determination-->
        <!--    is not done and is punishable under law.-->
        <!--  </p>-->
        <!--  <div class="pcpndt-image-card">-->
        <!--    <img -->
        <!--      src="assets/images/certificates/pcpndt-notice-board.jpg"-->
        <!--      alt="PCPNDT Notice Board - Ambika Sonography"-->
        <!--      onclick="openCertificateModal('assets/images/certificates/pcpndt-notice-board.jpg','image','PCPNDT Notice Board')"-->
        <!--    >-->
        <!--    <button -->
        <!--      type="button"-->
        <!--      class="pcpndt-view-btn"-->
        <!--      onclick="openCertificateModal('assets/images/certificates/pcpndt-notice-board.jpg','image','PCPNDT Notice Board')"-->
        <!--    >-->
        <!--    </button>-->
        <!--  </div>-->
        <!--</div>-->
        
        
    </div>
  </div>
</section>

<section class="about-bg" id="about">
  <div class="about-grid">

    <div class="doctor-profile-wrap reveal">
      <div class="doctor-card">
        <div class="doctor-card-top">
          <img src="assets/6066731362934264131.jpg" alt="Dr. Tushar Anand - Consultant Radiologist" class="doctor-image"
            onerror="this.style.display='none';this.insertAdjacentHTML('afterend',`<div class='doctor-image-fallback'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.5'><path d='M12 12c2.761 0 5-2.239 5-5S14.761 2 12 2 7 4.239 7 7s2.239 5 5 5Z'/><path d='M20 21a8 8 0 0 0-16 0'/><path d='M16 19h4'/><path d='M18 17v4'/></svg></div>`);">
          <div class="doctor-overlay">
            <div class="doctor-label">Gold Medalist</div>
            <div class="doctor-name">Dr. Tushar Anand</div>
            <div class="doctor-title">Consultant Radiologist</div>
          </div>
        </div>

        <div class="doctor-info">
          <div class="doctor-creds">
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M5 6h14"/><path d="M5 18h14"/><path d="M7 6c0 4 2 6 5 6s5-2 5-6"/><path d="M7 18c0-4 2-6 5-6s5 2 5 6"/></svg></div>
              <div class="doctor-cred-text">MBBS — Darbhanga Medical College & Hospital, Bihar</div>
            </div>
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="3"/><path d="M8 8h8"/><path d="M8 12h8"/><path d="M8 16h5"/><path d="M16 16h.01"/></svg></div>
              <div class="doctor-cred-text">DMRD — Patna Medical College & Hospital, Bihar</div>
            </div>
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10 12 5 2 10l10 5 10-5Z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/><path d="M20 10v5"/></svg></div>
              <div class="doctor-cred-text">DNB Radio-Diagnosis — Sir Gangaram Hospital, New Delhi</div>
            </div>
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20 20 4"/><path d="M14 4h6v6"/><path d="M5 13l6 6"/><path d="M8 10l6 6"/><path d="M11 7l6 6"/></svg></div>
              <div class="doctor-cred-text">Observership in Interventional Radiology — Artemis Hospital, Gurgaon, Haryana</div>
            </div>
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/><path d="M10 9h4"/><path d="M12 7v4"/></svg></div>
              <div class="doctor-cred-text">Ex-Resident Doctor — Ram Manohar Lohia Hospital, New Delhi</div>
            </div>
            <div class="doctor-cred-item">
              <div class="doctor-cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21c4-2.4 7-6.1 7-10.2A6.8 6.8 0 0 0 12 4a6.8 6.8 0 0 0-7 6.8C5 14.9 8 18.6 12 21Z"/><path d="M9 12c.8-1.4 2-2 3-2s2.2.6 3 2"/><path d="M10 15h4"/><path d="M12 10v5"/></svg></div>
              <div class="doctor-cred-text">1 Year Fetal Imaging Masterclass by Mediflick under Dr. Pradeep Srinivasan</div>
            </div>
          </div>
        </div>
      </div>

      <div class="availability-card">
        <div class="availability-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <div><small>Available</small><strong>24 Hours · 7 Days a Week</strong></div>
      </div>
    </div>

    <div class="about-text reveal">
      <div class="section-tag">About Us</div>
      <h2>Ambika Sonography<br><span>Diagnostic & Intervention Clinic</span></h2>
      <p>Located near the CMO Office, Darripara, Ambikapur, Ambika Sonography is a premier diagnostic centre offering advanced imaging services with modern technology for accurate and timely diagnoses.</p>
      <p>Our clinic is led by Dr. Tushar Anand, a gold medalist radiologist trained at India’s finest institutions, committed to providing compassionate, high-quality diagnostic care to every patient.</p>
      <div class="about-highlight">
        <strong>Advanced diagnostic care with trusted medical expertise</strong>
        <span>From routine ultrasound to Doppler, CT scan, digital X-ray, fetal imaging, and interventional procedures, our focus is accurate reporting with patient-first care.</span>
      </div>
      <ul class="cred-list">
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>Advanced ultrasound and Doppler technology</li>
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>State-of-the-art CT scanner and digital X-ray</li>
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>Interventional radiology procedures</li>
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>3D/4D fetal scanning for expecting mothers</li>
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>24-hour emergency diagnostic services</li>
        <li><span class="cred-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4 4L19 6"/></svg></span>Highly experienced consultant radiologist</li>
      </ul>
      <div class="about-actions">
        <a href="#appointment" class="btn-primary">Book Appointment</a>
        <a href="tel:9288287771" class="btn-outline">9288287771</a>
      </div>
    </div>

  </div>
</section>

<section class="certificates-section" id="certificates">
  <div class="certificates-wrap">
    <div class="certificates-header reveal">
      <div class="section-tag">Certifications</div>
      <h2>Doctor’s <span>Certificates</span> & Achievements</h2>
      <div class="divider"></div>
      <p>Professional certifications, memberships, and academic achievements reflecting excellence in radiology, fetal imaging, and interventional radiology.</p>
    </div>

    <div class="certificates-grid">
      <div class="certificate-card reveal">
        <div class="certificate-media">
          <img src="assets/images/certificates/mediflick-fetal-medicine-master-course.jpg" alt="Mediflick Fetal Medicine Master Course Certificate" class="certificate-img">
          <div class="certificate-overlay"></div>
          <span class="certificate-badge">Master Course</span>
          <button type="button" class="certificate-eye" onclick="openCertificateModal('assets/images/certificates/mediflick-fetal-medicine-master-course.jpg','image','Mediflick Fetal Medicine Master Course')" aria-label="View Mediflick Certificate">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></svg>
          </button>
        </div>
        <div class="certificate-body">
          <h3>Fetal Medicine Master Course</h3>
          <p>Certificate of completion from Mediflick for Fetal Medicine Master Course, a structured Continuing Medical Education Programme completed in 2026.</p>
          <div class="certificate-actions">
            <button type="button" class="cert-btn cert-btn-primary" onclick="openCertificateModal('assets/images/certificates/mediflick-fetal-medicine-master-course.jpg','image','Mediflick Fetal Medicine Master Course')">View Certificate</button>
          </div>
        </div>
      </div>

      <!-- DNB Radio-Diagnosis Certificate -->
<div class="certificate-card reveal">
  <div class="certificate-media">
    <img
      src="assets/images/certificates/dnb-radio-diagnosis-certificate.jpg"
      alt="DNB Radio-Diagnosis Certificate - Dr. Tushar Anand"
      class="certificate-img"
    >

    <div class="certificate-overlay"></div>

    <span class="certificate-badge">DNB Certificate</span>

    <button
      type="button"
      class="certificate-eye"
      onclick="openCertificateModal('assets/images/certificates/dnb-radio-diagnosis-certificate.jpg','image','DNB Radio-Diagnosis Certificate')"
      aria-label="View DNB Certificate"
    >
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
        <circle cx="12" cy="12" r="3"/>
      </svg>
    </button>
  </div>

  <div class="certificate-body">
    <h3>DNB Radio-Diagnosis</h3>
    <p>
      Provisional certificate from the National Board of Examinations in Medical Sciences
      for DNB Radio-Diagnosis, awarded to Dr. Tushar Anand.
    </p>

    <div class="certificate-actions">
      <button
        type="button"
        class="cert-btn cert-btn-primary"
        onclick="openCertificateModal('assets/images/certificates/dnb-radio-diagnosis-certificate.jpg','image','DNB Radio-Diagnosis Certificate')"
      >
        View Certificate
      </button>
    </div>
  </div>
</div>

      <!--<div class="certificate-card reveal">-->
      <!--  <div class="certificate-media">-->
      <!--    <div class="certificate-pdf-preview">-->
      <!--      <div>-->
      <!--        <div class="certificate-pdf-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 12l2 2 4-5"/><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/><path d="M8 21l4-3 4 3"/></svg></div>-->
      <!--        <strong>SFM Membership PDF</strong>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="certificate-overlay"></div>-->
      <!--    <span class="certificate-badge">Fetal Medicine</span>-->
      <!--    <button type="button" class="certificate-eye" onclick="openCertificateModal('assets/images/certificates/sfm-certificate.pdf','pdf','Society of Fetal Medicine Membership')" aria-label="View SFM Certificate">-->
      <!--      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></svg>-->
      <!--    </button>-->
      <!--  </div>-->
      <!--  <div class="certificate-body">-->
      <!--    <h3>Society of Fetal Medicine</h3>-->
      <!--    <p>Certificate of Membership from the Society of Fetal Medicine, supporting expertise in fetal imaging and pregnancy scan care.</p>-->
      <!--    <div class="certificate-actions">-->
      <!--      <button type="button" class="cert-btn cert-btn-primary" onclick="openCertificateModal('assets/images/certificates/sfm-certificate.pdf','pdf','Society of Fetal Medicine Membership')">View PDF</button>-->
      <!--      <a href="assets/images/certificates/sfm-certificate.pdf" download class="cert-btn cert-btn-secondary">Download</a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>

  </div>
</section>

<section id="services" class="services-section">
  <div class="services-wrap">
    <div class="services-header reveal">
      <div class="section-tag">What We Offer</div>
      <h2>Our <span>Diagnostic</span> Services</h2>
      <div class="divider"></div>
      <p>Comprehensive diagnostic imaging services using advanced technology for accurate, timely, and patient-focused results.</p>
    </div>

    <div class="services-grid">
      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M4 12a8 8 0 0 1 8-8"/><path d="M4 12a8 8 0 0 0 8 8"/><path d="M8 12a4 4 0 0 1 4-4"/><path d="M8 12a4 4 0 0 0 4 4"/><path d="M13 6c3 1 5 3 5 6s-2 5-5 6"/><path d="M15 9c1.3.7 2 1.7 2 3s-.7 2.3-2 3"/></svg></div><div class="service-count">01</div></div>
          <h3 class="service-title">Ultrasound & Sonography</h3>
          <p class="service-desc">Advanced ultrasound imaging for whole body evaluation, pregnancy care, Doppler studies, and guided procedures.</p>
          <ul class="service-list"><li>Advanced whole body sonography</li><li>Colour Doppler study</li><li>3D/4D fetal scan</li><li>Elastography / Fibroscan</li><li>Biopsy / FNAC</li><li>Pigtail and PCN procedures</li><li>Non-vascular interventions</li></ul>
          <div class="service-footer"><span class="service-chip">Advanced Imaging</span><a href="#appointment" class="service-link" aria-label="Book ultrasound service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="4" y="3" width="16" height="18" rx="3"/><path d="M8 7h8"/><path d="M8 11h8"/><path d="M9 15h6"/><path d="M12 7v8"/></svg></div><div class="service-count">02</div></div>
          <h3 class="service-title">Digital X-Ray</h3>
          <p class="service-desc">High-quality digital radiography for routine imaging and contrast-based diagnostic studies.</p>
          <ul class="service-list"><li>Whole body digital X-ray</li><li>RGU — Retrograde Urethrogram</li><li>MCU — Micturating Cystourethrogram</li><li>IVP — Intravenous Pyelogram</li><li>HSG — Hysterosalpingography</li></ul>
          <div class="service-footer"><span class="service-chip">Digital Reports</span><a href="#appointment" class="service-link" aria-label="Book X-Ray service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><circle cx="12" cy="12" r="8"/><path d="M12 4v16"/><path d="M4 12h16"/><path d="M7 7c3 2 7 2 10 0"/><path d="M7 17c3-2 7-2 10 0"/></svg></div><div class="service-count">03</div></div>
          <h3 class="service-title">CT Scan</h3>
          <p class="service-desc">Detailed cross-sectional imaging for accurate evaluation of body structures, vessels, lungs, and guided procedures.</p>
          <ul class="service-list"><li>Whole body CT scan</li><li>Whole body CT angiography</li><li>CT-guided interventions</li><li>High-resolution HRCT</li><li>3D CT reconstruction</li></ul>
          <div class="service-footer"><span class="service-chip">3D Reconstruction</span><a href="#appointment" class="service-link" aria-label="Book CT service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M12 21s-7-4.4-7-10a7 7 0 0 1 14 0c0 5.6-7 10-7 10Z"/><path d="M9 11a3 3 0 0 1 6 0"/><path d="M8 15h8"/></svg></div><div class="service-count">04</div></div>
          <h3 class="service-title">Mammography</h3>
          <p class="service-desc">Dedicated breast imaging for screening, diagnostic evaluation, and early detection support.</p>
          <ul class="service-list"><li>Breast mammography for early cancer detection</li><li>Digital breast imaging</li><li>Screening mammography</li><li>Diagnostic mammography</li></ul>
          <div class="service-footer"><span class="service-chip">Breast Imaging</span><a href="#appointment" class="service-link" aria-label="Book mammography service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M12 21c4-2.4 7-6.1 7-10.2A6.8 6.8 0 0 0 12 4a6.8 6.8 0 0 0-7 6.8C5 14.9 8 18.6 12 21Z"/><path d="M9 12c.8-1.4 2-2 3-2s2.2.6 3 2"/><path d="M10 15h4"/><path d="M12 10v5"/></svg></div><div class="service-count">05</div></div>
          <h3 class="service-title">Fetal Imaging</h3>
          <p class="service-desc">Specialized pregnancy imaging for fetal growth, anomaly detection, baby portrait scans, and Doppler assessment.</p>
          <ul class="service-list"><li>NT scan — Nuchal Translucency</li><li>Anomaly scan</li><li>Growth scan</li><li>3D/4D baby portrait scans</li><li>Colour Doppler in pregnancy</li></ul>
          <div class="service-footer"><span class="service-chip">Pregnancy Care</span><a href="#appointment" class="service-link" aria-label="Book fetal imaging service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-inner">
          <div class="service-top"><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M4 20 20 4"/><path d="M14 4h6v6"/><path d="M5 13l6 6"/><path d="M8 10l6 6"/><path d="M11 7l6 6"/></svg></div><div class="service-count">06</div></div>
          <h3 class="service-title">Interventional Radiology</h3>
          <p class="service-desc">Minimally invasive image-guided procedures for precise diagnosis, drainage, and biopsy support.</p>
          <ul class="service-list"><li>Ultrasound-guided biopsy</li><li>FNAC procedures</li><li>Pigtail catheter drainage</li><li>PCN — Percutaneous Nephrostomy</li><li>CT-guided biopsy</li></ul>
          <div class="service-footer"><span class="service-chip">Image-Guided Care</span><a href="#appointment" class="service-link" aria-label="Book interventional radiology service"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="review-section" id="referring-doctors">
  <div class="review-wrap">
    <div class="review-header reveal">
      <div class="section-tag">For Referring Doctors</div>
      <h2>Fast Reports & <span>Digital Delivery</span></h2>
      <div class="divider"></div>
      <p>Dedicated support for physicians who refer patients for ultrasound, CT, X-ray, mammography, fetal imaging, and interventional procedures.</p>
    </div>

    <div class="feature-grid">
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <h3>Report Turnaround</h3>
        <p>Routine reports are prioritised for timely delivery. Emergency and urgent studies are handled with priority.</p>
        <ul class="feature-list"><li>Same-day report support for routine cases where possible</li><li>Priority reporting for emergency studies</li><li>Printed and digital report options</li></ul>
      </div>
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z"/></svg></div>
        <h3>Doctor Helpline</h3>
        <p>Referring doctors can connect directly with the clinic team for report status, urgent cases, and coordination.</p>
        <ul class="feature-list"><li>Phone: 9288287771 / 9288287772</li><li>WhatsApp report coordination</li><li>Case discussion support when required</li></ul>
      </div>
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></div>
        <h3>Digital Reports</h3>
        <p>Reports can be shared digitally to improve patient convenience and referring doctor workflow.</p>
        <ul class="feature-list"><li>WhatsApp report sharing support</li><li>Email report delivery on request</li><li>Printed report available at centre</li></ul>
      </div>
    </div>

    <div class="about-actions" style="justify-content:center;margin-top:34px">
      <a href="https://wa.me/919288287771?text=Hello%2C%20I%20am%20a%20referring%20doctor%20and%20need%20report%20coordination%20support." target="_blank" class="btn-primary">Contact Doctor Support</a>
      <a href="tel:9288287771" class="btn-outline">Call Helpline</a>
    </div>
  </div>
</section>

<section class="review-section alt" id="patient-info">
  <div class="review-wrap">
    <div class="review-header reveal">
      <div class="section-tag">Patient Information</div>
      <h2>Reports, Pricing & <span>Insurance</span></h2>
      <div class="divider"></div>
      <p>Helpful information for patients before visiting the clinic.</p>
    </div>

    <div class="feature-grid">
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M6 4h12"/>
  <path d="M6 8h12"/>
  <path d="M10 4c4.5 0 6.5 1.6 6.5 4.2S14.5 13 10 13H7"/>
  <path d="M7 13l8 7"/>
</svg></div>
        <h3>Pricing Information</h3>
        <p>Pricing may vary based on scan type, contrast use, emergency timing, and procedure complexity.</p>
        <ul class="feature-list"><li>Call for current scan pricing</li><li>Procedure pricing shared after clinical requirement review</li><li>Emergency service charges may vary</li></ul>
      </div>
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12l2 2 4-5"/><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg></div>
        <h3>Report Delivery</h3>
        <p>Reports are made available through convenient delivery options based on the service and case type.</p>
        <ul class="feature-list"><li>Printed reports from clinic desk</li><li>WhatsApp digital report support</li><li>Email report delivery on request</li></ul>
      </div>
      <div class="feature-card reveal">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="M9 12l2 2 4-5"/></svg></div>
        <h3>Insurance / Empanelment</h3>
        <p>Insurance, CGHS, Ayushman Bharat, ECHS, or other scheme support should be confirmed before visit.</p>
        <ul class="feature-list"><li>Call clinic to confirm current empanelment</li><li>Carry ID proof and referral documents</li><li>Bring previous reports if available</li></ul>
      </div>
    </div>
  </div>
</section>

<section class="video-bg" id="video">
  <div class="video-inner">
    <div class="review-header reveal">
      <div class="section-tag">See Us in Action</div>
      <h2 style="color:#fff">Our Facility & <span style="color:var(--orange)">Technology</span></h2>
      <div class="divider"></div>
      <p style="color:rgba(255,255,255,.68)">Get a glimpse of our diagnostic equipment and caring medical environment.</p>
    </div>

    <div class="video-tabs reveal">
      <button class="vtab active" onclick="setVTab(this,'clinic','Clinic Tour','Explore our diagnostic centre and patient-friendly environment.')">Clinic Tour</button>
      <button class="vtab" onclick="setVTab(this,'ultrasound','Ultrasound Suite','Advanced ultrasound and Doppler imaging facilities.')">Ultrasound Suite</button>
      <button class="vtab" onclick="setVTab(this,'ct','CT Scan Room','Whole body CT scan and CT-guided procedure setup.')">CT Scan Room</button>
      <button class="vtab" onclick="setVTab(this,'team','Our Team','Meet our experienced doctor and support team.')">Our Team</button>
    </div>

    <div class="video-player reveal" onclick="openVideoModal()">
      <div class="video-bg-icon" id="videoCardIcon"></div>
      <button class="play-btn" type="button" aria-label="Play video"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7L8 5Z"/></svg></button>
      <div class="video-title-on-card">
        <h3 id="videoCardTitle">Clinic Tour</h3>
        <p id="videoCardDesc">Explore our diagnostic centre and patient-friendly environment.</p>
      </div>
    </div>

    <p class="local-tagline reveal">Ambika Sonography | Near CMO Office, Darripara, Ambikapur</p>
  </div>
</section>

<section class="gallery-slider-section" id="gallery">
  <div class="gallery-wrap">
    <div class="gallery-header reveal">
      <div class="section-tag">Photo Gallery</div>
      <h2>Our <span>Facility</span> & Equipment</h2>
      <div class="divider"></div>
      <p>A look inside our modern diagnostic centre, equipped with advanced medical technology.</p>
    </div>

    <div class="gallery-filter reveal">
      <button class="gfilter active" type="button" onclick="filterGallery(this,'all')">All</button>
      <button class="gfilter" type="button" onclick="filterGallery(this,'equipment')">Equipment</button>
      <button class="gfilter" type="button" onclick="filterGallery(this,'facility')">Facility</button>
      <button class="gfilter" type="button" onclick="filterGallery(this,'team')">Team</button>
    </div>

    <div class="gallery-slider-box reveal">
      <div class="gallery-track" id="galleryTrack"></div>
      <div class="gallery-nav">
        <button class="gallery-arrow" type="button" onclick="slideGallery(-1)" aria-label="Previous gallery item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m15 18-6-6 6-6"/></svg></button>
        <button class="gallery-arrow" type="button" onclick="slideGallery(1)" aria-label="Next gallery item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m9 18 6-6-6-6"/></svg></button>
      </div>
    </div>
  </div>
</section>

<section class="review-section" id="reviews">
  <div class="review-wrap">
    <div class="review-header reveal">
      <div class="section-tag">Patient Trust</div>
      <h2>Reviews & <span>Testimonials</span></h2>
      <div class="divider"></div>
      <p>Add verified Google reviews or patient testimonials here to build trust.</p>
    </div>

    <div class="review-cards">

  <div class="patient-review reveal">
    <div class="stars">★★★★★</div>
    <p>
      Ambika Sonography me mera ultrasound scan hua. Staff ka behaviour bahut
      accha tha aur report bhi time par mil gaya. Overall experience very good.
    </p>
    <strong>Ramesh Kumar</strong>
  </div>

  <div class="patient-review reveal">
    <div class="stars">★★★★★</div>
    <p>
      Clinic clean aur well maintained hai. Dr. Tushar Anand ne scan ke baare
      me clearly guide kiya. Ambikapur me diagnostic service ke liye best option.
    </p>
    <strong>Priya Sharma</strong>
  </div>

  <div class="patient-review reveal">
    <div class="stars">★★★★★</div>
    <p>
      Pregnancy scan ke liye visit kiya tha. Doctor aur staff ne bahut
      comfortable feel karaya. Report clear thi aur service bhi fast thi.
    </p>
    <strong>Anjali Verma</strong>
  </div>

</div>

    <div class="about-actions" style="justify-content:center;margin-top:34px">
      <a href="https://www.google.com/search?q=Ambika+Sonography+Ambikapur+reviews" target="_blank" class="btn-primary">View Google Reviews</a>
    </div>
  </div>
</section>

<section class="review-section alt" id="faq">
  <div class="review-wrap">
    <div class="review-header reveal">
      <div class="section-tag">Patient FAQ</div>
      <h2>Before Your <span>Visit</span></h2>
      <div class="divider"></div>
      <p>Common questions about appointment, preparation, reports, and emergency access.</p>
    </div>

    <div class="faq-grid">
      <details class="faq-item reveal"><summary>Do I need an appointment?</summary><p>Appointments are recommended for planned scans. Walk-ins may be accepted depending on availability. Emergency diagnostic support is available 24 hours.</p></details>
      <details class="faq-item reveal"><summary>Do I need fasting before ultrasound?</summary><p>Some abdominal ultrasound scans may require fasting. Pregnancy scans, Doppler studies, CT scans, and procedures may have different preparation rules. Please call the clinic before your visit for exact instructions.</p></details>
      <details class="faq-item reveal"><summary>When will I receive my report?</summary><p>Report timing depends on scan type and case complexity. Routine reports are usually processed as early as possible, while emergency cases are prioritised.</p></details>
      <details class="faq-item reveal"><summary>Can reports be shared on WhatsApp?</summary><p>Yes, digital report sharing through WhatsApp may be available. Printed reports are also available from the clinic.</p></details>
      <details class="faq-item reveal"><summary>What should I bring?</summary><p>Carry your doctor’s prescription, previous reports, ID proof, insurance/scheme documents if applicable, and any relevant medical history.</p></details>
      <details class="faq-item reveal"><summary>Is fetal sex determination available?</summary><p>No. Sex determination or disclosure of fetal sex is strictly prohibited and is not performed at this clinic.</p></details>
    </div>
  </div>
</section>



<section id="appointment">
  <div class="review-header reveal">
    <div class="section-tag">Get Started</div>
    <h2>Book an <span>Appointment</span></h2>
    <div class="divider"></div>
    <p>Schedule your diagnostic scan or consultation. Your appointment request will be sent directly to WhatsApp.</p>
  </div>

  <div class="appt-grid">
    <div class="appt-info reveal">
      <h3>We're Here to Help</h3>
      <p>Reach out anytime. We provide 24-hour emergency diagnostic services. Walk-ins are also welcome at our Ambikapur clinic.</p>

      <div class="contact-items">
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72c.12.9.32 1.77.58 2.61a2 2 0 0 1-.45 2.11L9 10.58a16 16 0 0 0 4.42 4.42l1.14-1.13a2 2 0 0 1 2.11-.45c.84.26 1.71.46 2.61.58A2 2 0 0 1 22 16.92Z"/></svg></div>
          <div><h4>Phone Numbers</h4><p><a href="tel:9288287771">9288287771</a> / <a href="tel:9288287772">9288287772</a></p></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div><h4>Address</h4><p>Near CMO Office, Darripara, Ambikapur, Chhattisgarh</p></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
          <div><h4>Working Hours</h4><p>24 Hours, 7 Days a Week</p></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z"/></svg></div>
          <div><h4>WhatsApp</h4><p><a href="https://wa.me/919288287771" target="_blank">Chat on WhatsApp</a></p></div>
        </div>
      </div>
    </div>

    <div class="appt-form reveal">
      <h3>Book Your Appointment</h3>

      <form id="appointmentForm" onsubmit="submitForm(event)">
        <div class="form-row">
          <div class="form-group"><label for="fullName">Full Name *</label><input id="fullName" name="full_name" type="text" placeholder="Your full name" required></div>
          <div class="form-group"><label for="phone">Phone Number *</label><input id="phone" name="phone" type="tel" placeholder="Mobile number" required></div>
        </div>

        <div class="form-row">
          <div class="form-group"><label for="age">Age</label><input id="age" name="age" type="number" placeholder="Your age" min="0" max="120"></div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender"><option value="">Select gender</option><option>Male</option><option>Female</option><option>Other</option></select>
          </div>
        </div>

        <div class="form-group">
          <label for="service">Service Required *</label>
          <select id="service" name="service" required>
            <option value="">Select a service</option>
            <option>Ultrasound / Sonography</option>
            <option>Colour Doppler Study</option>
            <option>3D/4D Fetal Scan</option>
            <option>Elastography / Fibroscan</option>
            <option>Biopsy / FNAC</option>
            <option>PCN / Pigtail Procedure</option>
            <option>Digital X-Ray</option>
            <option>CT Scan</option>
            <option>CT Angiography</option>
            <option>Mammography</option>
            <option>Other</option>
          </select>
        </div>

        <div class="form-row">
          <div class="form-group"><label for="preferredDate">Preferred Date</label><input id="preferredDate" name="preferred_date" type="date"></div>
          <div class="form-group">
            <label for="preferredTime">Preferred Time</label>
            <select id="preferredTime" name="preferred_time">
              <option value="">Select time</option>
              <option>Morning — 8 AM to 12 PM</option>
              <option>Afternoon — 12 PM to 4 PM</option>
              <option>Evening — 4 PM to 8 PM</option>
              <option>Night — 8 PM to 12 AM</option>
              <option>Emergency — Any Time</option>
            </select>
          </div>
        </div>

        <div class="form-group"><label for="notes">Additional Notes</label><textarea id="notes" name="notes" placeholder="Symptoms, doctor's referral, or special instructions..."></textarea></div>

        <div class="form-consent">
          <input type="checkbox" id="dataConsent" required>
          <label for="dataConsent">
            I consent to Ambika Sonography collecting and using my submitted details for appointment coordination.
            I understand that my details may be sent to the clinic through WhatsApp for follow-up.
            I have read the <a href="privacy-policy">Privacy Policy</a>.
          </label>
        </div>

        <button type="submit" class="form-submit" id="formSubmitBtn">Confirm Appointment</button>
        <div class="success-msg" id="successMsg">Your appointment request is ready in WhatsApp. Please press send to confirm.</div>
      </form>
    </div>
  </div>
</section>

<section class="map-bg" id="contact">
  <div class="review-header reveal" style="margin-bottom:40px">
    <div class="section-tag">Find Us</div>
    <h2>Our <span>Location</span></h2>
    <div class="divider"></div>
  </div>

  <div class="map-inner reveal">
    <div class="map-sidebar">
      <h3>Ambika Sonography</h3>

      <div class="map-detail">
        <div class="map-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <div><h4>Address</h4><p>Near CMO Office, Darripara,<br>Ambikapur, Chhattisgarh</p></div>
      </div>

      <div class="map-detail">
        <div class="map-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72c.12.9.32 1.77.58 2.61a2 2 0 0 1-.45 2.11L9 10.58a16 16 0 0 0 4.42 4.42l1.14-1.13a2 2 0 0 1 2.11-.45c.84.26 1.71.46 2.61.58A2 2 0 0 1 22 16.92Z"/></svg></div>
        <div><h4>Phone</h4><a href="tel:9288287771">9288287771</a><br><a href="tel:9288287772">9288287772</a></div>
      </div>

      <div class="map-detail">
        <div class="map-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <div><h4>Hours</h4><p>24 Hours · 7 Days a Week</p></div>
      </div>

      <a href="https://share.google/S6emqXLx0T92AYrJG" target="_blank" class="btn-primary" style="display:flex;text-align:center;margin-top:24px">Open in Google Maps</a>
      <a href="https://wa.me/919288287771?text=Hello%2C%20I%20need%20directions%20to%20Ambika%20Sonography." target="_blank" class="btn-outline" style="display:flex;text-align:center;margin-top:10px;border-color:rgba(255,255,255,.3);color:#fff;background:transparent">WhatsApp for Directions</a>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.6236996419207!2d83.18973697437049!3d23.110867113029155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3989a387ad0a5d0d%3A0xa31e7e953f8d222f!2sAmbika%20Sonography%20Diagnostic%20Centre!5e0!3m2!1sen!2sin!4v1778762808872!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>




<?php
include 'footer.php';

?>
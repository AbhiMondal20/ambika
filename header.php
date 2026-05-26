<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ambika Sonography – Diagnostic & Intervention Clinic</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="icon" type="image/png" href="assets/favLogo.png">

<style>
:root{
  --navy:#0a1628;
  --navy-2:#061020;
  --blue:#0f4c8a;
  --sky:#1a8fe3;
  --orange:#ff7a00;
  --gold:#ff9f1c;
  --light:#fff7ed;
  --white:#ffffff;
  --text:#2d3748;
  --muted:#718096;
  --border:#ffd7b0;
  --green:#25d366;
}

*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:90px}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:#fff;overflow-x:hidden}
a{text-decoration:none}
button,input,select,textarea{font-family:'DM Sans',sans-serif}
img{max-width:100%;display:block}
section{padding:88px 24px}

.section-tag{
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:9px 14px;
  border-radius:999px;
  background:rgba(255,122,0,.10);
  color:var(--orange);
  font-size:12px;
  font-weight:900;
  letter-spacing:.10em;
  text-transform:uppercase;
  margin-bottom:12px;
}
.section-tag::before{
  content:"";
  width:8px;
  height:8px;
  border-radius:999px;
  background:var(--orange);
  box-shadow:0 0 0 5px rgba(255,122,0,.16);
}
.divider{
  width:82px;
  height:4px;
  background:linear-gradient(90deg,var(--blue),var(--orange));
  border-radius:999px;
  margin:16px auto 0;
}
.btn-primary,
.btn-outline{
  min-height:50px;
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  padding:0 22px;
  border-radius:999px;
  font-size:14px;
  font-weight:900;
  text-decoration:none;
  transition:.25s ease;
  cursor:pointer;
}
.btn-primary{
  border:0;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  box-shadow:0 16px 34px rgba(255,122,0,.25);
}
.btn-primary:hover{transform:translateY(-2px);box-shadow:0 22px 44px rgba(255,122,0,.36)}
.btn-outline{
  background:#fff;
  color:var(--navy);
  border:1px solid rgba(255,122,0,.20);
  box-shadow:0 12px 28px rgba(10,22,40,.05);
}
.btn-outline:hover{transform:translateY(-2px);border-color:var(--orange);color:var(--orange)}
.btn-primary svg,.btn-outline svg{width:17px;height:17px}

/* NAV */
#navbar{
  position:fixed;
  top:0;left:0;right:0;
  z-index:1000;
  background:rgba(255,255,255,.92);
  backdrop-filter:blur(16px);
  border-bottom:1px solid rgba(15,76,138,.10);
  transition:.25s ease;
}
#navbar.scrolled{
  background:rgba(255,255,255,.97);
  box-shadow:0 14px 40px rgba(10,22,40,.10);
}
.nav-inner{
  max-width:1320px;
  height:76px;
  margin:auto;
  padding:0 24px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:22px;
}
.logo-wrap{display:flex;align-items:center;gap:12px;flex-shrink:0}
.logo-wrap img{height:66px;width:auto;object-fit:contain}
.nav-links{display:flex;gap:5px;list-style:none;padding:7px;border-radius:999px;background:#fff7ed;border:1px solid rgba(255,122,0,.14)}
.nav-links a{
  min-height:38px;
  padding:0 12px;
  display:inline-flex;
  align-items:center;
  color:#334155;
  border-radius:999px;
  font-size:13px;
  font-weight:800;
  transition:.2s;
}
.nav-links a:hover,
.nav-links a.active{
  color:#fff;
  background:linear-gradient(135deg,var(--blue),var(--orange));
}
.nav-cta{
  min-height:44px;
  padding:0 17px;
  border-radius:999px;
  display:inline-flex;
  align-items:center;
  gap:8px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  font-size:13px;
  font-weight:900;
  box-shadow:0 14px 30px rgba(255,122,0,.22);
}
.hamburger{
  width:46px;height:46px;
  border:1px solid rgba(255,122,0,.18);
  border-radius:16px;
  background:#fff;
  display:none;
  flex-direction:column;
  gap:5px;
  align-items:center;
  justify-content:center;
  cursor:pointer;
}
.hamburger span{
  width:22px;height:2px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  border-radius:999px;
  transition:.25s;
}
.hamburger.active span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.hamburger.active span:nth-child(2){opacity:0}
.hamburger.active span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.mobile-menu{
  position:fixed;
  top:86px;
  left:16px;
  right:16px;
  z-index:999;
  display:none;
  padding:16px;
  border-radius:26px;
  background:rgba(255,255,255,.97);
  border:1px solid rgba(255,122,0,.16);
  box-shadow:0 28px 70px rgba(10,22,40,.18);
  backdrop-filter:blur(16px);
}
.mobile-menu.open{display:block;animation:menuIn .25s ease}
@keyframes menuIn{from{opacity:0;transform:translateY(-12px)}to{opacity:1;transform:none}}
.mobile-menu a{
  min-height:46px;
  padding:0 14px;
  border-radius:16px;
  display:flex;
  align-items:center;
  color:#334155;
  font-size:15px;
  font-weight:850;
}
.mobile-menu a:hover{background:#fff7ed;color:var(--orange)}
.mobile-menu .mob-cta{
  margin-top:10px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  justify-content:center;
}

/* HERO */
.hero{position:relative;height:100vh;min-height:650px;overflow:hidden;padding:0}
.slides-wrap{display:flex;height:100%;transition:transform .8s cubic-bezier(.77,0,.18,1)}
.slide{min-width:100%;height:100%;position:relative;display:flex;align-items:center}
.slide-bg{position:absolute;inset:0}
.slide-bg::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(120deg,rgba(10,22,40,.92) 36%,rgba(10,22,40,.35));
}
.slide-content{
  position:relative;
  z-index:2;
  max-width:1320px;
  margin:auto;
  padding:90px 24px 0;
  width:100%;
}
.slide-tag{
  display:inline-block;
  background:rgba(255,122,0,.14);
  border:1px solid var(--orange);
  color:var(--orange);
  padding:8px 16px;
  border-radius:999px;
  font-size:12px;
  font-weight:900;
  letter-spacing:2px;
  text-transform:uppercase;
  margin-bottom:20px;
}
.slide-content h1{
  font-size:clamp(2.2rem,5.5vw,4.5rem);
  color:#fff;
  line-height:1.05;
  margin-bottom:20px;
  max-width:850px;
  letter-spacing:-.04em;
  font-weight:900;
}
.slide-content h1 span{
  background:linear-gradient(90deg,var(--sky),var(--orange));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.slide-content p{color:rgba(255,255,255,.76);font-size:1.08rem;max-width:640px;line-height:1.75;margin-bottom:32px}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap}
.hero-btns .btn-outline{background:transparent;color:#fff;border-color:rgba(255,255,255,.34)}
.hero-btns .btn-outline:hover{color:var(--orange);border-color:var(--orange)}
.badge-24{
  position:absolute;
  top:105px;right:24px;
  background:linear-gradient(135deg,var(--orange),var(--gold));
  color:var(--navy);
  font-weight:900;
  font-size:12px;
  border-radius:50%;
  width:74px;height:74px;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  line-height:1.12;
  z-index:5;
  box-shadow:0 14px 40px rgba(255,122,0,.36);
}
.hero-dots{
  position:absolute;
  bottom:32px;left:50%;
  transform:translateX(-50%);
  display:flex;
  gap:10px;
  z-index:10;
}
.dot{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.35);cursor:pointer;transition:.3s;border:0}
.dot.active{background:var(--orange);width:28px;border-radius:999px}
.slide-arrows{position:absolute;bottom:28px;right:40px;display:flex;gap:10px;z-index:10}
.arrow-btn{
  width:42px;height:42px;
  background:rgba(255,255,255,.12);
  border:1px solid rgba(255,255,255,.2);
  border-radius:50%;
  cursor:pointer;
  color:#fff;
  font-size:18px;
  backdrop-filter:blur(8px);
}
.arrow-btn:hover{background:var(--orange);border-color:var(--orange)}

/* TRUST */
.trust-strip{padding:42px 20px;background:linear-gradient(135deg,var(--navy),var(--blue))}
.trust-grid{
  max-width:1180px;
  margin:0 auto;
  display:grid;
  grid-template-columns:repeat(4,minmax(0,1fr));
  gap:18px;
}
.trust-item{
  padding:24px;
  border-radius:24px;
  background:rgba(255,255,255,.08);
  border:1px solid rgba(255,255,255,.10);
  color:#fff;
  text-align:center;
  backdrop-filter:blur(14px);
}
.trust-icon{
  width:54px;height:54px;
  margin:0 auto 14px;
  border-radius:18px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#fff;
  background:linear-gradient(135deg,var(--blue),var(--orange));
}
.trust-icon svg{width:26px;height:26px}
.trust-item h3{font-size:26px;font-weight:900;color:var(--orange);margin-bottom:6px}
.trust-item p{font-size:13px;line-height:1.5;color:rgba(255,255,255,.72)}

/* REVIEW SECTIONS */
.review-section{
  position:relative;
  overflow:hidden;
  padding:90px 20px;
  background:
    radial-gradient(circle at top left,rgba(26,143,227,.10),transparent 32%),
    radial-gradient(circle at bottom right,rgba(255,122,0,.13),transparent 34%),
    linear-gradient(180deg,#fff 0%,#fff8f0 100%);
}
.review-section.alt{
  background:
    radial-gradient(circle at top right,rgba(255,122,0,.13),transparent 34%),
    linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
}
.review-wrap{max-width:1180px;margin:0 auto;position:relative;z-index:2}
.review-header{text-align:center;max-width:760px;margin:0 auto 42px}
.review-header h2{
  margin-top:18px;
  font-size:clamp(34px,4vw,56px);
  line-height:1.05;
  font-weight:900;
  letter-spacing:-.055em;
  color:var(--navy);
}
.review-header h2 span{color:var(--orange)}
.review-header p{margin:18px auto 0;max-width:640px;color:#64748b;font-size:16px;line-height:1.75}
.feature-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
.feature-card{
  position:relative;
  overflow:hidden;
  padding:26px;
  border-radius:28px;
  background:#fff;
  border:1px solid rgba(255,122,0,.14);
  box-shadow:0 22px 60px rgba(10,22,40,.07);
  transition:.28s ease;
}
.feature-card:hover{transform:translateY(-7px);box-shadow:0 34px 80px rgba(10,22,40,.12);border-color:rgba(255,122,0,.32)}
.feature-icon{
  width:58px;height:58px;
  border-radius:20px;
  display:flex;
  align-items:center;
  justify-content:center;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  box-shadow:0 14px 28px rgba(255,122,0,.22);
}
.feature-icon svg{width:28px;height:28px}
.feature-card h3{margin-top:20px;color:var(--navy);font-size:21px;line-height:1.25;font-weight:900;letter-spacing:-.025em}
.feature-card p{margin-top:10px;color:#64748b;font-size:14px;line-height:1.7}
.feature-list{margin-top:18px;list-style:none;display:grid;gap:10px;padding:0}
.feature-list li{position:relative;padding-left:28px;color:#334155;font-size:14px;line-height:1.5;font-weight:700}
.feature-list li::before{
  content:"";
  position:absolute;
  left:0;top:2px;
  width:18px;height:18px;
  border-radius:50%;
  background:rgba(255,122,0,.12);
  border:1px solid rgba(255,122,0,.25);
}
.feature-list li::after{
  content:"";
  position:absolute;
  left:6px;top:6px;
  width:5px;height:9px;
  border-right:2px solid var(--orange);
  border-bottom:2px solid var(--orange);
  transform:rotate(45deg);
}

/* COMPLIANCE */
.compliance-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:24px;align-items:stretch}
.notice-card{
  position:relative;
  overflow:hidden;
  border-radius:30px;
  padding:28px;
  background:#fff;
  border:1px solid rgba(255,122,0,.18);
  box-shadow:0 24px 70px rgba(10,22,40,.09);
}
.notice-card.critical{border-color:rgba(220,38,38,.24);background:linear-gradient(180deg,#fff 0%,#fff7f7 100%)}
.notice-label{
  display:inline-flex;
  align-items:center;
  gap:8px;
  padding:8px 12px;
  border-radius:999px;
  background:rgba(255,122,0,.10);
  color:var(--orange);
  font-size:11px;
  font-weight:900;
  letter-spacing:.08em;
  text-transform:uppercase;
}
.notice-card.critical .notice-label{background:rgba(220,38,38,.10);color:#dc2626}
.notice-card h3{margin-top:18px;color:var(--navy);font-size:26px;line-height:1.15;font-weight:900;letter-spacing:-.035em}
.notice-card p{margin-top:12px;color:#526173;font-size:15px;line-height:1.75}
.notice-box{margin-top:20px;padding:18px;border-radius:22px;background:#fff;border:1px dashed rgba(220,38,38,.35)}
.notice-box strong{display:block;color:#991b1b;font-size:15px;margin-bottom:8px}
.notice-box span{display:block;color:#475569;font-size:14px;line-height:1.7}
.pcpndt-number{margin-top:16px;display:grid;gap:8px;padding:16px;border-radius:18px;background:#fff3e6;color:#7c2d12;font-size:14px;line-height:1.6}
.legal-note{margin-top:18px;padding:16px;border-radius:18px;background:#f8fafc;color:#64748b;font-size:12px;line-height:1.6}

/* ABOUT */
.about-bg{
  position:relative;
  overflow:hidden;
  padding:90px 20px;
  background:
    radial-gradient(circle at top left,rgba(26,143,227,.12),transparent 34%),
    radial-gradient(circle at bottom right,rgba(255,122,0,.15),transparent 34%),
    linear-gradient(135deg,#f8fbff 0%,#ffffff 52%,#fff7ed 100%);
}
.about-grid{position:relative;z-index:2;max-width:1180px;margin:0 auto;display:grid;grid-template-columns:.92fr 1.08fr;gap:54px;align-items:center}
.doctor-profile-wrap{position:relative}
.doctor-card{
  position:relative;
  overflow:hidden;
  border-radius:34px;
  background:linear-gradient(180deg,#ffffff 0%,#fffaf4 100%);
  border:1px solid rgba(255,122,0,.16);
  box-shadow:0 30px 80px rgba(10,22,40,.12);
}
.doctor-card-top{position:relative;min-height:420px;background:linear-gradient(135deg,var(--navy),#0d2d5e)}
.doctor-image{width:100%;height:420px;object-fit:cover;object-position:top center;display:block}
.doctor-image-fallback{min-height:420px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#fff0dc,#ffffff)}
.doctor-image-fallback svg{width:140px;height:140px;color:var(--blue)}
.doctor-overlay{
  position:absolute;
  left:0;right:0;bottom:0;
  padding:28px;
  color:#fff;
  background:linear-gradient(180deg,transparent,rgba(10,22,40,.86));
}
.doctor-label{
  display:inline-flex;
  padding:8px 12px;
  border-radius:999px;
  background:linear-gradient(135deg,var(--orange),var(--gold));
  color:#111827;
  font-size:12px;
  font-weight:900;
  letter-spacing:.08em;
  text-transform:uppercase;
}
.doctor-name{margin-top:14px;font-size:30px;line-height:1.1;font-weight:900;letter-spacing:-.04em}
.doctor-title{margin-top:8px;font-size:15px;color:rgba(255,255,255,.86);font-weight:700}
.doctor-info{padding:26px 28px 28px}
.doctor-creds{display:grid;gap:13px}
.doctor-cred-item{
  display:flex;
  gap:12px;
  align-items:flex-start;
  padding:13px 14px;
  border-radius:18px;
  background:#fff;
  border:1px solid rgba(255,122,0,.14);
}
.doctor-cred-icon{
  width:28px;height:28px;
  flex:0 0 28px;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:10px;
  background:rgba(255,122,0,.10);
  color:var(--orange);
}
.doctor-cred-icon svg{width:15px;height:15px}
.doctor-cred-text{font-size:14px;line-height:1.55;color:#334155;font-weight:700}
.availability-card{
  position:absolute;
  right:-22px;bottom:34px;
  width:245px;
  padding:18px;
  border-radius:24px;
  background:rgba(255,255,255,.94);
  border:1px solid rgba(255,122,0,.16);
  box-shadow:0 24px 60px rgba(10,22,40,.16);
  backdrop-filter:blur(16px);
  display:flex;
  gap:14px;
  align-items:center;
}
.availability-icon{
  width:46px;height:46px;
  border-radius:16px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  display:flex;
  align-items:center;
  justify-content:center;
  color:#fff;
  flex:0 0 46px;
}
.availability-icon svg{width:22px;height:22px}
.availability-card small{display:block;font-size:11px;color:var(--muted);font-weight:900;letter-spacing:.08em;text-transform:uppercase}
.availability-card strong{display:block;margin-top:3px;font-size:14px;line-height:1.35;color:var(--navy);font-weight:900}
.about-text h2{
  margin-top:20px;
  font-size:clamp(34px,4vw,58px);
  line-height:1.02;
  color:var(--navy);
  font-weight:900;
  letter-spacing:-.055em;
}
.about-text h2 span{display:inline-block;color:var(--orange)}
.about-text p{margin-top:20px;color:#526173;font-size:16px;line-height:1.85}
.about-highlight{margin-top:26px;padding:20px;border-radius:24px;background:linear-gradient(135deg,rgba(15,76,138,.08),rgba(255,122,0,.09));border:1px solid rgba(255,122,0,.14)}
.about-highlight strong{display:block;color:var(--navy);font-size:18px;margin-bottom:6px}
.about-highlight span{color:#526173;font-size:14px;line-height:1.7}
.cred-list{margin-top:28px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px;list-style:none;padding:0}
.cred-list li{
  display:flex;
  align-items:flex-start;
  gap:11px;
  padding:15px;
  border-radius:18px;
  background:#fff;
  border:1px solid rgba(255,122,0,.12);
  box-shadow:0 10px 26px rgba(10,22,40,.04);
  color:#334155;
  font-size:14px;
  line-height:1.45;
  font-weight:700;
}
.cred-icon{
  width:23px;height:23px;
  flex:0 0 23px;
  border-radius:999px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
}
.cred-icon svg{width:13px;height:13px}
.about-actions{margin-top:32px;display:flex;gap:14px;flex-wrap:wrap}

/* CERTIFICATES */
.certificates-section{
  position:relative;
  overflow:hidden;
  padding:90px 20px;
  background:
    radial-gradient(circle at top left,rgba(26,143,227,.12),transparent 32%),
    radial-gradient(circle at bottom right,rgba(255,122,0,.14),transparent 34%),
    linear-gradient(180deg,#ffffff 0%,#fff8f0 100%);
}
.certificates-wrap{max-width:1180px;margin:0 auto;position:relative;z-index:2}
.certificates-header{max-width:760px;margin:0 auto 42px;text-align:center}
.certificates-header h2{margin-top:18px;font-size:clamp(34px,4vw,56px);line-height:1.05;font-weight:900;letter-spacing:-.055em;color:var(--navy)}
.certificates-header h2 span{color:var(--orange)}
.certificates-header p{margin:18px auto 0;max-width:640px;color:#64748b;font-size:16px;line-height:1.75}
.certificates-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px}
.certificate-card{
  position:relative;
  overflow:hidden;
  border-radius:30px;
  background:#fff;
  border:1px solid rgba(255,122,0,.14);
  box-shadow:0 22px 60px rgba(10,22,40,.08);
  transition:.28s ease;
}
.certificate-card:hover{transform:translateY(-8px);box-shadow:0 34px 80px rgba(10,22,40,.14);border-color:rgba(255,122,0,.34)}
.certificate-media{
  position:relative;
  height:250px;
  overflow:hidden;
  background:radial-gradient(circle at 20% 20%,rgba(255,122,0,.18),transparent 34%),linear-gradient(135deg,#0f4c8a,#0a1628);
}
.certificate-img{width:100%;height:100%;object-fit:cover;display:block;transition:.55s ease}
.certificate-card:hover .certificate-img{transform:scale(1.06)}
.certificate-pdf-preview{height:100%;display:flex;align-items:center;justify-content:center;text-align:center;color:#fff;padding:26px}
.certificate-pdf-icon{
  width:86px;height:86px;
  margin:0 auto 16px;
  border-radius:26px;
  display:flex;
  align-items:center;
  justify-content:center;
  background:rgba(255,255,255,.12);
  border:1px solid rgba(255,255,255,.18);
}
.certificate-pdf-icon svg{width:46px;height:46px}
.certificate-pdf-preview strong{display:block;font-size:15px;font-weight:900}
.certificate-overlay{position:absolute;inset:0;background:linear-gradient(180deg,rgba(10,22,40,.02) 25%,rgba(10,22,40,.78) 100%);pointer-events:none}
.certificate-badge{
  position:absolute;
  top:18px;left:18px;
  z-index:2;
  padding:7px 12px;
  border-radius:999px;
  background:rgba(255,255,255,.92);
  color:var(--orange);
  font-size:11px;
  font-weight:900;
  text-transform:uppercase;
  letter-spacing:.08em;
}
.certificate-eye{
  position:absolute;
  top:18px;right:18px;
  z-index:2;
  width:44px;height:44px;
  border:0;
  border-radius:999px;
  background:#fff;
  color:var(--navy);
  cursor:pointer;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:.25s ease;
}
.certificate-eye:hover{background:var(--orange);color:#fff}
.certificate-eye svg{width:19px;height:19px}
.certificate-body{padding:24px}
.certificate-body h3{color:var(--navy);font-size:20px;line-height:1.2;font-weight:900;letter-spacing:-.025em}
.certificate-body p{margin-top:10px;color:#64748b;font-size:14px;line-height:1.65}
.certificate-actions{margin-top:20px;display:flex;flex-wrap:wrap;gap:10px}
.cert-btn{
  min-height:42px;
  padding:0 16px;
  border:0;
  border-radius:999px;
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:8px;
  cursor:pointer;
  text-decoration:none;
  font-size:12px;
  font-weight:900;
  transition:.25s ease;
}
.cert-btn svg{width:16px;height:16px}
.cert-btn-primary{background:linear-gradient(135deg,var(--blue),var(--orange));color:#fff;box-shadow:0 14px 28px rgba(255,122,0,.20)}
.cert-btn-primary:hover{transform:translateY(-2px);box-shadow:0 18px 34px rgba(255,122,0,.28)}
.cert-btn-secondary{background:#fff3e6;color:var(--orange)}
.cert-btn-secondary:hover{background:var(--navy);color:#fff}

/* SERVICES */
.services-section{
  position:relative;
  overflow:hidden;
  padding:90px 20px;
  background:
    radial-gradient(circle at top right,rgba(26,143,227,.13),transparent 32%),
    radial-gradient(circle at bottom left,rgba(255,122,0,.14),transparent 34%),
    linear-gradient(180deg,#ffffff 0%,#fff8f0 100%);
}
.services-wrap{position:relative;z-index:2;max-width:1180px;margin:0 auto}
.services-header{max-width:760px;margin:0 auto 48px;text-align:center}
.services-header h2{margin-top:18px;font-size:clamp(34px,4vw,56px);line-height:1.05;font-weight:900;letter-spacing:-.055em;color:var(--navy)}
.services-header h2 span{color:var(--orange)}
.services-header p{margin:18px auto 0;max-width:620px;color:#64748b;font-size:16px;line-height:1.75}
.services-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
.service-card{
  position:relative;
  overflow:hidden;
  border-radius:30px;
  padding:26px;
  background:rgba(255,255,255,.90);
  border:1px solid rgba(255,122,0,.14);
  box-shadow:0 20px 50px rgba(10,22,40,.07);
  transition:.28s ease;
}
.service-card:hover{transform:translateY(-8px);border-color:rgba(255,122,0,.32);box-shadow:0 30px 70px rgba(10,22,40,.12)}
.service-inner{position:relative;z-index:2}
.service-top{display:flex;align-items:flex-start;justify-content:space-between;gap:16px}
.service-icon{
  width:62px;height:62px;
  border-radius:22px;
  display:flex;
  align-items:center;
  justify-content:center;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  box-shadow:0 16px 30px rgba(255,122,0,.24);
}
.service-icon svg{width:30px;height:30px}
.service-count{font-size:38px;line-height:1;font-weight:900;color:rgba(255,122,0,.15);letter-spacing:-.06em}
.service-title{margin-top:22px;color:var(--navy);font-size:21px;line-height:1.25;font-weight:900;letter-spacing:-.025em}
.service-desc{margin-top:10px;color:#64748b;font-size:14px;line-height:1.65}
.service-list{margin:20px 0 0;padding:0;list-style:none;display:grid;gap:11px}
.service-list li{position:relative;padding-left:30px;color:#334155;font-size:14px;line-height:1.45;font-weight:700}
.service-list li::before{content:"";position:absolute;left:0;top:1px;width:20px;height:20px;border-radius:999px;background:rgba(255,122,0,.13);border:1px solid rgba(255,122,0,.25)}
.service-list li::after{content:"";position:absolute;left:7px;top:6px;width:6px;height:10px;border-right:2px solid var(--orange);border-bottom:2px solid var(--orange);transform:rotate(45deg)}
.service-footer{margin-top:24px;padding-top:18px;border-top:1px solid rgba(255,122,0,.12);display:flex;align-items:center;justify-content:space-between;gap:12px}
.service-chip{display:inline-flex;align-items:center;padding:8px 12px;border-radius:999px;background:#fff3e6;color:var(--orange);font-size:12px;font-weight:900}
.service-link{width:38px;height:38px;border-radius:999px;display:flex;align-items:center;justify-content:center;background:var(--navy);color:#fff;text-decoration:none;transition:.25s ease}
.service-link svg{width:17px;height:17px}
.service-link:hover{background:var(--orange);transform:translateX(3px)}

/* VIDEO */
.video-bg{
  background:
    radial-gradient(circle at 20% 50%,rgba(255,122,0,.13),transparent 48%),
    radial-gradient(circle at 80% 20%,rgba(26,143,227,.14),transparent 40%),
    linear-gradient(135deg,var(--navy),#0d2d5e);
  position:relative;
  overflow:hidden;
}
.video-inner{max-width:1100px;margin:auto;text-align:center;position:relative;z-index:1}
.video-tabs{display:flex;gap:12px;justify-content:center;margin-bottom:32px;flex-wrap:wrap}
.vtab{
  padding:10px 22px;
  border-radius:999px;
  background:rgba(255,255,255,.07);
  border:1px solid rgba(255,255,255,.15);
  color:rgba(255,255,255,.76);
  font-size:13px;
  font-weight:900;
  cursor:pointer;
  transition:.2s;
}
.vtab.active,.vtab:hover{background:linear-gradient(135deg,var(--blue),var(--orange));border-color:transparent;color:#fff}
.video-player{
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.12);
  border-radius:28px;
  overflow:hidden;
  max-width:900px;
  margin:0 auto;
  aspect-ratio:16/9;
  display:flex;
  align-items:center;
  justify-content:center;
  position:relative;
  cursor:pointer;
}
.video-bg-icon{
  position:absolute;
  inset:0;
  background:linear-gradient(135deg,rgba(15,76,138,.55),rgba(255,122,0,.22));
  display:flex;
  align-items:center;
  justify-content:center;
  color:rgba(255,255,255,.14);
}
.video-bg-icon svg{width:130px;height:130px}
.video-title-on-card{position:absolute;left:28px;bottom:26px;text-align:left;z-index:2}
.video-title-on-card h3{color:#fff;font-size:1.3rem;margin-bottom:5px}
.video-title-on-card p{color:rgba(255,255,255,.65);font-size:14px}
.play-btn{
  width:82px;height:82px;
  background:linear-gradient(135deg,var(--blue),var(--orange));
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#fff;
  position:relative;
  z-index:3;
  transition:.3s;
  box-shadow:0 0 40px rgba(255,122,0,.42);
  border:none;
}
.play-btn svg{width:32px;height:32px;margin-left:4px}
.video-player:hover .play-btn{transform:scale(1.1)}
.local-tagline{margin-top:20px;color:rgba(255,255,255,.72);font-size:15px;font-weight:800;letter-spacing:.02em}

/* GALLERY */
.gallery-slider-section{
  position:relative;
  overflow:hidden;
  padding:90px 20px;
  background:
    radial-gradient(circle at top left,rgba(26,143,227,.12),transparent 32%),
    radial-gradient(circle at bottom right,rgba(255,122,0,.14),transparent 34%),
    linear-gradient(180deg,#ffffff 0%,#fff8f0 100%);
}
.gallery-wrap{max-width:1180px;margin:0 auto;position:relative;z-index:2}
.gallery-header{max-width:760px;margin:0 auto 36px;text-align:center}
.gallery-header h2{margin-top:18px;font-size:clamp(34px,4vw,56px);line-height:1.05;font-weight:900;letter-spacing:-.055em;color:var(--navy)}
.gallery-header h2 span{color:var(--orange)}
.gallery-header p{margin:18px auto 0;max-width:620px;color:#64748b;font-size:16px;line-height:1.75}
.gallery-filter{display:flex;justify-content:center;flex-wrap:wrap;gap:10px;margin-bottom:28px}
.gfilter{
  border:1px solid rgba(255,122,0,.14);
  background:#fff;
  color:#475569;
  padding:11px 18px;
  border-radius:999px;
  font-size:13px;
  font-weight:900;
  cursor:pointer;
  transition:.25s ease;
}
.gfilter:hover{transform:translateY(-2px);border-color:rgba(255,122,0,.32);color:var(--orange)}
.gfilter.active{background:linear-gradient(135deg,var(--blue),var(--orange));color:#fff;border-color:transparent}
.gallery-track{display:flex;gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;scroll-behavior:smooth;padding:8px 4px 28px;scrollbar-width:none}
.gallery-track::-webkit-scrollbar{display:none}
.gallery-slide{flex:0 0 calc(33.333% - 15px);min-width:310px;scroll-snap-align:start}
.gallery-card{
  position:relative;
  overflow:hidden;
  height:390px;
  border-radius:32px;
  background:#dbeafe;
  border:1px solid rgba(255,122,0,.14);
  cursor:pointer;
  box-shadow:0 22px 60px rgba(10,22,40,.10);
  transition:.3s ease;
}
.gallery-card:hover{transform:translateY(-8px);box-shadow:0 34px 80px rgba(10,22,40,.16)}
.gallery-img{width:100%;height:100%;object-fit:cover;display:block;transition:.55s ease}
.gallery-card:hover .gallery-img{transform:scale(1.08)}
.gallery-fallback{width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:radial-gradient(circle at 20% 20%,rgba(255,122,0,.28),transparent 34%),linear-gradient(135deg,#0f4c8a,#0a1628)}
.gallery-fallback svg{width:74px;height:74px;color:rgba(255,255,255,.82)}
.gallery-overlay{position:absolute;inset:0;background:linear-gradient(180deg,rgba(10,22,40,.04) 20%,rgba(10,22,40,.92) 100%)}
.gallery-content{position:absolute;left:24px;right:24px;bottom:24px;color:#fff;z-index:3}
.gallery-cat{display:inline-flex;align-items:center;padding:7px 11px;border-radius:999px;background:rgba(255,255,255,.16);border:1px solid rgba(255,255,255,.18);font-size:11px;font-weight:900;text-transform:uppercase;letter-spacing:.08em}
.gallery-title{margin-top:13px;font-size:23px;line-height:1.15;font-weight:900;letter-spacing:-.035em}
.gallery-sub{margin-top:8px;font-size:14px;line-height:1.5;color:rgba(255,255,255,.72);font-weight:600}
.gallery-view{position:absolute;top:20px;right:20px;width:48px;height:48px;border-radius:999px;background:rgba(255,255,255,.92);color:var(--navy);display:flex;align-items:center;justify-content:center;z-index:4;transform:scale(.86);opacity:0;transition:.25s ease}
.gallery-card:hover .gallery-view{transform:scale(1);opacity:1}
.gallery-view svg{width:20px;height:20px}
.gallery-nav{margin-top:8px;display:flex;justify-content:center;gap:12px}
.gallery-arrow{width:48px;height:48px;border:0;border-radius:999px;background:#fff;color:var(--navy);box-shadow:0 14px 34px rgba(10,22,40,.10);cursor:pointer;display:flex;align-items:center;justify-content:center;transition:.25s ease}
.gallery-arrow:hover{background:var(--orange);color:#fff;transform:translateY(-2px)}
.gallery-arrow svg{width:20px;height:20px}

/* FAQ / REVIEWS */
.faq-grid{max-width:900px;margin:0 auto;display:grid;gap:14px}
.faq-item{border-radius:22px;background:#fff;border:1px solid rgba(255,122,0,.14);box-shadow:0 14px 36px rgba(10,22,40,.05);overflow:hidden}
.faq-item summary{padding:20px 22px;cursor:pointer;color:var(--navy);font-weight:900;list-style:none;display:flex;justify-content:space-between;gap:18px}
.faq-item summary::-webkit-details-marker{display:none}
.faq-item summary::after{content:"+";width:28px;height:28px;flex:0 0 28px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:#fff3e6;color:var(--orange);font-size:20px;line-height:1}
.faq-item[open] summary::after{content:"−"}
.faq-item p{padding:0 22px 20px;color:#64748b;font-size:14px;line-height:1.75}
.review-cards{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
.patient-review{padding:24px;border-radius:26px;background:#fff;border:1px solid rgba(255,122,0,.14);box-shadow:0 20px 50px rgba(10,22,40,.07)}
.stars{color:var(--orange);letter-spacing:3px;font-size:15px;margin-bottom:14px}
.patient-review p{color:#475569;font-size:14px;line-height:1.7}
.patient-review strong{display:block;margin-top:16px;color:var(--navy);font-size:14px}

/* APPOINTMENT */
.appt-grid{max-width:1100px;margin:auto;display:grid;grid-template-columns:1fr 1.2fr;gap:64px;align-items:start}
.appt-info h3{font-size:1.65rem;color:var(--navy);margin-bottom:16px}
.appt-info p{color:var(--muted);line-height:1.8;margin-bottom:28px}
.contact-items{display:flex;flex-direction:column;gap:18px}
.contact-item{display:flex;gap:14px;align-items:flex-start}
.contact-icon{width:46px;height:46px;background:linear-gradient(135deg,#fff3e6,#ffd7b0);color:var(--orange);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.contact-icon svg{width:22px;height:22px}
.contact-item h4{font-size:14px;font-weight:800;color:var(--navy);margin-bottom:3px}
.contact-item p{font-size:13.5px;color:var(--muted);margin:0}
.contact-item a{color:var(--orange)}
.appt-form{background:#fff7ed;border-radius:20px;padding:36px;border:1.5px solid #ffd7b0;box-shadow:0 12px 44px rgba(255,122,0,.10)}
.appt-form h3{font-size:1.35rem;color:var(--navy);margin-bottom:24px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.form-group{display:flex;flex-direction:column;gap:7px;margin-bottom:16px}
.form-group label{font-size:13px;font-weight:800;color:var(--navy)}
.form-group input,.form-group select,.form-group textarea{padding:12px 16px;border:1.5px solid #ffd7b0;border-radius:10px;font-size:14px;color:var(--text);background:#fff;transition:.2s;outline:none}
.form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:var(--orange);box-shadow:0 0 0 3px rgba(255,122,0,.13)}
.form-group textarea{resize:vertical;min-height:92px}
.form-consent{margin:18px 0;display:flex;align-items:flex-start;gap:10px;padding:14px;border-radius:16px;background:#fff;border:1px solid rgba(255,122,0,.18)}
.form-consent input{margin-top:4px;width:18px;height:18px;accent-color:var(--orange);flex:0 0 18px}
.form-consent label{color:#475569;font-size:13px;line-height:1.6;font-weight:600}
.form-consent a{color:var(--orange);font-weight:900}
.form-submit{width:100%;padding:15px;background:linear-gradient(135deg,var(--blue),var(--orange));color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:900;cursor:pointer;transition:.25s;box-shadow:0 12px 30px rgba(255,122,0,.20)}
.form-submit:hover{transform:translateY(-2px);box-shadow:0 8px 28px rgba(255,122,0,.40)}
.success-msg{display:none;background:#e8fff4;border:1.5px solid #48bb78;border-radius:10px;padding:16px;text-align:center;color:#2d7d55;font-weight:600;margin-top:12px;font-size:14px}

/* MAP / FOOTER */
.map-bg{background:#fff7ed}
.map-inner{max-width:1200px;margin:auto;display:grid;grid-template-columns:1fr 2fr;border-radius:20px;overflow:hidden;box-shadow:0 12px 48px rgba(10,22,40,.12)}
.map-sidebar{background:linear-gradient(160deg,var(--navy),var(--blue),#b45309);padding:40px 32px;color:#fff}
.map-sidebar h3{font-size:1.45rem;margin-bottom:24px}
.map-detail{display:flex;gap:14px;margin-bottom:22px}
.map-detail-icon{width:40px;height:40px;background:rgba(255,255,255,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.map-detail-icon svg{width:20px;height:20px}
.map-detail h4{font-size:12px;color:rgba(255,255,255,.58);margin-bottom:3px;text-transform:uppercase;letter-spacing:.8px}
.map-detail p,.map-detail a{font-size:14px;color:#fff;line-height:1.55}
.map-iframe{width:100%;height:450px;border:0;display:block}
footer{background:linear-gradient(135deg,var(--navy),#071322);padding:64px 24px 24px}
.footer-grid{max-width:1200px;margin:auto;display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:40px;margin-bottom:48px}
.footer-brand p{color:rgba(255,255,255,.52);font-size:13.5px;line-height:1.8;max-width:300px;margin-top:14px}
.footer-social{display:flex;gap:10px;margin-top:20px}
.soc-btn{width:38px;height:38px;background:rgba(255,255,255,.08);border-radius:8px;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.65);transition:.2s}
.soc-btn svg{width:19px;height:19px}
.soc-btn:hover{background:var(--orange);color:#fff}
.footer-col h4{color:#fff;font-size:14px;font-weight:800;letter-spacing:.5px;margin-bottom:16px;padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,.08)}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:10px}
.footer-col ul li a{color:rgba(255,255,255,.52);font-size:13.5px;transition:.2s}
.footer-col ul li a:hover{color:var(--orange)}
.footer-bottom{max-width:1200px;margin:auto;border-top:1px solid rgba(255,255,255,.08);padding-top:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:14px}
.footer-bottom p{color:rgba(255,255,255,.38);font-size:13px}
.developer-credit{display:flex;align-items:center;gap:10px}
.developer-credit img{height:42px;width:auto}

/* FLOAT / MODALS */
.wa-btn{position:fixed;bottom:90px;right:28px;z-index:1000;width:58px;height:58px;background:var(--green);border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 24px rgba(37,211,102,.45);cursor:pointer;transition:.3s}
.wa-btn:hover{transform:scale(1.1)}
.wa-btn svg{width:28px;height:28px;fill:#fff;position:relative;z-index:2}
.wa-pulse{position:absolute;inset:0;border-radius:50%;background:var(--green);animation:pulse 2s infinite}
@keyframes pulse{0%{transform:scale(1);opacity:.7}100%{transform:scale(1.6);opacity:0}}

.gallery-modal,.certificate-modal,.video-modal{
  position:fixed;
  inset:0;
  z-index:99999;
  background:rgba(3,10,20,.88);
  backdrop-filter:blur(16px);
  display:none;
  padding:18px;
}
.gallery-modal.show,.certificate-modal.show,.video-modal.open{display:block}
.gallery-modal-shell,.certificate-modal-shell{
  height:100%;
  max-width:1280px;
  margin:0 auto;
  display:grid;
  grid-template-rows:auto 1fr auto;
  gap:14px;
}
.certificate-modal-shell{grid-template-rows:auto 1fr;border-radius:28px;overflow:hidden;background:#fff;gap:0}
.gallery-modal-top,.certificate-modal-top{
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:15px;
  color:#fff;
}
.certificate-modal-top{color:var(--navy);padding:16px 20px;border-bottom:1px solid rgba(15,76,138,.10);background:#fff}
.gallery-modal-title h3,.certificate-modal-title h3{font-size:20px;font-weight:900;margin:0}
.gallery-modal-title p,.certificate-modal-title p{margin:4px 0 0;color:rgba(255,255,255,.58);font-size:13px}
.certificate-modal-title p{color:#64748b}
.gallery-modal-actions{display:flex;gap:10px;align-items:center}
.gm-btn,.certificate-close{
  width:42px;height:42px;
  border:1px solid rgba(255,255,255,.14);
  border-radius:999px;
  background:rgba(255,255,255,.10);
  color:#fff;
  cursor:pointer;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:.25s ease;
}
.certificate-close{background:#fff3e6;color:var(--orange);border:0}
.gm-btn:hover,.certificate-close:hover{background:#fff;color:var(--navy)}
.certificate-close:hover{background:var(--orange);color:#fff}
.gm-btn svg,.certificate-close svg{width:19px;height:19px}
.gallery-modal-viewer,.certificate-preview-area{
  position:relative;
  overflow:hidden;
  border-radius:30px;
  background:rgba(255,255,255,.08);
  border:1px solid rgba(255,255,255,.12);
  display:flex;
  align-items:center;
  justify-content:center;
}
.certificate-preview-area{border-radius:0;border:0;background:#f8fafc}
.certificate-preview-area iframe{width:100%;height:100%;border:0}
.certificate-preview-area img{max-width:100%;max-height:100%;object-fit:contain;border-radius:16px;box-shadow:0 20px 60px rgba(10,22,40,.18)}
.gallery-modal-img{max-width:100%;max-height:100%;object-fit:contain;border-radius:18px;transition:transform .25s ease;transform-origin:center;user-select:none}
.gallery-modal-nav{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  width:54px;height:54px;
  border:0;
  border-radius:999px;
  background:rgba(255,255,255,.92);
  color:var(--navy);
  cursor:pointer;
  display:flex;
  align-items:center;
  justify-content:center;
}
.gallery-modal-nav:hover{background:var(--orange);color:#fff}
.gallery-modal-nav.prev{left:18px}
.gallery-modal-nav.next{right:18px}
.gallery-modal-nav svg{width:24px;height:24px}
.gallery-counter{position:absolute;left:50%;bottom:18px;transform:translateX(-50%);padding:8px 14px;border-radius:999px;background:rgba(0,0,0,.48);color:#fff;font-size:12px;font-weight:900}
.gallery-thumbs{display:flex;gap:10px;overflow-x:auto;padding:4px 2px 2px;scrollbar-width:none}
.gallery-thumbs::-webkit-scrollbar{display:none}
.gallery-thumb{width:92px;height:64px;border-radius:14px;overflow:hidden;flex:0 0 auto;border:2px solid transparent;cursor:pointer;opacity:.58;transition:.25s ease;background:#0f172a}
.gallery-thumb.active{border-color:var(--orange);opacity:1}
.gallery-thumb img{width:100%;height:100%;object-fit:cover}
.video-modal{align-items:center;justify-content:center}
.video-modal.open{display:flex}
.video-modal-box{width:min(900px,94vw);background:#0b1728;border:1px solid rgba(255,255,255,.12);border-radius:20px;overflow:hidden;color:#fff}
.video-placeholder{aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:12px;background:linear-gradient(135deg,var(--blue),var(--orange));padding:28px;text-align:center}
.video-placeholder svg{width:82px;height:82px;opacity:.9}
.video-placeholder h3{font-size:1.6rem}
.video-placeholder p{color:rgba(255,255,255,.78);max-width:520px;line-height:1.7}
.video-close{
  position:absolute;
  top:20px;right:24px;
  color:#fff;
  background:rgba(255,255,255,.1);
  border:0;
  border-radius:50%;
  width:44px;height:44px;
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
}
.video-close svg{width:22px;height:22px}
.toast{
  position:fixed;
  bottom:96px;right:28px;
  background:#fff;
  border-radius:12px;
  padding:14px 20px;
  box-shadow:0 8px 32px rgba(0,0,0,.15);
  display:flex;
  align-items:center;
  gap:10px;
  transform:translateY(80px);
  opacity:0;
  transition:.4s;
  z-index:9999;
  max-width:320px;
  border:1px solid rgba(255,122,0,.14);
}
.toast.show{transform:none;opacity:1}
.toast-icon{width:20px;height:20px;border-radius:50%;background:var(--orange)}
.toast p{font-size:14px;color:var(--text);font-weight:600}
/*.reveal{opacity:0;transform:translateY(28px);transition:opacity .6s ease,transform .6s ease}*/


/*.reveal.visible{opacity:1;transform:none}*/

/* RESPONSIVE */
@media(max-width:1120px){
  .nav-links{display:none}
  .nav-cta{display:none}
  .hamburger{display:flex}
}
@media(max-width:1024px){
  .trust-grid,.feature-grid,.review-cards{grid-template-columns:repeat(2,minmax(0,1fr))}
  .compliance-grid,.about-grid,.appt-grid,.map-inner{grid-template-columns:1fr}
  .services-grid,.certificates-grid{grid-template-columns:repeat(2,minmax(0,1fr))}
  .gallery-slide{flex-basis:calc(50% - 12px)}
  .availability-card{right:18px;bottom:-28px}
  .doctor-profile-wrap{padding-bottom:34px}
}
@media(max-width:640px){
  section,.review-section,.about-bg,.services-section,.certificates-section,.gallery-slider-section{padding:70px 16px}
  .hero{min-height:650px}
  .slide-content h1{font-size:2.1rem}
  .slide-content p{font-size:.96rem}
  .slide-arrows{display:none}
  .badge-24{width:58px;height:58px;font-size:11px}
  .trust-grid,.feature-grid,.review-cards,.services-grid,.certificates-grid,.cred-list{grid-template-columns:1fr}
  .doctor-card-top,.doctor-image,.doctor-image-fallback{min-height:360px;height:360px}
  .doctor-overlay{padding:22px}
  .doctor-name{font-size:26px}
  .doctor-info{padding:22px}
  .availability-card{position:relative;right:auto;bottom:auto;width:100%;margin-top:16px}
  .doctor-profile-wrap{padding-bottom:0}
  .about-actions a{width:100%}
  .form-row{grid-template-columns:1fr;gap:0}
  .appt-form{padding:26px 20px}
  .gallery-slide{flex-basis:88%;min-width:260px}
  .gallery-card{height:340px;border-radius:26px}
  .gallery-modal,.certificate-modal{padding:10px}
  .gallery-modal-viewer{border-radius:22px}
  .gallery-modal-nav{width:44px;height:44px}
  .gallery-modal-nav.prev{left:10px}
  .gallery-modal-nav.next{right:10px}
  .footer-grid{grid-template-columns:1fr}
  .map-iframe{height:320px}
  .wa-btn{width:54px;height:54px;bottom:20px;right:20px}
}
</style>
</head>

<body>

<nav id="navbar">
  <div class="nav-inner">
    <a href="/" class="logo-wrap" aria-label="Ambika Sonography Home">
      <img src="assets/logo2.png" alt="Ambika Sonography Logo">
    </a>

    <ul class="nav-links">
      <li><a href="/" class="nav-link active">Home</a></li>
      <!--<li><a href="#compliance" class="nav-link">Compliance</a></li>-->
      <li><a href="#about" class="nav-link">About</a></li>
      <!--<li><a href="#certificates" class="nav-link">Certificates</a></li>-->
      <li><a href="#services" class="nav-link">Services</a></li>
      <!--<li><a href="#referring-doctors" class="nav-link">For Doctors</a></li>-->
      <!--<li><a href="#patient-info" class="nav-link">Patient Info</a></li>-->
      <li><a href="#gallery" class="nav-link">Gallery</a></li>
      <li><a href="#faq" class="nav-link">FAQ</a></li>
      <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>

    <a href="#appointment" class="nav-cta">Book Appointment</a>

    <button class="hamburger" id="hamburger" type="button" onclick="toggleMenu()" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <a href="/" onclick="toggleMenu()">Home</a>
  <!--<a href="#compliance" onclick="toggleMenu()">Compliance</a>-->
  <a href="#about" onclick="toggleMenu()">About</a>
  <!--<a href="#certificates" onclick="toggleMenu()">Certificates</a>-->
  <a href="#services" onclick="toggleMenu()">Services</a>
  <!--<a href="#referring-doctors" onclick="toggleMenu()">For Doctors</a>-->
  <!--<a href="#patient-info" onclick="toggleMenu()">Patient Info</a>-->
  <a href="#gallery" onclick="toggleMenu()">Gallery</a>
  <a href="#faq" onclick="toggleMenu()">FAQ</a>
  <!--<a href="#privacy" onclick="toggleMenu()">Privacy</a>-->
  <a href="#contact" onclick="toggleMenu()">Contact</a>
  <a href="#appointment" onclick="toggleMenu()" class="mob-cta">Book Appointment</a>
</div>

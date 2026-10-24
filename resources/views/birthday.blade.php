<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Happy Birthday Rofik &amp; Putri 🎂</title>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior:smooth; }
  body {
    font-family:'Poppins',sans-serif;
    background:linear-gradient(160deg,#1a0a2e 0%,#2d1b4e 45%,#4a2c6e 100%);
    color:#fff; min-height:100vh; overflow-x:hidden;
  }
  section { min-height:100vh; display:flex; flex-direction:column; align-items:center; justify-content:center; padding:48px 20px; position:relative; }
  .script { font-family:'Great Vibes',cursive; }
  .hidden { display:none !important; }
  .fade-in { animation:fadeUp 1s ease forwards; opacity:0; transform:translateY(30px); }
  @keyframes fadeUp { to { opacity:1; transform:translateY(0); } }

  /* ===== floating hearts bg ===== */
  .bg-hearts { position:fixed; inset:0; pointer-events:none; z-index:0; }
  .bg-hearts span { position:absolute; bottom:-40px; font-size:22px; opacity:.25; animation:floatUp linear infinite; }
  @keyframes floatUp { to { transform:translateY(-110vh) rotate(360deg); opacity:0; } }

  /* ===== SECTION 1: ENVELOPE ===== */
  #envelopeScene { text-align:center; z-index:1; }
  .title { font-size:clamp(2.2rem,6vw,4rem); color:#ffd6e8; text-shadow:0 0 20px rgba(255,150,200,.5); margin-bottom:8px; }
  .subtitle { opacity:.85; font-weight:300; margin-bottom:60px; font-size:1.05rem; letter-spacing:1px; }

  .envelope-wrap { cursor:pointer; position:relative; width:min(340px,80vw); aspect-ratio:340/230; margin:0 auto; filter:drop-shadow(0 18px 40px rgba(0,0,0,.45)); transition:transform .3s; }
  .envelope-wrap:hover { transform:translateY(-6px) scale(1.02); }
  .envelope { position:absolute; inset:0; }
  .env-back { position:absolute; inset:0; background:linear-gradient(135deg,#e8507a,#c2185b); border-radius:12px; }
  .env-letter { position:absolute; left:6%; right:6%; top:8%; bottom:18%; background:#fff7f9; color:#7a2250; border-radius:8px; z-index:2; transform:translateY(0); transition:transform 1.2s cubic-bezier(.2,.8,.3,1.2) .35s; display:flex; flex-direction:column; align-items:center; justify-content:center; padding:16px 20px; text-align:center; box-shadow:0 8px 24px rgba(0,0,0,.25); }
  .env-letter .script { font-size:1.9rem; color:#d81b60; }
  .env-letter .dates { font-size:.9rem; margin-top:10px; line-height:1.8; }
  .env-letter .dates b { color:#ad1457; }
  .env-front { position:absolute; inset:0; z-index:3; border-radius:12px; background:linear-gradient(135deg,#ff7aa2,#e8507a); clip-path:polygon(0 30%,50% 65%,100% 30%,100% 100%,0 100%); }
  .env-front::after { content:''; position:absolute; left:0; right:0; bottom:0; height:70%; background:linear-gradient(160deg,#f2547d,#d63a68); clip-path:polygon(0 30%,50% 60%,100% 30%,100% 100%,0 100%); }
  .env-seal { position:absolute; z-index:4; left:50%; top:62%; width:56px; height:56px; margin-left:-28px; background:radial-gradient(circle at 35% 30%,#ff96b8,#b71c3f); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:26px; box-shadow:0 4px 14px rgba(0,0,0,.35); transition:transform .5s .2s, opacity .5s .2s; }
  .env-flap { position:absolute; z-index:5; left:0; right:0; top:0; height:38%; background:linear-gradient(180deg,#ff92b4,#f2547d); clip-path:polygon(0 0,100% 0,50% 100%); border-radius:12px 12px 0 0; transform-origin:top; transition:transform .7s cubic-bezier(.6,.05,.3,1); }
  .envelope-wrap.opened .env-flap { transform:rotateX(180deg); z-index:1; }
  .envelope-wrap.opened .env-seal { opacity:0; transform:scale(.4); }
  .envelope-wrap.opened .env-letter { transform:translateY(-46%) scale(1.02); transition-delay:.55s; }
  .envelope-wrap.opened { transform:translateY(30px); }
  .hint { margin-top:34px; opacity:.75; font-size:.95rem; animation:pulse 2s infinite; }
  @keyframes pulse { 0%,100%{opacity:.75} 50%{opacity:.35} }

  /* the revealed letter (full) */
  #letterFull { display:none; text-align:center; max-width:620px; background:rgba(255,255,255,.07); border:1px solid rgba(255,255,255,.15); border-radius:20px; padding:44px 34px; backdrop-filter:blur(6px); box-shadow:0 20px 60px rgba(0,0,0,.4); }
  #letterFull p { font-weight:300; line-height:2; font-size:1.05rem; }
  #letterFull .sigmt { font-size:2rem; color:#ffd6e8; margin-top:16px; }
  .date-card { display:flex; gap:18px; justify-content:center; margin-top:28px; flex-wrap:wrap; }
  .date-card div { background:rgba(255,255,255,.1); border-radius:14px; padding:14px 22px; }
  .date-card .lbl { font-size:.8rem; opacity:.75; }
  .date-card .val { color:#ffd6e8; font-weight:600; }
  .cta { margin-top:36px; padding:12px 30px; border:none; border-radius:999px; background:linear-gradient(135deg,#ff7aa2,#e8507a); color:#fff; font-family:inherit; font-size:1rem; cursor:pointer; box-shadow:0 10px 26px rgba(232,80,122,.45); transition:transform .25s; }
  .cta:hover { transform:translateY(-3px) scale(1.04); }

  /* ===== SECTION 2: CAKE ===== */
  #cakeScene { text-align:center; }
  .cake-stage { position:relative; width:min(320px,78vw); margin:40px auto 30px; cursor:pointer; }
  .plate { height:16px; background:linear-gradient(#dfe6ef,#aab8c8); border-radius:50%/100%; width:118%; margin-left:-9%; box-shadow:0 10px 30px rgba(0,0,0,.4); }
  .cake { margin-top:-4px; }
  .layer { height:88px; border-radius:14px 14px 8px 8px; position:relative; }
  .layer.bottom { width:100%; background:linear-gradient(#7b3f1d,#5d2e12); }
  .layer.top { width:82%; margin:0 auto; height:74px; background:linear-gradient(#8a4a21,#6b3515); }
  .icing { position:absolute; left:-6px; right:-6px; top:-10px; height:34px; background:#fff2f6; border-radius:18px; }
  .icing::before { content:''; position:absolute; left:8%; top:22px; width:16px; height:16px; background:#fff2f6; border-radius:50%; box-shadow:calc(16px * 4) 0 0 #fff2f6, calc(16px * 8) 0 0 #fff2f6, calc(16px * 12) 0 0 #fff2f6; }
  .cherry { position:absolute; top:-30px; left:50%; width:20px; height:20px; margin-left:-10px; background:radial-gradient(circle at 35% 30%,#ff5c7a,#c2183f); border-radius:50%; box-shadow:-70px 6px 0 #e8507a, 70px 6px 0 #e8507a; }
  .candles { display:flex; justify-content:center; gap:64px; margin-bottom:-6px; position:relative; z-index:5; }
  .candle { position:relative; width:12px; height:56px; border-radius:6px; background:repeating-linear-gradient(45deg,#ffd54f 0 6px,#ff8a9b 6px 12px); }
  .flame { position:absolute; top:-26px; left:50%; transform:translateX(-50%); width:14px; height:24px; background:radial-gradient(ellipse at 50% 75%,#fff7c0 0%,#ffd24a 45%,#ff8c1a 70%,rgba(255,120,20,0) 100%); border-radius:50% 50% 50% 50%/62% 62% 38% 38%; filter:drop-shadow(0 0 12px rgba(255,180,60,.9)); animation:flicker .18s infinite alternate; transition:opacity .6s, transform .6s; transform-origin:bottom; }
  @keyframes flicker { from{transform:translateX(-50%) scale(1) rotate(-3deg)} to{transform:translateX(-50%) scale(.92) rotate(3deg)} }
  .glow { position:absolute; top:-44px; left:50%; transform:translateX(-50%); width:70px; height:70px; border-radius:50%; background:radial-gradient(circle,rgba(255,190,80,.35),transparent 70%); pointer-events:none; transition:opacity .8s; }
  .blown .flame { opacity:0; transform:translateX(-50%) scale(.2) translateY(6px); }
  .blown .glow { opacity:0; }
  .smoke { position:absolute; top:-30px; left:50%; width:8px; height:8px; margin-left:-4px; border-radius:50%; background:radial-gradient(circle,rgba(200,200,210,.7),transparent 70%); opacity:0; pointer-events:none; }
  .blown .smoke { animation:rise 2.4s ease-out forwards; }
  .smoke.s1 { animation-delay:.15s } .smoke.s2 { animation-delay:.55s }
  @keyframes rise { 0%{opacity:.9; transform:translateY(0) scale(1)} 100%{opacity:0; transform:translateY(-90px) scale(3)} }
  .cake-caption { font-size:1.15rem; font-weight:300; margin-top:10px; }
  .cake-caption b { color:#ffd6e8; }

  #surpriseText { display:none; }

  /* ===== SECTION 3: GALLERY ===== */
  #galleryScene .title { margin-bottom:10px; }
  .grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(230px,1fr)); gap:26px; max-width:1000px; width:100%; margin-top:50px; }
  .polaroid { background:#fff; padding:12px 12px 18px; border-radius:6px; color:#444; transform:rotate(var(--r,-2deg)); transition:transform .35s, box-shadow .35s; box-shadow:0 14px 34px rgba(0,0,0,.4); animation:fadeUp .8s ease forwards; opacity:0; }
  .polaroid:hover { transform:rotate(0) scale(1.05); z-index:2; }
  .polaroid .ph { aspect-ratio:4/3; border-radius:4px; overflow:hidden; background:linear-gradient(135deg,#ffd6e8,#ff9bb8); display:flex; align-items:center; justify-content:center; font-size:48px; }
  .polaroid img { width:100%; height:100%; object-fit:cover; display:block; }
  .polaroid .cap { font-family:'Great Vibes',cursive; font-size:1.5rem; color:#c2185b; text-align:center; margin-top:10px; }
  .polaroid .cap.num { font-family:'Poppins',sans-serif; font-size:.8rem; font-weight:600; letter-spacing:3px; color:#c2185b; opacity:.65; margin-top:12px; }
  .polaroid .empty { font-size:2rem; }
  .moments { margin-top:64px; max-width:640px; width:100%; text-align:left; }
  .moment { display:flex; gap:16px; align-items:flex-start; padding:16px 18px; margin-bottom:14px; background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); border-radius:14px; font-weight:300; line-height:1.7; }
  .moment .ico { font-size:1.4rem; }
  footer { text-align:center; padding:40px 20px 60px; opacity:.7; font-size:.9rem; font-weight:300; }

  @media (max-width:520px){ .candles{gap:44px} }
</style>
</head>
<body>
<div class="bg-hearts">
  @for($i=0;$i<14;$i++)
    <span style="left:{{ $i * 7 }}%; animation-duration:{{ 8 + ($i % 5) * 2 }}s; animation-delay:{{ $i * 1.3 }}s;">{{ ['💖','🎈','✨','🎂'][$i % 4] }}</span>
  @endfor
</div>

{{-- ============ 1. ENVELOPE ============ --}}
<section id="envelopeScene">
  <div id="envIntro" class="fade-in">
    <h1 class="script title">Untuk Rofik &amp; Putri</h1>
    <p class="subtitle">Ada surat kecil yang nungguin kamu… 💌</p>
    <div class="envelope-wrap" id="envelope" onclick="openEnvelope()">
      <div class="envelope">
        <div class="env-back"></div>
        <div class="env-letter">
          <span class="script">Klik suratnya ✨</span>
          <div class="dates"><b>Rofik</b> — 24 Desember 2002<br><b>Putri</b> — 25 Desember 2002</div>
        </div>
        <div class="env-front"></div>
        <div class="env-seal">💌</div>
        <div class="env-flap"></div>
      </div>
    </div>
    <p class="hint">klik amplopnya untuk buka 🥰</p>
  </div>

  <div id="letterFull">
    <h2 class="script title" style="font-size:2.6rem">Happy Birthday! 🎉</h2>
    <p>Selamat ulang tahun buat kita berdua — <b>Destria Putri</b> &amp; <b>Muhammad Rofik</b>! 🎂<br>
    semoga Tuhan selalu izin nambah umur kita, bikin kita makin dewasa, makin kuat, dan makin sayang satu sama lain ya sayang. terima kasih udah jadi rumah terbaik gua 😌</p>
    <div class="date-card">
      <div><div class="lbl">🎂 Rofik</div><div class="val">24 Desember 2002</div></div>
      <div><div class="lbl">🎂 Putri</div><div class="val">25 Desember 2002</div></div>
    </div>
    <p style="margin-top:26px">nah, setelah ini ada satu langkah terakhir — ada kejutan yang nungguin kamu 👀</p>
    <button class="cta" onclick="document.getElementById('cakeScene').scrollIntoView(); showCake()">🔥 Lanjut ke kuenya</button>
  </div>
</section>

{{-- ============ 2. CAKE ============ --}}
<section id="cakeScene" style="display:none">
  <div id="cakeIntro">
    <h2 class="script title">Tiup Lilinnya, Sayang 🎂</h2>
    <p class="subtitle" style="margin-bottom:10px">instruksi: <b style="color:#ffd6e8">tiup kue ini maka kamu mendapatkan kejutan</b> 😏</p>
  </div>
  <div class="cake-stage" id="cake" onclick="blowCandles()">
    <div class="candles">
      <div class="candle"><div class="glow"></div><div class="flame"></div><div class="smoke s1"></div></div>
      <div class="candle"><div class="glow"></div><div class="flame"></div><div class="smoke s2"></div></div>
    </div>
    <div class="cake">
      <div class="layer top"><div class="icing"></div><div class="cherry"></div></div>
      <div class="layer bottom"><div class="icing"></div></div>
    </div>
    <div class="plate"></div>
  </div>
  <p class="cake-caption" id="cakeHint">klik kuenya untuk tiup lilinnya 💨</p>
  <div id="surpriseText">
    <h2 class="script title" style="font-size:3rem; animation:fadeUp 1s ease forwards">Yeay! Kejutannya… 🎁</h2>
    <p class="subtitle" style="animation:fadeUp 1s .4s ease forwards">semua kenangan kita, gua simpen di sini. scroll ke bawah ya 📸</p>
    <button class="cta" style="animation:fadeUp 1s .8s ease forwards" onclick="document.getElementById('galleryScene').scrollIntoView()">Bukti kalau lu cantik banget 😎</button>
  </div>
</section>

{{-- ============ 3. GALLERY ============ --}}
<section id="galleryScene" style="display:none">
  <h2 class="script title">Kumpulan Bidadari yang Cantik Sekali 🌸</h2>
  <p class="subtitle">jangan lupa liat yang paling cantik sambil senyum ya 😁</p>
  <div class="grid">
    @php
      $files = collect(glob(public_path('images/*.{jpg,jpeg,jfif,png,webp,bmp}'), GLOB_BRACE))->map(fn($f) => basename($f));
      $files = $files->values();
    @endphp
    @foreach($files as $i => $file)
      <div class="polaroid" style="--r:{{ $i % 2 ? '2deg' : '-3deg' }}; animation-delay:{{ $i * 0.12 }}s;">
        <div class="ph">
          <img src="{{ asset('images/'.$file) }}" alt="Momen kita {{ $i+1 }}" loading="lazy">
        </div>
        <div class="cap num">{{ sprintf('%02d', $i + 1) }}</div>
      </div>
    @endforeach
    @if($files->isEmpty())
      <p class="subtitle">belom ada fotonya 💔</p>
    @endif
  </div>

  <div class="moments">
    <div class="moment"><span class="ico">💬</span><p>Pertama kali chat, gugup sendiri gua nungguin balasan lu 😄</p></div>
    <div class="moment"><span class="ico">🫶</span><p>Lagi deg-degan, ngeklik foto lu — ternyata hati gua gak kuat dong.</p></div>
    <div class="moment"><span class="ico">🌙</span><p>Video call hampir subuh — masih gak mau ondol-online-call diputus.</p></div>
    <div class="moment"><span class="ico">🎁</span><p>Hadiah kecil yang lu kasih inget, gua simpen sampe sekarang.</p></div>
    <div class="moment"><span class="ico">💍</span><p>Doa gua terbaik: kita selalu bareng, sekarang dan nanti, sampai halal 🤲</p></div>
  </div>
</section>

<footer>Made with 💖 — Rofik untuk Putri, Desember akan selalu jadi bulan kita.</footer>

<script>
  function openEnvelope() {
    const env = document.getElementById('envelope');
    if (env.classList.contains('opened')) return;
    env.classList.add('opened');
    document.querySelector('.hint').textContent = 'suratnya lagi kebuka… 💌';
    setTimeout(() => {
      document.getElementById('envIntro').style.display = 'none';
      const lf = document.getElementById('letterFull');
      lf.style.display = 'block'; lf.classList.add('fade-in'); lf.style.opacity = 1; lf.style.transform = 'none';
    }, 1900);
  }

  function showCake() { document.getElementById('cakeScene').style.display = 'flex'; }

  function blowCandles() {
    const cake = document.getElementById('cake');
    if (cake.classList.contains('blown')) return;
    cake.classList.add('blown');
    document.getElementById('cakeHint').textContent = 'lilinnya mati semua… kejutannya muncul nih ✨';
    setTimeout(() => {
      document.getElementById('cakeIntro').style.display = 'none';
      const st = document.getElementById('surpriseText');
      st.style.display = 'block';
      const gs = document.getElementById('galleryScene');
      gs.style.display = 'flex';
    }, 1500);
  }
</script>
</body>
</html>

<?php
/** @var yii\web\View $this */
/** @var array $themes */
/** @var string $theme */
/** @var array $subthemes */
/** @var string $subtheme */
/** @var string $content */
?>
<style>
body {
    background: linear-gradient(120deg, #e0e7ff 0%, #fffde7 100%);
    min-height: 100vh;
    margin: 0;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    letter-spacing: 0.01em;
    transition: background 0.4s;
}
body.dark {
    background: linear-gradient(120deg, #23243a 0%, #1a1a2e 100%);
}
.theme-toggle {
    position: fixed;
    top: 24px;
    right: 36px;
    z-index: 100;
    background: #fffde7;
    color: #1a237e;
    border: none;
    border-radius: 50px;
    padding: 10px 22px 10px 18px;
    font-size: 1.08em;
    font-weight: 600;
    box-shadow: 0 2px 12px 0 #e0e0e0;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background 0.3s, color 0.3s;
}
body.dark .theme-toggle {
    background: #23243a;
    color: #ffd600;
    box-shadow: 0 2px 12px 0 #23243a;
}
.theme-toggle svg {
    width: 22px; height: 22px;
}
.knowledge-container {
    display: flex;
    gap: 40px;
    margin: 60px auto 0 auto;
    max-width: 1200px;
    background: rgba(255,255,255,0.98);
    border-radius: 24px;
    box-shadow: 0 12px 40px 0 rgba(60,60,120,0.13);
    padding: 40px 40px 40px 32px;
    position: relative;
    overflow: hidden;
}
.knowledge-container:before {
    content: '';
    position: absolute;
    left: -80px; top: -80px;
    width: 300px; height: 300px;
    background: radial-gradient(circle, #e3eaff 0%, #fff 80%);
    opacity: 0.5;
    z-index: 0;
    transition: background 0.4s;
}
body.dark .knowledge-container {
    background: rgba(34,36,58,0.98);
    box-shadow: 0 12px 40px 0 rgba(20,20,40,0.25);
}
body.dark .knowledge-container:before {
    background: radial-gradient(circle, #23243a 0%, #23243a 100%);
    opacity: 0.85;
}
.knowledge-list {
    min-width: 240px;
    border: none;
    border-radius: 18px;
    background: #f4f7fb;
    padding: 24px 16px 16px 16px;
    box-shadow: 0 4px 18px 0 #e0e0e0;
    margin-bottom: 0;
    position: relative;
    z-index: 1;
}
body.dark .knowledge-list {
    background: #23243a;
    box-shadow: 0 4px 18px 0 #181828;
}
.knowledge-list b {
    font-size: 1.22em;
    color: #1a237e;
    margin-bottom: 16px;
    display: block;
    letter-spacing: 0.5px;
    font-weight: 700;
}
body.dark .knowledge-list b {
    color: #ffd600;
}
.knowledge-list .item {
    padding: 14px 12px;
    margin-bottom: 10px;
    cursor: pointer;
    border-radius: 9px;
    transition: background 0.18s, color 0.18s, box-shadow 0.18s, border 0.18s;
    font-size: 1.08em;
    color: #2d3a4a;
    border: 1.5px solid transparent;
    position: relative;
    font-weight: 500;
    box-shadow: 0 1px 2px 0 #e3eaff33;
}
body.dark .knowledge-list .item {
    color: #e3eaff;
    background: #23243a;
    border-color: transparent;
}
.knowledge-list .item:hover {
    background: #e3eaff;
    color: #1a237e;
    border: 1.5px solid #b3baff;
    box-shadow: 0 4px 12px 0 #e3eaff;
    z-index: 2;
}
body.dark .knowledge-list .item:hover {
    background: #2d3350;
    color: #ffd600;
    border: 1.5px solid #ffd600;
    box-shadow: 0 4px 12px 0 #23243a;
}
.knowledge-list .selected {
    background: linear-gradient(90deg, #ffd600 60%, #fffde7 100%);
    color: #222;
    font-weight: 700;
    border: 2px solid #ffd600;
    box-shadow: 0 8px 24px 0 #ffe082;
    z-index: 3;
    position: relative;
}
body.dark .knowledge-list .selected {
    background: linear-gradient(90deg, #ffd600 60%, #23243a 100%);
    color: #23243a;
    border: 2px solid #ffd600;
    box-shadow: 0 8px 24px 0 #ffd60044;
}
.knowledge-content {
    flex: 1;
    border: none;
    border-radius: 20px;
    background: linear-gradient(120deg, #fffde7 60%, #e3eaff 100%);
    padding: 48px 48px 44px 48px;
    min-width: 340px;
    box-shadow: 0 4px 24px 0 #e0e0e0;
    font-size: 1.22em;
    color: #333;
    line-height: 1.8;
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
}
body.dark .knowledge-content {
    background: linear-gradient(120deg, #23243a 60%, #1a1a2e 100%);
    color: #e3eaff;
    box-shadow: 0 4px 24px 0 #181828;
}
.knowledge-content b {
    font-size: 1.28em;
    color: #1a237e;
    letter-spacing: 0.5px;
    font-weight: 700;
}
body.dark .knowledge-content b {
    color: #ffd600;
}
#content-text {
    display: block;
    margin-top: 24px;
    font-size: 1.12em;
    color: #444;
    min-height: 80px;
    word-break: break-word;
    background: rgba(255,255,255,0.7);
    border-radius: 10px;
    padding: 18px 20px;
    box-shadow: 0 2px 8px 0 #e3eaff33;
    width: 100%;
}
body.dark #content-text {
    background: rgba(34,36,58,0.7);
    color: #ffd600;
    box-shadow: 0 2px 8px 0 #23243a44;
}
@media (max-width: 1200px) {
    .knowledge-container { flex-direction: column; max-width: 99vw; padding: 18px 2vw; }
    .knowledge-list, .knowledge-content { min-width: 0; width: 100%; }
    .knowledge-content { padding: 28px 10px; }
}
::-webkit-scrollbar {
    width: 10px;
    background: #f4f7fb;
}
::-webkit-scrollbar-thumb {
    background: #e3eaff;
    border-radius: 8px;
}
body.dark ::-webkit-scrollbar-thumb {
    background: #23243a;
}
.knowledge-list .item, .knowledge-content, .knowledge-list {
}
@keyframes fadeInUp {
    /* 0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: none; } */
}
</style>
<button class="theme-toggle" id="theme-toggle" title="Переключить тему">
    <svg id="sun" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" stroke="currentColor" stroke-width="2"/></svg>
    <svg id="moon" viewBox="0 0 24 24" fill="none" style="display:none"><path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" stroke="currentColor" stroke-width="2"/></svg>
    <span id="theme-label">Тёмная тема</span>
</button>
<div class="knowledge-container">
    <div class="knowledge-list" id="theme-list">
        <b>Тема</b>
    </div>
    <div class="knowledge-list" id="subtheme-list">
        <b>Подтема</b>
    </div>
    <div class="knowledge-content" id="knowledge-content">
        <b>Содержание</b><br><br>
        <span id="content-text"></span>
    </div>
</div>
<script>
const themes = <?= json_encode($themes) ?>;
const initialTheme = <?= json_encode($theme) ?>;
const initialSubthemes = <?= json_encode($subthemes) ?>;
const initialSubtheme = <?= json_encode($subtheme) ?>;
const initialContent = <?= json_encode($content) ?>;
const csrfParam = '<?= Yii::$app->request->csrfParam ?>';
const csrfToken = '<?= Yii::$app->request->csrfToken ?>';

function renderThemes(selectedTheme) {
    const themeList = document.getElementById('theme-list');
    let html = '<b>Тема</b>';
    themes.forEach(t => {
        html += `<div class='item${t === selectedTheme ? ' selected' : ''}' data-theme='${t}'>${t}</div>`;
    });
    themeList.innerHTML = html;
}

function renderSubthemes(subthemes, selectedSubtheme) {
    const subthemeList = document.getElementById('subtheme-list');
    let html = '<b>Подтема</b>';
    if (!Array.isArray(subthemes)) subthemes = [];
    subthemes.forEach(st => {
        html += `<div class='item${st === selectedSubtheme ? ' selected' : ''}' data-subtheme='${st}'>${st}</div>`;
    });
    subthemeList.innerHTML = html;
}

function renderContent(content) {
    document.getElementById('content-text').textContent = content;
}

function fetchData(theme, subtheme = null) {
    console.log('fetchData', theme, subtheme);
    let body = `${csrfParam}=${encodeURIComponent(csrfToken)}&theme=${encodeURIComponent(theme)}`;
    if (subtheme) body += `&subtheme=${encodeURIComponent(subtheme)}`;
    return fetch('index.php?r=knowledge/data', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: body
    })
    .then(r => {
        if (!r.ok) throw new Error('Network error');
        return r.json();
    })
    .then(data => {
        console.log('AJAX response', data);
        return data;
    })
    .catch(e => { console.error('AJAX error:', e); return {}; });
}

function selectTheme(theme) {
    fetchData(theme).then(data => {
        if (!data || !data.theme) return;
        renderThemes(data.theme);
        renderSubthemes(data.subthemes, data.subtheme);
        renderContent(data.content);
    });
}

function selectSubtheme(theme, subtheme) {
    fetchData(theme, subtheme).then(data => {
        if (!data || !data.theme) return;
        renderThemes(data.theme);
        renderSubthemes(data.subthemes, data.subtheme);
        renderContent(data.content);
    });
}

document.getElementById('theme-list').addEventListener('click', function(e) {
    if (e.target.classList.contains('item')) {
        selectTheme(e.target.getAttribute('data-theme'));
        e.preventDefault();
        return false;
    }
});
document.getElementById('subtheme-list').addEventListener('click', function(e) {
    if (e.target.classList.contains('item')) {
        let themeEl = document.querySelector('#theme-list .selected');
        let theme = themeEl ? themeEl.getAttribute('data-theme') : themes[0];
        selectSubtheme(theme, e.target.getAttribute('data-subtheme'));
        e.preventDefault();
        return false;
    }
});

// Тёмная тема
const themeToggle = document.getElementById('theme-toggle');
const sunIcon = document.getElementById('sun');
const moonIcon = document.getElementById('moon');
const themeLabel = document.getElementById('theme-label');
function setTheme(dark) {
    document.body.classList.toggle('dark', dark);
    sunIcon.style.display = dark ? 'none' : '';
    moonIcon.style.display = dark ? '' : 'none';
    themeLabel.textContent = dark ? 'Светлая тема' : 'Тёмная тема';
    localStorage.setItem('theme', dark ? 'dark' : 'light');
}
themeToggle.addEventListener('click', () => {
    setTheme(!document.body.classList.contains('dark'));
});
// Автоустановка темы
if (localStorage.getItem('theme') === 'dark' || (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    setTheme(true);
}

renderThemes(initialTheme);
renderSubthemes(initialSubthemes, initialSubtheme);
renderContent(initialContent);
</script>

// Máquina de escribir para el nombre
window.addEventListener('DOMContentLoaded', () => {
  const el = document.querySelector('.typewriter');
  if (!el) return;
  const text = el.textContent;
  el.textContent = '';
  let i = 0;
  function type() {
    if (i < text.length) {
      el.textContent += text.charAt(i);
      i++;
      setTimeout(type, 80);
    }
  }
  type();
});

// Modo oscuro
const darkSwitch = document.getElementById('dark-switch');
darkSwitch?.addEventListener('change', function() {
  document.body.classList.toggle('dark-mode', this.checked);
});

// Descargar PDF
const pdfBtn = document.getElementById('download-pdf');
pdfBtn?.addEventListener('click', function() {
  window.open('cv-jonnier-ortiz.pdf', '_blank');
});

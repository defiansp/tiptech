window.addEventListener('load', () => {
  const loading = document.getElementById('loading');
  const content = document.getElementById('content');

  const alreadyVisited = localStorage.getItem('visited');

  if (!alreadyVisited) {
    // Pertama kali buka, tampilkan loading
    setTimeout(() => {
      loading.classList.add('opacity-0', 'scale-95');
    }, 100);

    setTimeout(() => {
      loading.classList.add('hidden');
      content.classList.remove('opacity-0');
    }, 500);

    // Simpan flag sudah pernah mengunjungi
    localStorage.setItem('visited', 'true');
  } else {
    // Sudah pernah, langsung tampilkan konten
    loading.classList.add('hidden');
    content.classList.remove('opacity-0');
  }
});

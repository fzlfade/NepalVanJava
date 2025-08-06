document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");

  if (form) {
    form.addEventListener("submit", function (e) {
      const email = form.querySelector("input[name='email']").value;
      const username = form.querySelector("input[name='username']").value;
      const phone = form.querySelector("input[name='phone']").value;

      if (!email || !username || !phone) {
        e.preventDefault();
        alert("Harap isi semua field yang wajib.");
      }

      // Bisa tambahkan validasi lain jika perlu
    });
  }
});

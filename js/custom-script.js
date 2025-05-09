const avatarRadios = document.querySelectorAll('input[name="avatar"]');

avatarRadios.forEach(radio => {
    radio.addEventListener('change', function () {
        // Reset semua border avatar ke default
        document.querySelectorAll('.avatar-img').forEach(img => {
            img.classList.remove('avatar-checked');
        });

        // Kasih border hijau ke avatar yang dipilih
        this.parentNode.querySelector('img').classList.add('avatar-checked');
    });
});

// end.


/*
Product Name: AkashNetLab Server Status Page
Copyright © 2025 AkashNetLab
Developer: AkashNetLab
Email: opensource [at] AkashNetLab [dot] dev

 Date: 2025
 */

document.addEventListener('DOMContentLoaded', () => {
    const statusElements = document.querySelectorAll('.status');

    statusElements.forEach(el => {
        const host = el.getAttribute('data-host');
        const port = el.getAttribute('data-port');

        // Create a request to check if the service is online
        fetch(`status_check.php?host=${host}&port=${port}`)
            .then(response => response.json())
            .then(data => {
                if (data.online) {
                    el.textContent = '✔ Online';
                    el.classList.add('status-online');
                } else {
                    el.textContent = '✖ Offline';
                    el.classList.add('status-offline');
                }
            })
            .catch(() => {
                el.textContent = '✖ Offline';
                el.classList.add('status-offline');
            });
    });
});
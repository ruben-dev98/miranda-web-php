<button id="swal">
</button>
<script defer>
    const enlace = document.querySelector('#swal')
    enlace.addEventListener('click', () => {
        Swal.fire({
            title: '{{ $title }}',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
            showConfirmButton: false,
            timer: 1500
        });
    });
    enlace.click();
    enlace.remove();
</script>